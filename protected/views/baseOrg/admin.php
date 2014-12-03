<?php
/* @var $this OrgController */
/* @var $model Org */

$this->breadcrumbs=array(
	'Oganizacion'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#org-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Estructura Organizativa</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'org-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
                array(
                    'header'=>'Organizacion Padre',
                    'name'=>'co_org_dpnd',
                    'value' => '$data->coOrgDpnd["nb_org"]',
                    'htmlOptions'=>array('style'=>'text-align: center'),
                    'filter' => CHtml::listData(BaseOrg::model()->findAll(), 'co_org', 'nb_org')
                ),
                'nb_org',
                'ceco',
                array(
                    'class'=>'CButtonColumn',
                ),
	),
)); 

?>
