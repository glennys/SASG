<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'LideresObservacions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List LideresObservacions', 'url'=>array('index')),
	array('label'=>'Create LideresObservacion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('lideresObservaciongrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage LideresObservacions</h1>

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
    'id'=>'lideresObservaciongrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id_observacion',
        'id_unidad',
        'id_empleado_supervisor',
        'aprobacion',
        'fecha_asignacion',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("lideresObservacion/view/", 
                                            array("id_observacion"=>$data->id_observacion, "id_unidad"=>$data->id_unidad
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("lideresObservacion/update/", 
                                            array("id_observacion"=>$data->id_observacion, "id_unidad"=>$data->id_unidad
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("lideresObservacion/delete/", 
                                            array("id_observacion"=>$data->id_observacion, "id_unidad"=>$data->id_unidad
											))',
                ),
            ),
        ),
    ),
)); ?>
