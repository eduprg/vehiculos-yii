<?php

$this->menu=array(
array('label'=>'Lista de Usuario','url'=>array('index')),
array('label'=>'Crear Usuario','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('usuario-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h2>Usuarios</h2>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'usuario-grid',
'dataProvider'=>$model->search(),
'type' => 'striped bordered condensed',
'filter'=>$model,
'columns'=>array(
		
		'user',
		
		array(
                    'name'=> 'rol',
                    'filter'=>array('1'=>'admin','2'=>'secretaria',3=>'chofer'),
                    'value'=> '$data->rol==1 ? "admin": ($data->rol==2 ? "secretaria": "chofer" )'
                    ),
        array(
                'class' => 'booster.widgets.TbToggleColumn',
                'toggleAction' => 'usuario/desactivar',
                'name' => 'estado',
                'header' => 'Estado',
            'filter'=>'',
            ),
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
