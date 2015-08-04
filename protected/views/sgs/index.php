<?php

$this->menu=array(
array('label'=>'Crear Sgs','url'=>array('create')),
array('label'=>'Administrar Sgs','url'=>array('admin')),
);
?>

<h2>Sgs</h2>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
