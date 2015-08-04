<?php

$this->menu=array(
array('label'=>'Lista de Tipoveh','url'=>array('index')),
array('label'=>'Crear Tipoveh','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('tipoveh-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h2>Tipovehs</h2>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'tipoveh-grid',
'dataProvider'=>$model->search(),
'type' => 'striped bordered condensed',
'filter'=>$model,
'columns'=>array(
		'id',
		'nombre',
		'estado',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
