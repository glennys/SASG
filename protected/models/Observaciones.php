<?php

/**
 * This is the model class for table "auditoria.observaciones".
 *
 * The followings are the available columns in table 'auditoria.observaciones':
 * @property integer $id_observaciones
 * @property integer $id_informe
 * @property integer $id_unidad
 * @property integer $id_tipo_criticidad
 * @property integer $id_clasificacion
 * @property integer $id_estado
 * @property string $recomendacion
 * @property boolean $cerrada
 * @property string $detalle_observacion
 * @property string $accion_correctiva
 * @property string $fecha_inicio_accion_correctiva
 * @property string $fecha_fin_accion_correctiva
 * @property string $codigo
 * @property string $codigo_observacion
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 * @property integer $id_auditor
 * @property integer $id_tema
 * @property string $descripcion
 * @property integer $id_riesgo
 * @property integer $id_grupo
 * @property integer $avance_pac
 *
 * The followings are the available model relations:
 * @property Informe $idInforme
 * @property Unidad $idUnidad
 * @property ObservacionesAuditor $idAuditor
 * @property TemaInteres $idTema
 * @property Grupo $idGrupo
 * @property Riesgo $idRiesgo
 * @property TipoCriticidad $idTipoCriticidad
 * @property Clasificacion $idClasificacion
 * @property Estado $idEstado
 * @property AdjuntoEfecto[] $adjuntoEfectos
 * @property Unidad[] $auditoria.unidads
 * @property AdjuntoCausa[] $adjuntoCausas
 * @property Procesos[] $auditoria.procesoses
 * @property AdjuntoPlanaccion[] $adjuntoPlanaccions
 * @property AdjuntoSeguimientoObservacion[] $adjuntoSeguimientoObservacions
 * @property AdjuntoDescripcionObservacion[] $adjuntoDescripcionObservacions
 * @property AdjuntoCriterio[] $adjuntoCriterios
 */
class Observaciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.observaciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fe_crea', 'required'),
			array('id_informe, id_unidad, id_tipo_criticidad, id_clasificacion, id_estado, id_auditor, id_tema, id_riesgo, id_grupo, avance_pac, id_subgrupo', 'numerical', 'integerOnly'=>true),
			array('recomendacion, detalle_observacion, accion_correctiva, codigo, codigo_observacion, descripcion', 'length', 'max'=>255),
			array('in_stat', 'length', 'max'=>1),
			array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('cerrada, fecha_inicio_accion_correctiva, fecha_fin_accion_correctiva, fe_modf', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_observaciones, id_informe, id_unidad, id_tipo_criticidad, id_clasificacion, id_estado, recomendacion, cerrada, detalle_observacion, accion_correctiva, fecha_inicio_accion_correctiva, fecha_fin_accion_correctiva, codigo, codigo_observacion, in_stat, usr_crea, fe_crea, usr_modf, fe_modf, id_auditor, id_tema, descripcion, id_riesgo, id_grupo, avance_pac, id_subgrupo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idSubgrupo' => array(self::BELONGS_TO, 'Subgrupo', 'id_subgrupo'),
			'idInforme' => array(self::BELONGS_TO, 'Informe', 'id_informe'),
			'idUnidad' => array(self::BELONGS_TO, 'Unidad', 'id_unidad'),
			'idAuditor' => array(self::BELONGS_TO, 'ObservacionesAuditor', 'id_auditor'),
			'idTema' => array(self::BELONGS_TO, 'TemaInteres', 'id_tema'),
			'idGrupo' => array(self::BELONGS_TO, 'Grupo', 'id_grupo'),
			'idRiesgo' => array(self::BELONGS_TO, 'Riesgo', 'id_riesgo'),
			'idTipoCriticidad' => array(self::BELONGS_TO, 'TipoCriticidad', 'id_tipo_criticidad'),
			'idClasificacion' => array(self::BELONGS_TO, 'Clasificacion', 'id_clasificacion'),
			'idEstado' => array(self::BELONGS_TO, 'Estado', 'id_estado'),
			'adjuntoEfectos' => array(self::HAS_MANY, 'AdjuntoEfecto', 'id_observacion'),
			'auditoria.unidads' => array(self::MANY_MANY, 'Unidad', 'lideres_observacion(id_observacion, id_unidad)'),
			'adjuntoCausas' => array(self::HAS_MANY, 'AdjuntoCausa', 'id_observacion'),
			'auditoria.procesoses' => array(self::MANY_MANY, 'Procesos', 'estado_observaciones(id_observaciones, id_proceso)'),
			'adjuntoPlanaccions' => array(self::HAS_MANY, 'AdjuntoPlanaccion', 'id_observaciones'),
			'adjuntoSeguimientoObservacions' => array(self::HAS_MANY, 'AdjuntoSeguimientoObservacion', 'id_observacion'),
			'adjuntoDescripcionObservacions' => array(self::HAS_MANY, 'AdjuntoDescripcionObservacion', 'id_observacion'),
			'adjuntoCriterios' => array(self::HAS_MANY, 'AdjuntoCriterio', 'id_observacion'),
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_observaciones' => 'Observaciones',
			'id_informe' => 'Informe',
			'id_unidad' => 'Unidad',
			'id_tipo_criticidad' => 'Tipo Criticidad',
			'id_clasificacion' => 'Clasificacion',
			'id_estado' => 'Estado',
			'recomendacion' => 'Recomendacion',
			'cerrada' => 'Cerrada',
			'detalle_observacion' => 'Detalle Observacion',
			'accion_correctiva' => 'plan de accion',
			'fecha_inicio_accion_correctiva' => 'Inicio Accion Correctiva',
			'fecha_fin_accion_correctiva' => 'Fin Accion Correctiva',
			'codigo' => 'Codigo',
			'codigo_observacion' => 'Codigo Observacion',
			'id_auditor' => 'Auditor',
			'id_tema' => 'Tema',
			'descripcion' => 'Descripcion',
			'id_riesgo' => 'Riesgo',
			'id_grupo' => 'Grupo',
			'avance_pac' => 'Avance Pac %',
			'id_subgrupo' => 'Id Subgrupo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_observaciones',$this->id_observaciones);
		//$criteria->with=array('informe');
		//$criteria->addSearchCondition('informe.nombre',$this->id_informe);
		$criteria->compare('id_informe',$this->id_informe);
		$criteria->compare('id_unidad',$this->id_unidad);
		$criteria->compare('id_tipo_criticidad',$this->id_tipo_criticidad);
		$criteria->compare('id_clasificacion',$this->id_clasificacion);
		$criteria->compare('id_estado',$this->id_estado);
		$criteria->compare('recomendacion',$this->recomendacion,true);
		$criteria->compare('cerrada',$this->cerrada);
		$criteria->compare('detalle_observacion',$this->detalle_observacion,true);
		$criteria->compare('accion_correctiva',$this->accion_correctiva,true);
		$criteria->compare('fecha_inicio_accion_correctiva',$this->fecha_inicio_accion_correctiva,true);
		$criteria->compare('fecha_fin_accion_correctiva',$this->fecha_fin_accion_correctiva,true);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('codigo_observacion',$this->codigo_observacion,true);
		$criteria->compare('id_auditor',$this->id_auditor);
		$criteria->compare('id_tema',$this->id_tema);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('id_riesgo',$this->id_riesgo);
		$criteria->compare('id_grupo',$this->id_grupo);
		$criteria->compare('avance_pac',$this->avance_pac);
		$criteria->compare('id_subgrupo',$this->id_subgrupo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Observaciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
