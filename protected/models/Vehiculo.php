<?php

/**
 * This is the model class for table "vehiculo".
 *
 * The followings are the available columns in table 'vehiculo':
 * @property integer $id
 * @property string $marca
 * @property string $modelo
 * @property string $chasis
 * @property string $placa_anterior
 * @property string $placa_actual
 * @property integer $motor
 * @property string $pais
 * @property string $color1
 * @property string $color2
 * @property integer $estado
 * @property integer $idtipo
 * @property string $anio
 * @property integer $id_propietario
 * @property string $foto
 *
 * The followings are the available model relations:
 * @property Matricula[] $matriculas
 * @property Tipoveh $idtipo0
 */
class Vehiculo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vehiculo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('modelo, placa_actual, motor, anio, id_propietario', 'required'),
			array('motor, estado, idtipo, id_propietario', 'numerical', 'integerOnly'=>true),
			array('marca, modelo', 'length', 'max'=>50),
			array('chasis', 'length', 'max'=>100),
			array('placa_anterior', 'length', 'max'=>10),
			array('placa_actual', 'length', 'max'=>8),
			array('pais, color1, color2', 'length', 'max'=>30),
			array('anio', 'length', 'max'=>4),
			array('foto', 'length', 'max'=>300),
			array('placa_actual','unique'),
			array('motor','unique'),
			array('chasis','unique'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, marca, modelo, chasis, placa_anterior, placa_actual, motor, pais, color1, color2, estado, idtipo, anio, id_propietario, foto', 'safe', 'on'=>'search'),
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
			'matriculas' => array(self::HAS_MANY, 'Matricula', 'idveh'),
			'idtipo0' => array(self::BELONGS_TO, 'Tipoveh', 'idtipo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'marca' => 'Marca',
			'modelo' => 'Modelo',
			'chasis' => 'Chasis',
			'placa_anterior' => 'Placa Anterior',
			'placa_actual' => 'Placa Actual',
			'motor' => 'Motor',
			'pais' => 'Pais',
			'color1' => 'Color1',
			'color2' => 'Color2',
			'estado' => 'Estado',
			'idtipo' => 'Idtipo',
			'anio' => 'Anio',
			'id_propietario' => 'Id Propietario',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('marca',$this->marca,true);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('chasis',$this->chasis,true);
		$criteria->compare('placa_anterior',$this->placa_anterior,true);
		$criteria->compare('placa_actual',$this->placa_actual,true);
		$criteria->compare('motor',$this->motor);
		$criteria->compare('pais',$this->pais,true);
		$criteria->compare('color1',$this->color1,true);
		$criteria->compare('color2',$this->color2,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('idtipo',$this->idtipo);
		$criteria->compare('anio',$this->anio,true);
		$criteria->compare('id_propietario',$this->id_propietario);
		$criteria->compare('foto',$this->foto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vehiculo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
