<?php

/**
 * This is the model class for table "auditoria.adjuntos_informe".
 *
 * The followings are the available columns in table 'auditoria.adjuntos_informe':
 * @property integer $id_adjunto
 * @property integer $id_informe
 * @property string $fecha
 * @property string $adjunto
 * @property string $tipo
 *
 * The followings are the available model relations:
 * @property Informe $idInforme
 */
class AdjuntosInforme extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.adjuntos_informe';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_informe, fecha', 'required'),
			array('id_informe', 'numerical', 'integerOnly'=>true),
			array('tipo', 'length', 'max'=>255),
			array('adjunto', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_adjunto, id_informe, fecha, adjunto, tipo', 'safe', 'on'=>'search'),
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
			'idInforme' => array(self::BELONGS_TO, 'Informe', 'id_informe'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_adjunto' => 'Id Adjunto',
			'id_informe' => 'Id Informe',
			'fecha' => 'Fecha',
			'adjunto' => 'Adjunto',
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

		$criteria->compare('id_adjunto',$this->id_adjunto);
		$criteria->compare('id_informe',$this->id_informe);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('adjunto',$this->adjunto,true);
		$criteria->compare('tipo',$this->tipo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AdjuntosInforme the static model class
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
