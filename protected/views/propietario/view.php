<?php

$this->menu=array(
array('label'=>'Lista de Propietario','url'=>array('index')),
array('label'=>'Crear Propietario','url'=>array('create')),
array('label'=>'Actualizar Propietario','url'=>array('update','id'=>$model->id_propietario)),
array('label'=>'Borrar Propietario','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_propietario),'confirm'=>'Esta seguro que desea borrarlo?')),
array('label'=>'Administrar Propietario','url'=>array('admin')),
);
?>

<h2>Ver Propietario #<?php echo $model->id_propietario; ?></h2>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_propietario',
		'nom_pro',
		'telefono',
		'direccion',
		'estado',
),
)); ?>
