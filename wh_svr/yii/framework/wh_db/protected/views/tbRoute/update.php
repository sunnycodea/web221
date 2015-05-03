<?php
/* @var $this TbRouteController */
/* @var $model TbRoute */

$this->breadcrumbs=array(
	'Tb Routes'=>array('index'),
	$model->iRouteID=>array('view','id'=>$model->iRouteID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbRoute', 'url'=>array('index')),
	array('label'=>'Create TbRoute', 'url'=>array('create')),
	array('label'=>'View TbRoute', 'url'=>array('view', 'id'=>$model->iRouteID)),
	array('label'=>'Manage TbRoute', 'url'=>array('admin')),
);
?>

<h1>Update TbRoute <?php echo $model->iRouteID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>