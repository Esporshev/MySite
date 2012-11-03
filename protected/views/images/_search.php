<?php
/* @var $this ImagesController */
/* @var $model Images */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idImages'); ?>
		<?php echo $form->textField($model,'idImages'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Source'); ?>
		<?php echo $form->textField($model,'Source',array('size'=>60,'maxlength'=>330)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->