<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'RolModuloss'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RolModuloss', 'url'=>array('index')),
	array('label'=>'Create RolModulos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('rolModulosgrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage RolModuloss</h1>

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
    'id'=>'rolModulosgrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id_rol',
        'id_permisos',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("rolModulos/view/", 
                                            array("id_permisos"=>$data->id_permisos, "id_rol"=>$data->id_rol
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("rolModulos/update/", 
                                            array("id_permisos"=>$data->id_permisos, "id_rol"=>$data->id_rol
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("rolModulos/delete/", 
                                            array("id_permisos"=>$data->id_permisos, "id_rol"=>$data->id_rol
											))',
                ),
            ),
        ),
    ),
)); ?>
