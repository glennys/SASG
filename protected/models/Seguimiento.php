<?php

/**
 * This is the model class for table "auditoria.adjunto_seguimiento".
 *
 * The followings are the available columns in table 'auditoria.adjunto_seguimiento':
 * @property integer $id_adjunto_seguimiento
 * @property integer $id_actividad
 * @property string $descripcion
 * @property string $adjunto
 * @property string $fecha_modificacion
 * @property integer $tipo
 *
 * The followings are the available model relations:
 * @property Actividad $idActividad
 */
class Seguimiento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.adjunto_seguimiento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_actividad, tipo', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>255),
			array('adjunto, fecha_modificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_adjunto_seguimiento, id_actividad, descripcion, adjunto, fecha_modificacion, tipo', 'safe', 'on'=>'search'),
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
			'idActividad' => array(self::BELONGS_TO, 'Actividad', 'id_actividad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_adjunto_seguimiento' => 'Id Adjunto Seguimiento',
			'id_actividad' => 'Id Actividad',
			'descripcion' => 'Descripcion',
			'adjunto' => 'Adjunto',
			'fecha_modificacion' => 'Fecha Modificacion',
			'tipo' => 'Tipo',
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

		$criteria->compare('id_adjunto_seguimiento',$this->id_adjunto_seguimiento);
		$criteria->compare('id_actividad',$this->id_actividad);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('adjunto',$this->adjunto,true);
		$criteria->compare('fecha_modificacion',$this->fecha_modificacion,true);
		$criteria->compare('tipo',$this->tipo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Seguimiento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


	public function behaviors()
    {
        return array(
                'CTimestampBehavior' => array(
                    'class' => 'zii.behaviors.CTimestampBehavior',
                    'createAttribute' => 'fe_crea',
                    'updateAttribute' => 'fe_modf',
                    'setUpdateOnCreate' => true,
                ),

                'BlameableBehavior' => array(
                    'class' => 'application.components.BlameableBehavior',
                    'createdByColumn' => 'usr_crea',
                    'updatedByColumn' => 'usr_modf',
                ),
        );
    }
}
