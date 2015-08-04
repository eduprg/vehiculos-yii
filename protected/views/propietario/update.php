<?php

	$this->menu=array(
	array('label'=>'Lista de Propietario','url'=>array('index')),
	array('label'=>'Crear Propietario','url'=>array('create')),
	array('label'=>'Ver Propietario','url'=>array('view','id'=>$model->id_propietario)),
	array('label'=>'Administrar Propietario','url'=>array('admin')),
	);
	?>

	<h2>Actualizar Propietario <?php echo $model->id_propietario; ?></h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>