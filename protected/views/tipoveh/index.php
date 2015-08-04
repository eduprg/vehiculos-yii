<?php

$this->menu=array(
array('label'=>'Crear Tipoveh','url'=>array('create')),
array('label'=>'Administrar Tipoveh','url'=>array('admin')),
);
?>

<h2>Tipovehs</h2>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
