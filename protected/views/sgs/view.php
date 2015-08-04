<?php

$this->menu=array(
array('label'=>'Lista de Sgs','url'=>array('index')),
array('label'=>'Crear Sgs','url'=>array('create')),
array('label'=>'Actualizar Sgs','url'=>array('update','id'=>$model->id_sgs)),
array('label'=>'Borrar Sgs','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_sgs),'confirm'=>'Esta seguro que desea borrarlo?')),
array('label'=>'Administrar Sgs','url'=>array('admin')),
);
?>

<h2>Ver Sgs #<?php echo $model->id_sgs; ?></h2>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_sgs',
		'empresa',
		'id_vehiculo',
		'resultado',
		'fin_sgs',
		'ffi_sgs',
		'numero',
		'estado',
		'foto',
),
)); ?>
