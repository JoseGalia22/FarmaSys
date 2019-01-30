<?php
/* @var $this DcompraController */
/* @var $model Dcompra */

$this->breadcrumbs=array(
	'Compras'=>array('index'),
);

//$this->menu=array(
//	array('label'=>'List Dcompra', 'url'=>array('index')),
//	array('label'=>'Create Dcompra', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dcompra-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Compras Realizadas</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dcompra-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idcompra',
		'idusuario'=>array(
                        "name" => "idusuario",
                        "value" => '$data->idusuario0->nombre." ".$data->idusuario0->apellido',
                        'filter'=>false,
                                        ),
		'fechacompra',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
