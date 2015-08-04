<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_propietario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_propietario),array('view','id'=>$data->id_propietario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_pro')); ?>:</b>
	<?php echo CHtml::encode($data->nom_pro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>