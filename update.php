<?php
/* @var $this DcompraController */
/* @var $model Dcompra */

$this->breadcrumbs=array(
	'Dcompras'=>array('index'),
	$model->idcompra=>array('view','id'=>$model->idcompra),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dcompra', 'url'=>array('index')),
	array('label'=>'Create Dcompra', 'url'=>array('create')),
	array('label'=>'View Dcompra', 'url'=>array('view', 'id'=>$model->idcompra)),
	array('label'=>'Manage Dcompra', 'url'=>array('admin')),
);
?>

<h1>Update Dcompra <?php echo $model->idcompra; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>