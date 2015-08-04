<?php

	$this->menu=array(
	array('label'=>'Lista de Tipoveh','url'=>array('index')),
	array('label'=>'Crear Tipoveh','url'=>array('create')),
	array('label'=>'Ver Tipoveh','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar Tipoveh','url'=>array('admin')),
	);
	?>

	<h2>Actualizar Tipoveh <?php echo $model->id; ?></h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>