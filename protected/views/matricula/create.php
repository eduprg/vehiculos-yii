<?php

$this->menu=array(
array('label'=>'Lista de Matricula','url'=>array('index')),
array('label'=>'Administrar Matricula','url'=>array('admin')),
);
?>

<h2>Crear Matricula</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>