<div class="view">

	<?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->verycdid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brief')); ?>:</b>
	<?php echo CHtml::encode($data->brief); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('updtime')); ?>:</b>
	<?php echo CHtml::encode($data->updtime); ?>
	<br />

    </div>
