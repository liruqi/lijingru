<?php
$this->breadcrumbs=array(
	'Verycds'=>array('index'),
	$model->title=>array('view','id'=>$model->verycdid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Verycd', 'url'=>array('index')),
	array('label'=>'Create Verycd', 'url'=>array('create')),
	array('label'=>'View Verycd', 'url'=>array('view', 'id'=>$model->verycdid)),
	array('label'=>'Manage Verycd', 'url'=>array('admin')),
);
?>

<h1>Update Verycd <?php echo $model->verycdid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>