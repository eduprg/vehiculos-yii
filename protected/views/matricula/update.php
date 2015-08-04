<?php

	$this->menu=array(
	array('label'=>'Lista de Matricula','url'=>array('index')),
	array('label'=>'Crear Matricula','url'=>array('create')),
	array('label'=>'Ver Matricula','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar Matricula','url'=>array('admin')),
	);
	?>

	<h2>Actualizar Matricula <?php echo $model->id; ?></h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>