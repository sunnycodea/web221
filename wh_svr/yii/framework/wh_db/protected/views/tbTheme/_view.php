<?php
/* @var $this TbThemeController */
/* @var $data TbTheme */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iThemeID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iThemeID), array('view', 'id'=>$data->iThemeID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('szName')); ?>:</b>
	<?php echo CHtml::encode($data->szName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('szDesc')); ?>:</b>
	<?php echo CHtml::encode($data->szDesc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iRouteNum')); ?>:</b>
	<?php echo CHtml::encode($data->iRouteNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iPrority')); ?>:</b>
	<?php echo CHtml::encode($data->iPrority); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dtDate')); ?>:</b>
	<?php echo CHtml::encode($data->dtDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dtUpdatetime')); ?>:</b>
	<?php echo CHtml::encode($data->dtUpdatetime); ?>
	<br />


</div>