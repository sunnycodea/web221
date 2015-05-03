<?php
/* @var $this TbThemeController */
/* @var $model TbTheme */

$this->breadcrumbs=array(
	'Tb Themes'=>array('index'),
	$model->iThemeID=>array('view','id'=>$model->iThemeID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbTheme', 'url'=>array('index')),
	array('label'=>'Create TbTheme', 'url'=>array('create')),
	array('label'=>'View TbTheme', 'url'=>array('view', 'id'=>$model->iThemeID)),
	array('label'=>'Manage TbTheme', 'url'=>array('admin')),
);
?>

<h1>Update TbTheme <?php echo $model->iThemeID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>