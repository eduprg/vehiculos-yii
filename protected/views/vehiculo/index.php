<?php

$this->menu=array(
array('label'=>'Crear Vehiculo','url'=>array('create')),
array('label'=>'Administrar Vehiculo','url'=>array('admin')),
);
?>

<h2>Vehiculos</h2>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
