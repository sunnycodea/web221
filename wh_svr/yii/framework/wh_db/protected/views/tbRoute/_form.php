<?php
/* @var $this TbRouteController */
/* @var $model TbRoute */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tb-route-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'iThemeID'); ?>
		<?php echo $form->textField($model,'iThemeID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'iThemeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'szName'); ?>
		<?php echo $form->textField($model,'szName',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'szName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'szDesc'); ?>
		<?php echo $form->textField($model,'szDesc',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'szDesc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iMoney'); ?>
		<?php echo $form->textField($model,'iMoney',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'iMoney'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iDays'); ?>
		<?php echo $form->textField($model,'iDays',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'iDays'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iPrority'); ?>
		<?php echo $form->textField($model,'iPrority'); ?>
		<?php echo $form->error($model,'iPrority'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iStatus'); ?>
		<?php echo $form->textField($model,'iStatus'); ?>
		<?php echo $form->error($model,'iStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dtDate'); ?>
		<?php echo $form->textField($model,'dtDate'); ?>
		<?php echo $form->error($model,'dtDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dtUpdatetime'); ?>
		<?php echo $form->textField($model,'dtUpdatetime'); ?>
		<?php echo $form->error($model,'dtUpdatetime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->