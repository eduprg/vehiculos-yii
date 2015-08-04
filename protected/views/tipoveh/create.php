<?php

$this->menu=array(
array('label'=>'Lista de Tipoveh','url'=>array('index')),
array('label'=>'Administrar Tipoveh','url'=>array('admin')),
);
?>

<h2>Crear Tipoveh</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>