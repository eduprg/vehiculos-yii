<?php

$this->menu=array(
array('label'=>'Crear Usuario','url'=>array('create')),
array('label'=>'Administrar Usuario','url'=>array('admin')),
);
?>

<h2>Usuarios</h2>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
