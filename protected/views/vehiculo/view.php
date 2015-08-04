<?php

$this->menu=array(
array('label'=>'Lista de Vehiculo','url'=>array('index')),
array('label'=>'Crear Vehiculo','url'=>array('create')),
array('label'=>'Actualizar Vehiculo','url'=>array('update','id'=>$model->id)),
array('label'=>'Borrar Vehiculo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Esta seguro que desea borrarlo?')),
array('label'=>'Administrar Vehiculo','url'=>array('admin')),
);
?>

<h2>Ver Vehiculo #<?php echo $model->id; ?></h2>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'marca',
		'modelo',
		'chasis',
		'placa_anterior',
		'placa_actual',
		'motor',
		'pais',
		'color1',
		'color2',
		'estado',
		'idtipo',
		'anio',
		'id_propietario',
		'foto',
),
)); ?>
