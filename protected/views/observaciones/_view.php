<?php
/* @var $this ObservacionesController */
/* @var $data Observaciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_observaciones')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_observaciones), array('view', 'id'=>$data->id_observaciones)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_informe')); ?>:</b>
	<?php echo CHtml::encode($data->idInforme->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unidad')); ?>:</b>
	<?php echo CHtml::encode($data->idUnidad->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_criticidad')); ?>:</b>
	<?php echo CHtml::encode($data->idTipoCriticidad->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_clasificacion')); ?>:</b>
	<?php echo CHtml::encode($data->idClasificacion->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estado')); ?>:</b>
	<?php echo CHtml::encode($data->idEstado->descripcion); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('recomendacion')); ?>:</b>
	<?php echo CHtml::encode($data->recomendacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cerrada')); ?>:</b>
	<?php echo CHtml::encode($data->cerrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalle_observacion')); ?>:</b>
	<?php echo CHtml::encode($data->detalle_observacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accion_correctiva')); ?>:</b>
	<?php echo CHtml::encode($data->accion_correctiva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicio_accion_correctiva')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicio_accion_correctiva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_fin_accion_correctiva')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_fin_accion_correctiva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_observacion')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_observacion); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('Observaciones Auditor')); ?>:</b>
	<?php // echo CHtml::encode($data->idAuditor->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tema')); ?>:</b>
	<?php echo CHtml::encode($data->idTema->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripción')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_riesgo')); ?>:</b>
	<?php echo CHtml::encode($data->idRiesgo->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_grupo')); ?>:</b>
	<?php echo CHtml::encode($data->idGrupo->descripcion); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_subgrupo')); ?>:</b>
	<?php echo CHtml::encode($data->id_subgrupo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avance_pac')); ?>:</b>
	<?php echo CHtml::encode($data->avance_pac); ?>%
	<br />

	

</div>