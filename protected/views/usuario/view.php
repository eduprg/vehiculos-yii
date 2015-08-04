<?php

$this->menu=array(
array('label'=>'Lista de Usuario','url'=>array('index')),
array('label'=>'Crear Usuario','url'=>array('create')),
array('label'=>'Actualizar Usuario','url'=>array('update','id'=>$model->id)),
array('label'=>'Borrar Usuario','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Esta seguro que desea borrarlo?')),
array('label'=>'Administrar Usuario','url'=>array('admin')),
);
?>

<h2>Ver Usuario #<?php echo $model->id; ?></h2>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'user',
		'pass',
		'rol',
		'estado',
),
)); ?>
