<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'vehiculo-form',
	    'type'=>'horizontal',
	'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    'enableAjaxValidation'=>true,
    'clientOptions' => array(
       // 'validateOnSubmit' => true,
    ),

)); ?>

<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'placa_actual',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>8)))); ?>

	<?php echo $form->textFieldGroup($model,'placa_anterior',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>10)))); ?>


	<?php echo $form->textFieldGroup($model,'marca',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>

	<?php echo $form->textFieldGroup($model,'modelo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>

	<?php echo $form->textFieldGroup($model,'chasis',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>

	
	<?php echo $form->textFieldGroup($model,'motor',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'pais',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>30)))); ?>

	<?php echo $form->textFieldGroup($model,'color1',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>30)))); ?>

	<?php echo $form->textFieldGroup($model,'color2',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>30)))); ?>

	
	<?php echo $form->dropDownListGroup(
			$model,
			'idtipo',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => CHtml::listData(Tipoveh::model()->findAll('estado=1'),'id','nombre'),
					'htmlOptions' => array('empty'=>'Seleccione'),
				)
			)
		); ?>


	<?php echo $form->textFieldGroup($model,'anio',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>4)))); ?>

	<?php echo $form->dropDownListGroup(
			$model,
			'id_propietario',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => CHtml::listData(Propietario::model()->findAll('estado=1'),'id_propietario','nom_pro'),
					'htmlOptions' => array('empty'=>'Seleccione'),
				)
			)
		); ?>

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
