<?php

	$this->menu=array(
	array('label'=>'Lista de Vehiculo','url'=>array('index')),
	array('label'=>'Crear Vehiculo','url'=>array('create')),
	array('label'=>'Ver Vehiculo','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar Vehiculo','url'=>array('admin')),
	);
	?>

	<h2>Actualizar Vehiculo <?php echo $model->id; ?></h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>