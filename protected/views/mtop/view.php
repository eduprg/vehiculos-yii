<?php

$this->menu=array(
array('label'=>'Lista de Mtop','url'=>array('index')),
array('label'=>'Crear Mtop','url'=>array('create')),
array('label'=>'Actualizar Mtop','url'=>array('update','id'=>$model->numero)),
array('label'=>'Borrar Mtop','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->numero),'confirm'=>'Esta seguro que desea borrarlo?')),
array('label'=>'Administrar Mtop','url'=>array('admin')),
);
?>

<h2>Ver Mtop #<?php echo $model->numero; ?></h2>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'numero',
		'mtop',
		'tipo',
		'fin_mto',
		'ffi_mto',
		'peso',
		'largo',
		'ancho',
		'alto',
		'id_veh',
		'foto',
		'estado',
),
)); ?>
