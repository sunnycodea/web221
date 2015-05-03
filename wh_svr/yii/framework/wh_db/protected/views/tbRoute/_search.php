<?php
/* @var $this TbRouteController */
/* @var $model TbRoute */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'iRouteID'); ?>
		<?php echo $form->textField($model,'iRouteID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iThemeID'); ?>
		<?php echo $form->textField($model,'iThemeID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'szName'); ?>
		<?php echo $form->textField($model,'szName',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'szDesc'); ?>
		<?php echo $form->textField($model,'szDesc',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iMoney'); ?>
		<?php echo $form->textField($model,'iMoney',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iDays'); ?>
		<?php echo $form->textField($model,'iDays',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iPrority'); ?>
		<?php echo $form->textField($model,'iPrority'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iStatus'); ?>
		<?php echo $form->textField($model,'iStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dtDate'); ?>
		<?php echo $form->textField($model,'dtDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dtUpdatetime'); ?>
		<?php echo $form->textField($model,'dtUpdatetime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->