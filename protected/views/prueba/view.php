<?php

$this->menu=array(
array('label'=>'Lista de Prueba','url'=>array('index')),
array('label'=>'Crear Prueba','url'=>array('create')),
array('label'=>'Actualizar Prueba','url'=>array('update','id'=>$model->ID)),
array('label'=>'Borrar Prueba','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Esta seguro que desea borrarlo?')),
array('label'=>'Administrar Prueba','url'=>array('admin')),
);
?>

<h2>Ver Prueba #<?php echo $model->ID; ?></h2>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'ID',
		'ANO',
),
)); ?>
