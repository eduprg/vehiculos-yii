<?php

$this->menu=array(
array('label'=>'Lista de Vehiculo','url'=>array('index')),
array('label'=>'Administrar Vehiculo','url'=>array('admin')),
);
?>

<h2>Crear Vehiculo</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>