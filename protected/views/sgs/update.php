<?php

	$this->menu=array(
	array('label'=>'Lista de Sgs','url'=>array('index')),
	array('label'=>'Crear Sgs','url'=>array('create')),
	array('label'=>'Ver Sgs','url'=>array('view','id'=>$model->id_sgs)),
	array('label'=>'Administrar Sgs','url'=>array('admin')),
	);
	?>

	<h2>Actualizar Sgs <?php echo $model->id_sgs; ?></h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>