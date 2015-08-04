<?php

$this->menu=array(
array('label'=>'Lista de Vehiculo','url'=>array('index')),
array('label'=>'Crear Vehiculo','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('vehiculo-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h2>Vehiculos</h2>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'vehiculo-grid',
'dataProvider'=>$model->search(),
'type' => 'striped bordered condensed',
'filter'=>$model,
'columns'=>array(
		'id',
		'marca',
		'modelo',
		'chasis',
		'placa_anterior',
		'placa_actual',
		/*
		'motor',
		'pais',
		'color1',
		'color2',
		'estado',
		'idtipo',
		'anio',
		'id_propietario',
		'foto',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
