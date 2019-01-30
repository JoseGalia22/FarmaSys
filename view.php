<?php
/* @var $this DcompraController */
/* @var $model Dcompra */

$this->breadcrumbs=array(
	'Compras'=>array('index'),
	$model->idcompra,
);

$detalles = new Dcomprafarmacos();
//$this->menu=array(
//	array('label'=>'List Dcompra', 'url'=>array('index')),
//	array('label'=>'Create Dcompra', 'url'=>array('create')),
//	array('label'=>'Update Dcompra', 'url'=>array('update', 'id'=>$model->idcompra)),
//	array('label'=>'Delete Dcompra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcompra),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Dcompra', 'url'=>array('admin')),
//);

?>

<h1> Detalles de la Compra #<?php echo $model->idcompra; ?></h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dcompra-grid',
	'dataProvider'=>$detalles->search($model->idcompra),
	'filter'=>$detalles,
	'columns'=>array(
		'idcompra',
                'idfarmacos'=>array(
                        "name" => "idfarmacos",
                        "value" => '$data->idfarmacos0->descripcion',
                        'filter'=>false,
                                        ),
                'cantidad',
                'tipopago'=>array(
                        "name" => "idusuario",
                        "value" => '$data->idusuario0->nombre." ".$data->idusuario0->apellido',
                        'filter'=>false,
                                        ),
		'idusuario'=>array(
                        "name" => "idusuario",
                        "value" => '$data->idusuario0->nombre." ".$data->idusuario0->apellido',
                        'filter'=>false,
                                        ),
		
	),
)); ?>
