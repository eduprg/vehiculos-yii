<?php

	$this->menu=array(
	array('label'=>'Lista de Usuario','url'=>array('index')),
	array('label'=>'Crear Usuario','url'=>array('create')),
	array('label'=>'Ver Usuario','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar Usuario','url'=>array('admin')),
	);
	?>

	<h2>Actualizar Usuario <?php echo $model->id; ?></h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>