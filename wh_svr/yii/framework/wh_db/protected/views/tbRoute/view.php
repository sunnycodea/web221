<?php
/* @var $this TbRouteController */
/* @var $model TbRoute */

$this->breadcrumbs=array(
	'Tb Routes'=>array('index'),
	$model->iRouteID,
);

$this->menu=array(
	array('label'=>'List TbRoute', 'url'=>array('index')),
	array('label'=>'Create TbRoute', 'url'=>array('create')),
	array('label'=>'Update TbRoute', 'url'=>array('update', 'id'=>$model->iRouteID)),
	array('label'=>'Delete TbRoute', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->iRouteID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbRoute', 'url'=>array('admin')),
);
?>

<h1>View TbRoute #<?php echo $model->iRouteID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iRouteID',
		'iThemeID',
		'szName',
		'szDesc',
		'iMoney',
		'iDays',
		'iPrority',
		'iStatus',
		'dtDate',
		'dtUpdatetime',
	),
)); ?>
