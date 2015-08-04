<?php

$this->menu=array(
array('label'=>'Lista de Matricula','url'=>array('index')),
array('label'=>'Crear Matricula','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('matricula-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h2>Matriculas</h2>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'matricula-grid',
'dataProvider'=>$model->search(),
'type' => 'striped bordered condensed',
'filter'=>$model,
'columns'=>array(
		'id',
		array(
			'name'=>'nombre',
			'value'=>'$data->idtip0->nombre',
			'type'=>'text',
			'filter'=>CHtml::activeTextField($model, 'nombre'),),
		
		array(
			'name'=>'placa_actual',
			'value'=>'$data->idveh0->placa_actual',
			'type'=>'text',
			'filter'=>CHtml::activeTextField($model, 'placa_actual'),),
		
		
	
		'anioini',
		'aniofin',
		array(
			'name'=>'nom_pro',
			'value'=>'$data->idpro->nom_pro',
			'type'=>'text',
			'filter'=>CHtml::activeTextField($model, 'nom_pro'),),
		
		
		/*
		'obs_mat',
		'est_mat',
		
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
