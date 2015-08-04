<?php

$this->menu=array(
array('label'=>'Lista de Matricula','url'=>array('index')),
array('label'=>'Crear Matricula','url'=>array('create')),
array('label'=>'Actualizar Matricula','url'=>array('update','id'=>$model->id)),
array('label'=>'Borrar Matricula','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Esta seguro que desea borrarlo?')),
array('label'=>'Administrar Matricula','url'=>array('admin')),
);
?>

<h2>Ver Matricula #<?php echo $model->id; ?></h2>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'idveh',
		'image',
		'anioini',
		'aniofin',
		'id_propietario',
		'obs_mat',
		'est_mat',
		'idtipov',
),
)); ?>
