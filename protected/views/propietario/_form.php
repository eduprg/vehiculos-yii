<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'propietario-form',
	    'type'=>'horizontal',
			'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    'clientOptions' => array(
       // 'validateOnSubmit' => true,
    ),

)); ?>

<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'nom_pro',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>

	<?php echo $form->textFieldGroup($model,'telefono',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'direccion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>90)))); ?>

	<?php echo $form->textFieldGroup($model,'estado',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

<div class="form-actions">
    	
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
                        'htmlOptions'=>array('style' => 'background:#F5F5F5;color:#F7941D; font-weight: bold;'),
			
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
