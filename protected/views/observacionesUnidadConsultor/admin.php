<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ObservacionesUnidadConsultors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ObservacionesUnidadConsultors', 'url'=>array('index')),
	array('label'=>'Create ObservacionesUnidadConsultor', 'url'=>array('create')),
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

<h1>Manage ObservacionesUnidadConsultors</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
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
