<?php
/* @var $this ImagesController */
/* @var $data Images */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idImages')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idImages), array('view', 'id'=>$data->idImages)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Source')); ?>:</b>
	<?php echo CHtml::encode($data->Source); ?>
	<br />


</div>