<div class="container">
    <div class="banners form">
        <?php echo $this->Form->create('Banner',array( 'type' => 'file','novalidate'=>true)); ?>
        <fieldset>
            <legend><?php echo __('Tạo mới banner'); ?></legend>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="ProductName">Link</label>
                    </div>
                    <div class="col-lg-9">
                        <?php echo $this->Form->input('link',array('label'=>false,'div'=>false,'class'=>'form-control')); ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="ProductName">Ảnh</label>
                    </div>
                    <div class="col-lg-9">
                        <?php echo $this->Form->input('path',array('type'=>'file','label'=>false,'div'=>false)); ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="ProductName">Loại</label>
                    </div>
                    <div class="col-lg-1">
                        <?php echo $this->Form->input('type',array('label'=>false,'div'=>false,'class'=>'form-control')); ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="ProductName">Mô tả</label>
                    </div>
                    <div class="col-lg-9">
                        <?php echo $this->Form->input('description',array('label'=>false,'div'=>false)); ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="ProductName">Hiện thị</label>
                    </div>
                    <div class="col-lg-9">
                        <?php echo $this->Form->input('active_flag',array('label'=>false,'div'=>false,'type'=>'checkbox')); ?>
                    </div>
                </div>
            </div>

        </fieldset>
        <?php echo $this->Form->end(__('Tạo mới')); ?>
    </div>
    <div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>

            <li><?php echo $this->Html->link(__('Danh sách Banners'), array('action' => 'index')); ?></li>
        </ul>
    </div>
</div>

