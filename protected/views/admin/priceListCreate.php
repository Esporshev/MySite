<?php
/* @var $this AdminController */

$this->breadcrumbs=array(
	'Admin',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<?php echo $this->renderPartial('_priceListForm', array('model'=>$model)); ?>
