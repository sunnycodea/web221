<?php
/* @var $this TbDaysInfoController */
/* @var $model TbDaysInfo */

$this->breadcrumbs=array(
	'Tb Days Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbDaysInfo', 'url'=>array('index')),
	array('label'=>'Manage TbDaysInfo', 'url'=>array('admin')),
);
?>

<h1>Create TbDaysInfo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>