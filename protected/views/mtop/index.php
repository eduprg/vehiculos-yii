<?php

$this->menu=array(
array('label'=>'Crear Mtop','url'=>array('create')),
array('label'=>'Administrar Mtop','url'=>array('admin')),
);
?>

<h2>Mtops</h2>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
