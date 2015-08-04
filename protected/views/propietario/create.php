<?php

$this->menu=array(
array('label'=>'Lista de Propietario','url'=>array('index')),
array('label'=>'Administrar Propietario','url'=>array('admin')),
);
?>

<h2>Crear Propietario</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>