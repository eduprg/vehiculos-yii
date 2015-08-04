<?php

	$this->menu=array(
	array('label'=>'Lista de Mtop','url'=>array('index')),
	array('label'=>'Crear Mtop','url'=>array('create')),
	array('label'=>'Ver Mtop','url'=>array('view','id'=>$model->numero)),
	array('label'=>'Administrar Mtop','url'=>array('admin')),
	);
	?>

	<h2>Actualizar Mtop <?php echo $model->numero; ?></h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>