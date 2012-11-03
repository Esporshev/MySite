<?php
/* @var $this VendorsController */
/* @var $data Vendors */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idVendors')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idVendors), array('view', 'id'=>$data->idVendors)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Country')); ?>:</b>
	<?php echo CHtml::encode($data->Country); ?>
	<br />


</div>