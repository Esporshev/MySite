<div class="row">
    <div class="span12">
<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'horizontalForm',
    'type'=>'horizontal',
)); ?>
<?php echo $form->textFieldRow($model, 'name'); ?>
<?php echo $form->textFieldRow($model, 'title'); ?>
<?php echo $form->textFieldRow($model, 'price'); ?>
<?php echo $form->textAreaRow($model, 'content'); ?>
<?php echo $form->dropDownListRow($model, 'type', array('Выбери меня...','1','2','3')); ?>

        <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
        </div>
 
<?php $this->endWidget(); ?>
    </div>
</div>