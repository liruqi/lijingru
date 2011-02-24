<?php
$this->breadcrumbs=array(
	'Verycds',
);
if (Yii::app()->user->name === "admin") {
    $this->menu=array(
            array('label'=>'Create Verycd', 'url'=>array('create')),
            array('label'=>'Manage Verycd', 'url'=>array('admin')),
            );
}
?>

<h1>资源列表</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
