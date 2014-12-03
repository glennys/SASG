<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'LiderObservacionHistorials'=>array('index'),
	'Manage',
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

<h1>Manage LiderObservacionHistorials</h1>

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
