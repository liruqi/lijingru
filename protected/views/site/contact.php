<?php
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Contact me</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
If you have business inquiries or other questions, please <a href="mailto:liruqi@gmail.com">mail</a> me.</p><p>
You may also follow me on <a href="http://twitter.com/liruqi">twitter</a> or <a href="http://t.sina.com.com/liruqi">Sina Weibo</a>.
</p>

<?php endif; ?>
