<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
    <div class="row-flid"></div>
    <div class="span12">
        <?php
           $this->widget('bootstrap.widgets.TbMenu', array(
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'nav nav-pills'),
            ));
        ?>
    </div>  
</div>
<div class="row-fluid">
    <div class="span12">
         <?php echo $content; ?>
        </div>
    </div>
</div>

<?php $this->endContent(); ?>