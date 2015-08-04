<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idveh')); ?>:</b>
	<?php echo CHtml::encode($data->idveh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anioini')); ?>:</b>
	<?php echo CHtml::encode($data->anioini); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aniofin')); ?>:</b>
	<?php echo CHtml::encode($data->aniofin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_propietario')); ?>:</b>
	<?php echo CHtml::encode($data->id_propietario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obs_mat')); ?>:</b>
	<?php echo CHtml::encode($data->obs_mat); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('est_mat')); ?>:</b>
	<?php echo CHtml::encode($data->est_mat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtipov')); ?>:</b>
	<?php echo CHtml::encode($data->idtipov); ?>
	<br />

	*/ ?>

</div>