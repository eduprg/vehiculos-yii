<?php

/**
 * This is the model class for table "sgs".
 *
 * The followings are the available columns in table 'sgs':
 * @property string $id_sgs
 * @property string $empresa
 * @property integer $id_vehiculo
 * @property integer $resultado
 * @property string $fin_sgs
 * @property string $ffi_sgs
 * @property integer $numero
 * @property integer $estado
 * @property string $foto
 */
class Sgs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sgs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_sgs, empresa, id_vehiculo, fin_sgs, ffi_sgs', 'required'),
			array('id_vehiculo, resultado, numero, estado', 'numerical', 'integerOnly'=>true),
			array('id_sgs', 'length', 'max'=>7),
			array('empresa', 'length', 'max'=>30),
			array('foto', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_sgs, empresa, id_vehiculo, resultado, fin_sgs, ffi_sgs, numero, estado, foto', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_sgs' => 'N* ',
			'empresa' => 'Empresa',
			'id_vehiculo' => 'Placa',
			'resultado' => 'Resultado',
			'fin_sgs' => 'Fecha Inicial',
			'ffi_sgs' => 'Fecha Final',
			'numero' => 'Numero',
			'estado' => 'Estado',
			'foto' => 'Foto',
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

		$criteria->compare('id_sgs',$this->id_sgs,true);
		$criteria->compare('empresa',$this->empresa,true);
		$criteria->compare('id_vehiculo',$this->id_vehiculo);
		$criteria->compare('resultado',$this->resultado);
		$criteria->compare('fin_sgs',$this->fin_sgs,true);
		$criteria->compare('ffi_sgs',$this->ffi_sgs,true);
		$criteria->compare('numero',$this->numero);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('foto',$this->foto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sgs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
