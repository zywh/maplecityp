<?php

/**
 * This is the model class for table "{{house_mem}}".
 *
 * The followings are the available columns in table '{{house_mem}}':
 * @property integer $id
 * @property integer $propertyType_id
 * @property string $longitude
 * @property string $latitude
 * @property string $yr_built
 * @property string $sqft
 * @property integer $br
 * @property integer $br_plus
 * @property integer $num_kit
 * @property integer $kit_plus
 * @property integer $lp_dol
 * @property string $ml_num
 * @property string $municipality
 * @property string $pix_updt
 * @property string $zip
 * @property string $county
 * @property integer $rooms_plus
 * @property string $s_r
 * @property string $style
 * @property integer $yr
 * @property integer $bath_tot
 * @property string $addr
 * @property string $community_code
 * @property string $src
 * @property string $apt_num
 * @property integer $orig_dol
 * @property integer $pic_num
 * @property integer $dom
 */
class HouseMem extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{house_mem}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('propertyType_id, br, br_plus, num_kit, kit_plus, lp_dol, rooms_plus, yr, bath_tot, orig_dol, pic_num, dom', 'numerical', 'integerOnly'=>true),
			array('longitude', 'length', 'max'=>10),
			array('latitude', 'length', 'max'=>8),
			array('yr_built, sqft', 'length', 'max'=>255),
			array('ml_num, municipality, zip, county, s_r, style, addr, community_code', 'length', 'max'=>100),
			array('src, apt_num', 'length', 'max'=>20),
			array('pix_updt', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, propertyType_id, longitude, latitude, yr_built, sqft, br, br_plus, num_kit, kit_plus, lp_dol, ml_num, municipality, pix_updt, zip, county, rooms_plus, s_r, style, yr, bath_tot, addr, community_code, src, apt_num, orig_dol, pic_num, dom', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'propertyType_id' => '????????',
			'longitude' => '????',
			'latitude' => '????',
			'yr_built' => 'Yr Built',
			'sqft' => 'Sqft',
			'br' => 'Br',
			'br_plus' => 'Br Plus',
			'num_kit' => 'Num Kit',
			'kit_plus' => 'Kit Plus',
			'lp_dol' => 'Lp Dol',
			'ml_num' => 'Ml Num',
			'municipality' => 'Municipality',
			'pix_updt' => 'Pix Updt',
			'zip' => 'Zip',
			'county' => 'County',
			'rooms_plus' => 'Rooms Plus',
			's_r' => 'S R',
			'style' => 'Style',
			'yr' => 'Yr',
			'bath_tot' => 'Bath Tot',
			'addr' => 'Addr',
			'community_code' => 'Community Code',
			'src' => 'Src',
			'apt_num' => 'Apt Num',
			'orig_dol' => 'Orig Dol',
			'pic_num' => 'Pic Num',
			'dom' => 'Dom',
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
		$criteria->compare('propertyType_id',$this->propertyType_id);
		$criteria->compare('longitude',$this->longitude,true);
		$criteria->compare('latitude',$this->latitude,true);
		$criteria->compare('yr_built',$this->yr_built,true);
		$criteria->compare('sqft',$this->sqft,true);
		$criteria->compare('br',$this->br);
		$criteria->compare('br_plus',$this->br_plus);
		$criteria->compare('num_kit',$this->num_kit);
		$criteria->compare('kit_plus',$this->kit_plus);
		$criteria->compare('lp_dol',$this->lp_dol);
		$criteria->compare('ml_num',$this->ml_num,true);
		$criteria->compare('municipality',$this->municipality,true);
		$criteria->compare('pix_updt',$this->pix_updt,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('county',$this->county,true);
		$criteria->compare('rooms_plus',$this->rooms_plus);
		$criteria->compare('s_r',$this->s_r,true);
		$criteria->compare('style',$this->style,true);
		$criteria->compare('yr',$this->yr);
		$criteria->compare('bath_tot',$this->bath_tot);
		$criteria->compare('addr',$this->addr,true);
		$criteria->compare('community_code',$this->community_code,true);
		$criteria->compare('src',$this->src,true);
		$criteria->compare('apt_num',$this->apt_num,true);
		$criteria->compare('orig_dol',$this->orig_dol);
		$criteria->compare('pic_num',$this->pic_num);
		$criteria->compare('dom',$this->dom);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HouseMem the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
