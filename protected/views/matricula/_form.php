<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'matricula-form',
	    'type'=>'horizontal',
			'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    'clientOptions' => array(
       // 'validateOnSubmit' => true,
    ),

)); ?>

<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'id',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>9)))); ?>
    
     <?php echo $form->labelEx($model,'idtipov'); ?>
   
    <?php echo $form->dropDownListGroup($model,'idtipov',
 		CHtml::listData(tipoveh::model()->findAll('estado=1'),'id','nombre'),
						array(
						'ajax'=>array(
						'type'=>'POST',
						'url'=>CController::createUrl('Matricula/Selectdos'),
						'update'=>'#'.CHtml::activeId($model,'idveh'),
						'beforeSend' =>'function(){
						$("#Matricula_idveh").find("option").remove();}'
							),'prompt'=>'Seleccione'

    )); ?>

    <?php echo $form->error($model,'idtipov'); ?> 

    <?php echo $form->labelEx($model,'idveh'); ?>
    <?php echo $form->dropDownListGroup($model,'idveh', array()); ?>
    <?php echo $form->error($model,'idveh'); ?>
 
 
	

	
		<?php echo $form->datePickerGroup($model,'anioini',array('widgetOptions'=>array('options'=>array('format'=>'yyyy-mm-dd'),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'click Año y Mes')); ?>
	<?php echo $form->datePickerGroup($model,'aniofin',array('widgetOptions'=>array('options'=>array('format'=>'yyyy-mm-dd'),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'click Año y Mes')); ?>
	
	
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
	<?php echo $form->textFieldGroup($model,'obs_mat',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>300)))); ?>

	<?php echo $form->switchGroup($model, 'est_mat',
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

<?php echo $form->textFieldGroup($model,'image',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>300)))); ?>


<div class="form-actions">
    	
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
                        'htmlOptions'=>array('style' => 'background:#F5F5F5;color:#F7941D; font-weight: bold;'),
			
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
