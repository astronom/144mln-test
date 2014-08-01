<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 *
 * @property string  $id
 * @property integer $product_id
 * @property string  $name
 * @property string  $description
 * @property integer $inet_price
 * @property integer $old_price
 * @property integer $price
 * @property integer $reviews_num
 * @property string  $image_url
 *
 * @property Review[] $comments
 */
class Product extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
				array('product_id, name, description, image_url', 'required'),
				array('product_id, inet_price, old_price, price, reviews_num', 'numerical', 'integerOnly' => true),
				array('name, image_url', 'length', 'max' => 255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
				array('id, product_id, name, description, inet_price, old_price, price, reviews_num, image_url', 'safe', 'on' => 'search'),
				array('product_id, name, description, inet_price, old_price, price, reviews_num, image_url', 'safe', 'on' => 'import'),
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
			'comments' => array(self::HAS_MANY, 'Review', 'product_id')
		);
	}

	public function incrementReview()
	{
		$this->reviews_num++;
		$this->update(array('reviews_num'));
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
				'id'          => 'ID',
				'product_id'  => 'Product',
				'name'        => 'Name',
				'description' => 'Description',
				'inet_price'  => 'Inet Price',
				'old_price'   => 'Old Price',
				'price'       => 'Price',
				'reviews_num' => 'Reviews Num',
				'image_url'   => 'Image Url',
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

		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('product_id', $this->product_id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('description', $this->description, true);
		$criteria->compare('inet_price', $this->inet_price);
		$criteria->compare('old_price', $this->old_price);
		$criteria->compare('price', $this->price);
		$criteria->compare('reviews_num', $this->reviews_num);
		$criteria->compare('image_url', $this->image_url, true);

		return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 *
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}
