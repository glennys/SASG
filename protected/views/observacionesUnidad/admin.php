<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ObservacionesUnidad'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ObservacionesUnidad', 'url'=>array('index')),
	array('label'=>'Create ObservacionesUnidad', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('observacionesUnidadgrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage ObservacionesUnidad</h1>

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
    'id'=>'observacionesUnidadgrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id_observaciones',
        'id_unidades',
        'id_empleado_consultor',
        'plan_general',
        'id_estado',
        'fecha_asignacion',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("observacionesUnidad/view/", 
                                            array("id_observaciones"=>$data->id_observaciones, "id_unidades"=>$data->id_unidades
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("observacionesUnidad/update/", 
                                            array("id_observaciones"=>$data->id_observaciones, "id_unidades"=>$data->id_unidades
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("observacionesUnidad/delete/", 
                                            array("id_observaciones"=>$data->id_observaciones, "id_unidades"=>$data->id_unidades
											))',
                ),
            ),
        ),
    ),
)); ?>
