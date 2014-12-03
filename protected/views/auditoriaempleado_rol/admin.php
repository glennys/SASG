<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'auditoriampleadoRols'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List auditoriampleadoRols', 'url'=>array('index')),
	array('label'=>'Create auditoriampleadoRol', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('auditoriaempleado_rolgrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage auditoriampleadoRols</h1>

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
    'id'=>'auditoriaempleado_rolgrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id_rol',
        'id_empleado',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("auditoriaempleado_rol/view/", 
                                            array("id_rol"=>$data->id_rol, "id_empleado"=>$data->id_empleado
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("auditoriaempleado_rol/update/", 
                                            array("id_rol"=>$data->id_rol, "id_empleado"=>$data->id_empleado
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("auditoriaempleado_rol/delete/", 
                                            array("id_rol"=>$data->id_rol, "id_empleado"=>$data->id_empleado
											))',
                ),
            ),
        ),
    ),
)); ?>
