<?php

$this->menu=array(
array('label'=>'Lista de Usuario','url'=>array('index')),
array('label'=>'Administrar Usuario','url'=>array('admin')),
);
?>

<h2>Crear Usuario</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>