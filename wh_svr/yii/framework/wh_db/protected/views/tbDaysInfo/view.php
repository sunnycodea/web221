<?php
/* @var $this TbDaysInfoController */
/* @var $model TbDaysInfo */

$this->breadcrumbs=array(
	'Tb Days Infos'=>array('index'),
	$model->iDayID,
);

$this->menu=array(
	array('label'=>'List TbDaysInfo', 'url'=>array('index')),
	array('label'=>'Create TbDaysInfo', 'url'=>array('create')),
	array('label'=>'Update TbDaysInfo', 'url'=>array('update', 'id'=>$model->iDayID)),
	array('label'=>'Delete TbDaysInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->iDayID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbDaysInfo', 'url'=>array('admin')),
);
?>

<h1>View TbDaysInfo #<?php echo $model->iDayID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iDayID',
		'iRouteID',
		'iThemeID',
		'szDesc',
		'iDayNum',
		'dtDate',
	),
)); ?>
