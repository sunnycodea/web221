<?php
/* @var $this TbDaysInfoController */
/* @var $model TbDaysInfo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tb-days-info-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'iRouteID'); ?>
		<?php echo $form->textField($model,'iRouteID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'iRouteID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iThemeID'); ?>
		<?php echo $form->textField($model,'iThemeID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'iThemeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'szDesc'); ?>
		<?php echo $form->textField($model,'szDesc',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'szDesc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iDayNum'); ?>
		<?php echo $form->textField($model,'iDayNum',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'iDayNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dtDate'); ?>
		<?php echo $form->textField($model,'dtDate'); ?>
		<?php echo $form->error($model,'dtDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->