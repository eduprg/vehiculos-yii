<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marca')); ?>:</b>
	<?php echo CHtml::encode($data->marca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelo')); ?>:</b>
	<?php echo CHtml::encode($data->modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chasis')); ?>:</b>
	<?php echo CHtml::encode($data->chasis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('placa_anterior')); ?>:</b>
	<?php echo CHtml::encode($data->placa_anterior); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('placa_actual')); ?>:</b>
	<?php echo CHtml::encode($data->placa_actual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motor')); ?>:</b>
	<?php echo CHtml::encode($data->motor); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pais')); ?>:</b>
	<?php echo CHtml::encode($data->pais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color1')); ?>:</b>
	<?php echo CHtml::encode($data->color1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color2')); ?>:</b>
	<?php echo CHtml::encode($data->color2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtipo')); ?>:</b>
	<?php echo CHtml::encode($data->idtipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio')); ?>:</b>
	<?php echo CHtml::encode($data->anio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_propietario')); ?>:</b>
	<?php echo CHtml::encode($data->id_propietario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
	<?php echo CHtml::encode($data->foto); ?>
	<br />

	*/ ?>

</div>