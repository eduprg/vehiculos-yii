<?php

$this->menu=array(
array('label'=>'Lista de Prueba','url'=>array('index')),
array('label'=>'Crear Prueba','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('prueba-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h2>Pruebas</h2>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'prueba-grid',
'dataProvider'=>$model->search(),
'type' => 'striped bordered condensed',
'filter'=>$model,
'columns'=>array(
		'ID',
		'ANO',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
