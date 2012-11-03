<?php
/* @var $this VendorsController */
/* @var $model Vendors */

$this->breadcrumbs=array(
	'Vendors'=>array('index'),
	$model->Name=>array('view','id'=>$model->idVendors),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vendors', 'url'=>array('index')),
	array('label'=>'Create Vendors', 'url'=>array('create')),
	array('label'=>'View Vendors', 'url'=>array('view', 'id'=>$model->idVendors)),
	array('label'=>'Manage Vendors', 'url'=>array('admin')),
);
?>

<h1>Update Vendors <?php echo $model->idVendors; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>