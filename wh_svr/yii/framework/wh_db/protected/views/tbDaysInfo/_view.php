<?php
/* @var $this TbDaysInfoController */
/* @var $data TbDaysInfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iDayID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iDayID), array('view', 'id'=>$data->iDayID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iRouteID')); ?>:</b>
	<?php echo CHtml::encode($data->iRouteID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iThemeID')); ?>:</b>
	<?php echo CHtml::encode($data->iThemeID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('szDesc')); ?>:</b>
	<?php echo CHtml::encode($data->szDesc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iDayNum')); ?>:</b>
	<?php echo CHtml::encode($data->iDayNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dtDate')); ?>:</b>
	<?php echo CHtml::encode($data->dtDate); ?>
	<br />


</div>