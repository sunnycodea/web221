<?php
/* @var $this TbThemeController */
/* @var $model TbTheme */

$this->breadcrumbs=array(
	'Tb Themes'=>array('index'),
	$model->iThemeID,
);

$this->menu=array(
	array('label'=>'List TbTheme', 'url'=>array('index')),
	array('label'=>'Create TbTheme', 'url'=>array('create')),
	array('label'=>'Update TbTheme', 'url'=>array('update', 'id'=>$model->iThemeID)),
	array('label'=>'Delete TbTheme', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->iThemeID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbTheme', 'url'=>array('admin')),
);
?>

<h1>View TbTheme #<?php echo $model->iThemeID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iThemeID',
		'szName',
		'szDesc',
		'iRouteNum',
		'iPrority',
		'dtDate',
		'dtUpdatetime',
	),
)); ?>
