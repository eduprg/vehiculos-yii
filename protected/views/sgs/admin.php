<?php

$this->menu=array(
array('label'=>'Lista de Sgs','url'=>array('index')),
array('label'=>'Crear Sgs','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('sgs-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h2>Sgs</h2>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'sgs-grid',
'dataProvider'=>$model->search(),
'type' => 'striped bordered condensed',
'filter'=>$model,
'columns'=>array(
		'id_sgs',
		'empresa',
		'id_vehiculo',
		'resultado',
		'fin_sgs',
		'ffi_sgs',
		/*
		'numero',
		'estado',
		'foto',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
