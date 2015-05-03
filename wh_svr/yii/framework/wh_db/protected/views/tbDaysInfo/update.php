<?php
/* @var $this TbDaysInfoController */
/* @var $model TbDaysInfo */

$this->breadcrumbs=array(
	'Tb Days Infos'=>array('index'),
	$model->iDayID=>array('view','id'=>$model->iDayID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbDaysInfo', 'url'=>array('index')),
	array('label'=>'Create TbDaysInfo', 'url'=>array('create')),
	array('label'=>'View TbDaysInfo', 'url'=>array('view', 'id'=>$model->iDayID)),
	array('label'=>'Manage TbDaysInfo', 'url'=>array('admin')),
);
?>

<h1>Update TbDaysInfo <?php echo $model->iDayID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>