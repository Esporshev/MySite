<?php
/* @var $this PagesController */
/* @var $model Pages */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Pages', 'url'=>array('index')),
	array('label'=>'Create Pages', 'url'=>array('create')),
	array('label'=>'Update Pages', 'url'=>array('update', 'id'=>$model->idPages)),
	array('label'=>'Delete Pages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPages),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pages', 'url'=>array('admin')),
);
?>

<h1>View Pages #<?php echo $model->idPages; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPages',
		'lft',
		'rgt',
		'level',
		'type',
		'name',
		'content',
		'title',
		'price',
		'Vendors_idVendors',
		'Images_idImages',
	),
)); ?>
