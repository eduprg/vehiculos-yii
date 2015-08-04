<?php

$this->menu=array(
array('label'=>'Lista de Prueba','url'=>array('index')),
array('label'=>'Administrar Prueba','url'=>array('admin')),
);
?>

<h2>Crear Prueba</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>