<?php
/* @var $this DcompraController */
/* @var $model Dcompra */

$this->breadcrumbs=array(
	'Dcompras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dcompra', 'url'=>array('index')),
	array('label'=>'Manage Dcompra', 'url'=>array('admin')),
);
?>

<h1>Create Dcompra</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>