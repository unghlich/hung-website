
<div class="container">
    <div class="categories form">
        <?php echo $this->Form->create('Category',array('novalidate' => true)); ?>
        <fieldset>
            <legend><?php echo __('Sửa danh mục sản phẩm'); ?></legend>
            <?php echo $this->Form->input('id');?>
            <div class="form-group">
                <div class="col-lg-3">
                    <label for="CategoryName">Tên sản phẩm</label>
                </div>
                <div class="col-lg-9">
                    <?php echo $this->Form->input('name',array('class'=>'form-control','label'=>false,'div'=>false)); ?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-3"><label for="CategoryParrentId">Danh mục cha</label></div>
                <div class="col-lg-9">
                    <?php echo $this->Form->input('parrent_id',array('options' => $parentList,'class'=>'form-control','label'=>false,'div'=>false)); ?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-3"><label for="CategoryActiveFlag">Hoạt động: </label></div>
                <div class="col-lg-9">
                    <?php echo $this->Form->input('active_flag',array('type'=>'checkbox','label'=>false,'div'=>false)); ?>
                </div>
            </div>
            <div class="form-group">
                <?php
                echo $this->Form->submit(
                    'Sửa danh mục',
                    array('div' => false,'class' => 'btn btn-primary', 'title' => 'Tạo mới')
                );
                ?>
            </div>
        </fieldset>
        <?php echo $this->Form->end(); ?>
    </div>
    <div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('Danh sách danh mục'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Danh sách sản phẩm'), array('controller' => 'products', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Tạo mới sản phẩm'), array('controller' => 'products', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>


