<?php

	$this->menu=array(
	array('label'=>'Lista de Prueba','url'=>array('index')),
	array('label'=>'Crear Prueba','url'=>array('create')),
	array('label'=>'Ver Prueba','url'=>array('view','id'=>$model->ID)),
	array('label'=>'Administrar Prueba','url'=>array('admin')),
	);
	?>

	<h2>Actualizar Prueba <?php echo $model->ID; ?></h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>