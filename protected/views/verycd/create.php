<?php
$this->breadcrumbs=array(
	'Verycds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Verycd', 'url'=>array('index')),
	array('label'=>'Manage Verycd', 'url'=>array('admin')),
);
?>

<h1>Create Verycd</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>