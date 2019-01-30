<?php
/* @var $this DcompraController */
/* @var $data Dcompra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcompra')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcompra), array('view', 'id'=>$data->idcompra)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idusuario')); ?>:</b>
	<?php echo CHtml::encode($data->idusuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechacompra')); ?>:</b>
	<?php echo CHtml::encode($data->fechacompra); ?>
	<br />


</div>