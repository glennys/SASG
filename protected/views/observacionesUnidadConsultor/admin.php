<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Unidad Consultors'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Unidad Consultos', 'url'=>array('index')),
	array('label'=>'Crear Unidad Consultor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('observacionesUnidadConsultorgrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Unidad Consultor</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Búsqueda Avanzadah','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'observacionesUnidadConsultorgrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id_observaciones',
        'id_unidad',
        'fecha_observacion',
        'id_actividad',
        'fecha_seguimiento',
        'propietario',
        'id_empleado',
        'id_estado',
        'avance',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("observacionesUnidadConsultor/view/", 
                                            array("id_observaciones"=>$data->id_observaciones, "id_unidad"=>$data->id_unidad, "fecha_observacion"=>$data->fecha_observacion, "id_actividad"=>$data->id_actividad
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("observacionesUnidadConsultor/update/", 
                                            array("id_observaciones"=>$data->id_observaciones, "id_unidad"=>$data->id_unidad, "fecha_observacion"=>$data->fecha_observacion, "id_actividad"=>$data->id_actividad
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("observacionesUnidadConsultor/delete/", 
                                            array("id_observaciones"=>$data->id_observaciones, "id_unidad"=>$data->id_unidad, "fecha_observacion"=>$data->fecha_observacion, "id_actividad"=>$data->id_actividad
											))',
                ),
            ),
        ),
    ),
)); ?>
