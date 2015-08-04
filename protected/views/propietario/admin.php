<?php

$this->menu=array(
array('label'=>'Lista de Propietario','url'=>array('index')),
array('label'=>'Crear Propietario','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('propietario-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h2>Propietarios</h2>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'propietario-grid',
'dataProvider'=>$model->search(),
'type' => 'striped bordered condensed',
'filter'=>$model,
'columns'=>array(
		'id_propietario',
		'nom_pro',
		'telefono',
		'direccion',
		'estado',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
