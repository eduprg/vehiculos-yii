<?php

$this->menu=array(
array('label'=>'Lista de Tipoveh','url'=>array('index')),
array('label'=>'Crear Tipoveh','url'=>array('create')),
array('label'=>'Actualizar Tipoveh','url'=>array('update','id'=>$model->id)),
array('label'=>'Borrar Tipoveh','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Esta seguro que desea borrarlo?')),
array('label'=>'Administrar Tipoveh','url'=>array('admin')),
);
?>

<h2>Ver Tipoveh #<?php echo $model->id; ?></h2>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nombre',
              array(
                    'name'=> 'estado',
                    'filter'=>array('1'=>'Activo','2'=>'Desactivado'),
                    'value'=> '$data->estado==1 ? "Activo": "Desactivado" '
                    ),


		
),
)); ?>
