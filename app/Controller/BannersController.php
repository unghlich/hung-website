<?php
App::uses('AppController', 'Controller');
/**
 * Banners Controller
 *
 * @property Banner $Banner
 * @property PaginatorComponent $Paginator
 */
class BannersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Banner->recursive = 0;
		$this->set('banners', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Banner->exists($id)) {
			throw new NotFoundException(__('Invalid banner'));
		}
		$options = array('conditions' => array('Banner.' . $this->Banner->primaryKey => $id));
		$this->set('banner', $this->Banner->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {//pr($this->request->data);die;
			$this->Banner->create();
            $filename = null;
            if (
                !empty($this->request->data['Banner']['path']['tmp_name'])
                && is_uploaded_file($this->request->data['Banner']['path']['tmp_name'])
            ) {
                // Strip path information

                $filename = date('dmYhis').uniqid().basename($this->request->data['Banner']['path']['name']);
                move_uploaded_file(
                    $this->request->data['Banner']['path']['tmp_name'],
                    WWW_ROOT . 'uploads' . DS.'banners' .DS. $filename
                );
            }
            // Set the file-name only to save in the database
            $this->request->data['Banner']['path'] = $filename;
			if ($this->Banner->save($this->request->data)) {
				$this->Flash->success(__('Tạo banner thành công.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('Tạo không thành công.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Banner->exists($id)) {
			throw new NotFoundException(__('Invalid banner'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Banner->save($this->request->data)) {
				$this->Flash->success(__('The banner has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The banner could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Banner.' . $this->Banner->primaryKey => $id));
			$this->request->data = $this->Banner->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Banner->id = $id;
		if (!$this->Banner->exists()) {
			throw new NotFoundException(__('Invalid banner'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Banner->delete()) {
			$this->Flash->success(__('The banner has been deleted.'));
		} else {
			$this->Flash->error(__('The banner could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
