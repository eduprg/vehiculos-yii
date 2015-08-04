<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'sgs-form',
	    'type'=>'horizontal',
			'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    'clientOptions' => array(
       // 'validateOnSubmit' => true,
    ),

)); ?>

<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'id_sgs',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>7)))); ?>

	<?php echo $form->textFieldGroup($model,'empresa',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>30)))); ?>

	<?php echo $form->dropDownListGroup(
			$model,
			'id_vehiculo',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => CHtml::listData(vehiculo::model()->findAll('estado=1'),'id','placa_actual'),
					'htmlOptions' => array('empty'=>'Seleccione'),
				)
			)
		); ?>
	<?php echo $form->textFieldGroup($model,'resultado',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
<?php echo $form->datePickerGroup($model,'fin_sgs',array('widgetOptions'=>array('options'=>array('format'=>'yyyy-mm-dd'),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'click Año y Mes')); ?>
<?php echo $form->datePickerGroup($model,'ffi_sgs',array('widgetOptions'=>array('options'=>array('format'=>'yyyy-mm-dd'),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'click Año y Mes')); ?>

	
	<?php echo $form->textFieldGroup($model,'numero',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
     <?php echo $form->switchGroup($model, 'estado',
			array(
				'widgetOptions' => array(
					'events'=>array(
						'switchChange'=>'js:function(event, state) {
						  console.log(this); // DOM element
						  console.log(event); // jQuery event
						  console.log(state); // true | false
						}'
					)
				)
				)
		); ?>
	<?php echo $form->textFieldGroup($model,'foto',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>300)))); ?>

<div class="form-actions">
    	
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
                        'htmlOptions'=>array('style' => 'background:#F5F5F5;color:#F7941D; font-weight: bold;'),
			
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
