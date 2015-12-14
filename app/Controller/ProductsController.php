<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 * @property ProductImage $ProductImage
 * @property Category $Category
 */
class ProductsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 * @param string slug
 * @return void
 */
	public function index($slug = null) {
        $this->loadModel('Category');

        $conditions = array(
            'Category.active_flag' => 1
        );
        if($slug) {
            $conditions['Category.slug'] = $slug;
        }
        $category = $this->Category->find('first',array(
            'recursive' => -1,
            'conditions'=> $conditions
        ));

        if(count($category)){
            $categories = $this->Category->find('all',array(
                'recursive' => -1,
                'conditions'=> array(
                    'Category.parrent_id' => $category['Category']['id'],
                    'Category.active_flag' => 1,
                )
            ));
            $categoryIds = array($category['Category']['id']);
            if(count($categories)){
                foreach($categories as $c){
                    $categoryIds[] = $c['Category']['id'];
                }
            }
            $products = $this->Product->find('all',array(
                'conditions' => array(
                    'Product.category_id' => $categoryIds
                )
            ));
            $this->set('category',$category);

        }else{
            $products = $this->Product->find('all');
        }

		$this->set('products', $products);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $slug
 * @return void
 */
	public function view($slug) {

		$options = array(
            'conditions' => array(
                'Product.slug' => $slug)
        );
        $product = $this->Product->find('first', $options);
        if(!count($product)){
            $this->Flash->error(__('Sản phẩm không tồn tại'));
            return $this->redirect('/');
        }
        $categoryId     = $product['Category']['id'];
        $listProducts   = $this->Product->find('all',array(
            'recursive'  => -1,
            'conditions' => array(
                'category_id' => $categoryId
            )
        ));

		$this->set('product', $product);
		$this->set('listProducts', $listProducts);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
        $this->loadModel('ProductImage');
		if ($this->request->is('post')) {//pr($this->request->data);die;
			$this->Product->create();
            // Initialize filename-variable
            $filename = null;
            if (
                !empty($this->request->data['Product']['avatar']['tmp_name'])
                && is_uploaded_file($this->request->data['Product']['avatar']['tmp_name'])
            ) {
                // Strip path information

                $filename = date('dmYhis').uniqid().basename($this->request->data['Product']['avatar']['name']);
                move_uploaded_file(
                    $this->request->data['Product']['avatar']['tmp_name'],
                    WWW_ROOT . 'upload' .DS. $filename
                );
            }
            // Set the file-name only to save in the database
            $this->request->data['Product']['avatar'] = $filename;

            $imageNames = array();
            if(count($this->request->data('ProductImage'))){
                foreach($this->request->data('ProductImage') as $im ){
                    $imageName = null;
                    if (
                        !empty($im['tmp_name'])
                        && is_uploaded_file($im['tmp_name'])
                    ) {
                        // Strip path information
                        $imageName = date('dmYhis').uniqid().basename($im['name']);
                        move_uploaded_file(
                            $im['tmp_name'],
                            WWW_ROOT . 'upload' .DS. $imageName
                        );
                        $imageNames[] = $imageName;
                    }
                }
            }

			if ($this->Product->save($this->request->data)) {
                if(count($imageNames)){
                    foreach($imageNames as $ims){
                        $productImage = array(
                            'product_id' => $this->Product->id,
                            'path'       => $ims
                        );
                        $this->ProductImage->create();
                        $this->ProductImage->save($productImage);
                    }
                }

				$this->Flash->success(__('Tạo mới sản phẩm thành công'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('Tạo mới sản phẩm không thành công'));
			}
		}
		$categories = $this->Product->Category->find('list',array(
            'conditions' => array('Category.active_flag' => 1)
        ));



        if(!count($categories)){
            $this->Flash->error(__('Bạn cần tạo danh mục sản phẩm trước.'));
            return $this->redirect(array('controller'=>'categories','action' => 'index'));
        }

		$users = $this->Product->User->find('list');
		$this->set(compact('categories', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Product->save($this->request->data)) {
				$this->Flash->success(__('The product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
			$this->request->data = $this->Product->find('first', $options);
		}
		$categories = $this->Product->Category->find('list');
		$users = $this->Product->User->find('list');
		$this->set(compact('categories', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Product->delete()) {
			$this->Flash->success(__('The product has been deleted.'));
		} else {
			$this->Flash->error(__('The product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
