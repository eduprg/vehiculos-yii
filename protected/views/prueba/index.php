<?php

$this->menu=array(
array('label'=>'Crear Prueba','url'=>array('create')),
array('label'=>'Administrar Prueba','url'=>array('admin')),
);
?>

<h2>Pruebas</h2>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
