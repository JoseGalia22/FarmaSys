<?php
/* @var $this DcompraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dcompras',
);

$this->menu=array(
	array('label'=>'Create Dcompra', 'url'=>array('create')),
	array('label'=>'Manage Dcompra', 'url'=>array('admin')),
);
?>

<h1>Dcompras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
