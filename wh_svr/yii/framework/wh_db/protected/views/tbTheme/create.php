<?php
/* @var $this TbThemeController */
/* @var $model TbTheme */

$this->breadcrumbs=array(
	'Tb Themes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbTheme', 'url'=>array('index')),
	array('label'=>'Manage TbTheme', 'url'=>array('admin')),
);
?>

<h1>Create TbTheme</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>