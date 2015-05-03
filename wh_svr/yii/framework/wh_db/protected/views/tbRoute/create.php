<?php
/* @var $this TbRouteController */
/* @var $model TbRoute */

$this->breadcrumbs=array(
	'Tb Routes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbRoute', 'url'=>array('index')),
	array('label'=>'Manage TbRoute', 'url'=>array('admin')),
);
?>

<h1>Create TbRoute</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>