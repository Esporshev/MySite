<?php
/* @var $this VendorsController */
/* @var $model Vendors */

$this->breadcrumbs=array(
	'Vendors'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Vendors', 'url'=>array('index')),
	array('label'=>'Create Vendors', 'url'=>array('create')),
	array('label'=>'Update Vendors', 'url'=>array('update', 'id'=>$model->idVendors)),
	array('label'=>'Delete Vendors', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idVendors),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vendors', 'url'=>array('admin')),
);
?>

<h1>View Vendors #<?php echo $model->idVendors; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idVendors',
		'Name',
		'Country',
	),
)); ?>
