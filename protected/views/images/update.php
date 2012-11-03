<?php
/* @var $this ImagesController */
/* @var $model Images */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	$model->idImages=>array('view','id'=>$model->idImages),
	'Update',
);

$this->menu=array(
	array('label'=>'List Images', 'url'=>array('index')),
	array('label'=>'Create Images', 'url'=>array('create')),
	array('label'=>'View Images', 'url'=>array('view', 'id'=>$model->idImages)),
	array('label'=>'Manage Images', 'url'=>array('admin')),
);
?>

<h1>Update Images <?php echo $model->idImages; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>