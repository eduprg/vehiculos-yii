<?php

$this->menu=array(
array('label'=>'Crear Matricula','url'=>array('create')),
array('label'=>'Administrar Matricula','url'=>array('admin')),
);
?>

<h2>Matriculas</h2>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
