<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'verycd-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textArea($model,'title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textArea($model,'status',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'brief'); ?>
		<?php echo $form->textArea($model,'brief',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'brief'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pubtime'); ?>
		<?php echo $form->textArea($model,'pubtime',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pubtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updtime'); ?>
		<?php echo $form->textArea($model,'updtime',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'updtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category1'); ?>
		<?php echo $form->textArea($model,'category1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'category1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category2'); ?>
		<?php echo $form->textArea($model,'category2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'category2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ed2k'); ?>
		<?php echo $form->textArea($model,'ed2k',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ed2k'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->