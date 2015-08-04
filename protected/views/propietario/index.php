<?php

$this->menu=array(
array('label'=>'Crear Propietario','url'=>array('create')),
array('label'=>'Administrar Propietario','url'=>array('admin')),
);
?>

<h2>Propietarios</h2>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
