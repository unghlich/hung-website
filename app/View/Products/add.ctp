<div class="container">

    <?php echo $this->Form->create('Product',array( 'type' => 'file','novalidate'=>true)); ?>
    <fieldset>
        <legend><?php echo __('Tạo mới sản phẩm'); ?></legend>


        <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label for="ProductName">Tên sản phẩm</label>
                </div>
                <div class="col-lg-9">
                    <?php echo $this->Form->input('name',array('class'=>'form-control','label'=>false,'div'=>false)); ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label for="CategoryName">Mô tả về sản phẩm này</label>
                </div>
                <div class="col-lg-9">
                    <?php echo $this->Form->input('description',array('class'=>'form-control','label'=>false,'div'=>false)); ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label for="ProductCategoryId">Danh mục</label>
                </div>
                <div class="col-lg-5">
                    <?php echo $this->Form->input('category_id',array('class'=>'form-control','label'=>false,'div'=>false)); ?>
                </div>
            </div>

        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label for="ProductAvatar">Avatar</label>
                </div>
                <div class="col-lg-5">
                    <?php echo $this->Form->input('avatar',array('type'=>'file',' multiple','class'=>'form-control','label'=>false,'div'=>false)); ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label>Ảnh chi tiết</label>
                </div>
                <div class="col-lg-5">
                    <input type="file" multiple class="multi" maxlength="3"  name="data[ProductImage][]"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label for="ProductPrice">Giá(x 1000vnđ)</label>
                </div>
                <div class="col-lg-2">
                    <?php echo $this->Form->input('price',array('class'=>'form-control','label'=>false,'div'=>false)); ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-lg-3"><label for="ProductHotFlag">Sản phẩm hot: </label></div>
                <div class="col-lg-9">
                    <?php echo $this->Form->input('hot_flag',array('type'=>'checkbox','label'=>false,'div'=>false)); ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-lg-3"><label for="ProductHighlightFlag">Sản phẩm nổi bật: </label></div>
                <div class="col-lg-9">
                    <?php echo $this->Form->input('highlight_flag',array('type'=>'checkbox','label'=>false,'div'=>false)); ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-lg-3"><label for="ProductDiscountFlag">Sản phẩm giảm giá: </label></div>
                <div class="col-lg-9">
                    <?php echo $this->Form->input('discount_flag',array('type'=>'checkbox','label'=>false,'div'=>false)); ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-lg-3"><label for="ProductDiscount">Phần trăm giảm giá: </label></div>
                <div class="col-lg-9">
                    <?php echo $this->Form->input('discount',array('label'=>false,'div'=>false)); ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-lg-3"><label for="ProductMaterial">Chất liệu: </label></div>
                <div class="col-lg-9">
                    <?php echo $this->Form->input('material',array('label'=>false,'div'=>false)); ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-lg-3"><label for="ProductSize">Kích cỡ: </label></div>
                <div class="col-lg-9">
                    <?php echo $this->Form->input('size',array('label'=>false,'div'=>false)); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-lg-offset-3">
                    <?php
                    echo $this->Form->submit(
                        'Tạo mới sản phẩm',
                        array('div' => false,'class' => 'btn btn-primary', 'title' => 'Tạo mới')
                    );
                    ?>
                </div>
            </div>
        </div>
    </fieldset>
    <?php echo $this->Form->end(); ?>
    <div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('Danh sách sản phẩm'), array('action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('Danh sách danh mục sản phẩm'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Tạo mới danh mục sản phẩm'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
        </ul>
    </div>

</div>
<?php echo $this->html->script('multiupload_image')?>
<script>
    $(function(){
        $('.multi').MultiFile({
            accept:'gif|jpg|png',
            max:3,
            STRING: {
                remove:'Remover',
                selected:'Selecionado: $file',
                denied:'Invalido arquivo de tipo $ext!',
                duplicate:'Arquivo ja selecionado:\n$file!'
            }
        });
    });
</script>