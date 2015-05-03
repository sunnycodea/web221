<?php
/* @var $this TbRouteController */
/* @var $data TbRoute */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iRouteID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iRouteID), array('view', 'id'=>$data->iRouteID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iThemeID')); ?>:</b>
	<?php echo CHtml::encode($data->iThemeID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('szName')); ?>:</b>
	<?php echo CHtml::encode($data->szName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('szDesc')); ?>:</b>
	<?php echo CHtml::encode($data->szDesc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iMoney')); ?>:</b>
	<?php echo CHtml::encode($data->iMoney); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iDays')); ?>:</b>
	<?php echo CHtml::encode($data->iDays); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iPrority')); ?>:</b>
	<?php echo CHtml::encode($data->iPrority); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('iStatus')); ?>:</b>
	<?php echo CHtml::encode($data->iStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dtDate')); ?>:</b>
	<?php echo CHtml::encode($data->dtDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dtUpdatetime')); ?>:</b>
	<?php echo CHtml::encode($data->dtUpdatetime); ?>
	<br />

	*/ ?>

</div>