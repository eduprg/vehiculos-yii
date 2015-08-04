<?php

$this->menu=array(
array('label'=>'Lista de Mtop','url'=>array('index')),
array('label'=>'Crear Mtop','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('mtop-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h2>Mtops</h2>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'mtop-grid',
'dataProvider'=>$model->search(),
'type' => 'striped bordered condensed',
'filter'=>$model,
'columns'=>array(
		'numero',
		'mtop',
		'tipo',
		'fin_mto',
		'ffi_mto',
		'peso',
		/*
		'largo',
		'ancho',
		'alto',
		'id_veh',
		'foto',
		'estado',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
