<div class="container">
    <div class="categories index">
        <h2><?php echo __('Categories'); ?></h2>
        <table class="table">
            <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('name','Tên danh mục'); ?></th>
                <th><?php echo $this->Paginator->sort('parrent_id','Danh mục cha'); ?></th>
                <th><?php echo $this->Paginator->sort('active_flag','Trạng thái'); ?></th>
                <th><?php echo $this->Paginator->sort('created','Ngày tạo'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?php echo h($category['Category']['name']); ?>&nbsp;</td>
                    <td>
                        <?php
                            if($category['Category']['parrent_id']){
                                echo $this->Html->link($category['Parrent']['name'], array('controller' => 'categories', 'action' => 'view', $category['Parrent']['id']));
                            }else{
                                echo '----';
                            }
                        ?>
                    </td>
                    <td><?php echo $category['Category']['active_flag']?'Active':'In active'; ?>&nbsp;</td>
                    <td><?php echo date('d/m/y',strtotime($category['Category']['created'])); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $category['Category']['id'])); ?>
                        <?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $category['Category']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $category['Category']['id']))); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <p>
            <?php
            echo $this->Paginator->counter(array(
                'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
            ));
            ?>	</p>
        <div class="paging">
            <?php
            echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
            ?>
        </div>
    </div>
    <div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('Tạo mới danh mục'), array('action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('Danh sách danh mục'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Danh sách sản phẩm'), array('controller' => 'products', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Tạo mới sản phẩm'), array('controller' => 'products', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>

