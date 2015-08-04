<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_sgs')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sgs),array('view','id'=>$data->id_sgs)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa')); ?>:</b>
	<?php echo CHtml::encode($data->empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_vehiculo')); ?>:</b>
	<?php echo CHtml::encode($data->id_vehiculo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resultado')); ?>:</b>
	<?php echo CHtml::encode($data->resultado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fin_sgs')); ?>:</b>
	<?php echo CHtml::encode($data->fin_sgs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ffi_sgs')); ?>:</b>
	<?php echo CHtml::encode($data->ffi_sgs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
	<?php echo CHtml::encode($data->foto); ?>
	<br />

	*/ ?>

</div>