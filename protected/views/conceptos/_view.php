<?php
/* @var $this ConceptosController */
/* @var $data Concepto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_concepto')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_concepto); ?>
	<br />


</div>