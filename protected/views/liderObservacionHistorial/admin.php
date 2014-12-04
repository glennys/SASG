<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Historial Lider'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'List LiderObservacionHistorials', 'url'=>array('index')),
	array('label'=>'Create LiderObservacionHistorial', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('liderObservacionHistorialgrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Historial Lider</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'liderObservacionHistorialgrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id_observacion',
        'id_supervisor',
        'fecha_asignacion',
        'otro',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("liderObservacionHistorial/view/", 
                                            array("id_observacion"=>$data->id_observacion, "id_supervisor"=>$data->id_supervisor, "fecha_asignacion"=>$data->fecha_asignacion
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("liderObservacionHistorial/update/", 
                                            array("id_observacion"=>$data->id_observacion, "id_supervisor"=>$data->id_supervisor, "fecha_asignacion"=>$data->fecha_asignacion
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("liderObservacionHistorial/delete/", 
                                            array("id_observacion"=>$data->id_observacion, "id_supervisor"=>$data->id_supervisor, "fecha_asignacion"=>$data->fecha_asignacion
											))',
                ),
            ),
        ),
    ),
)); ?>
