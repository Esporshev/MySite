<div class="form">
    <?php $form=$this->beginWidget('CActiveForm'); ?>
    <div class="row">
        <? echo $form->textField($model,'title')?>
    </div>
    <div class="row">
        <? echo $form->textField($model,'name')?>
    </div>
    <div class="row">
        <? echo $form->textField($model,'type')?>
    </div>
    <div class="row">
        <? echo $form->textArea($model,'content')?>
    </div>
    <div class="row">
        <? echo $form->textField($model,'price')?>
    </div>
    <div class="row">
    <?php echo CHtml::submitButton('Create'); ?>
    </div>
    <?php $form=$this->endWidget();?>
</div><!-- form -->