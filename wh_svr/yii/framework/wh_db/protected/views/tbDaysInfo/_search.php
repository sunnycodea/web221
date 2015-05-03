<?php
/* @var $this TbDaysInfoController */
/* @var $model TbDaysInfo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'iDayID'); ?>
		<?php echo $form->textField($model,'iDayID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iRouteID'); ?>
		<?php echo $form->textField($model,'iRouteID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iThemeID'); ?>
		<?php echo $form->textField($model,'iThemeID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'szDesc'); ?>
		<?php echo $form->textField($model,'szDesc',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iDayNum'); ?>
		<?php echo $form->textField($model,'iDayNum',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dtDate'); ?>
		<?php echo $form->textField($model,'dtDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->