<?php

$this->menu=array(
array('label'=>'Lista de Sgs','url'=>array('index')),
array('label'=>'Administrar Sgs','url'=>array('admin')),
);
?>

<h2>Crear Sgs</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>