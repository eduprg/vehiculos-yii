<?php

$this->menu=array(
array('label'=>'Lista de Mtop','url'=>array('index')),
array('label'=>'Administrar Mtop','url'=>array('admin')),
);
?>

<h2>Crear Mtop</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>