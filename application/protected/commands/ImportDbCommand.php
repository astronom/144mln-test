<?php

/**
 * Created by PhpStorm.
 * User: astronom
 * Date: 31.07.14
 * Time: 19:50
 */

require_once dirname(__FILE__) . '/../extensions/SimpleXmlReader.php';

class ImportDbCommand extends CConsoleCommand
{

	public $defaultAction = 'fromXml';

	/**
	 * @param string $file
	 * @return int
	 * @throws Exception
	 */
	public function actionFromXml($file)
	{
		$xmlFilePath = realpath($file);

		if (!is_readable($xmlFilePath)) {
			$this->usageError('no xml file specified');
			return 1;
		}

		try {
			$reader = new SimpleXMLReader();
			$reader->registerCallback('/mvideo_xml/products/product', array($this, 'addProduct'));
			$reader->open($xmlFilePath);
			$reader->parse();
			$reader->close();
		} catch (Exception $e) {
			$this->usageError($e->getMessage());
			return 1;
		}

		return 0;

	}

	/**
	 * @param $reader SimpleXMLReader
	 * @return bool
	 */
	public function addProduct($reader)
	{
		$xml = $reader->expandSimpleXml();
		$currentXmlProduct = $xml->children();

		$newProduct = new Product();
		$newProduct->product_id = $currentXmlProduct->product_id;
		$newProduct->name = $currentXmlProduct->title;
		$newProduct->description = $currentXmlProduct->description;
		$newProduct->inet_price = (int)$currentXmlProduct->inet_price;
		$newProduct->old_price = (int)$currentXmlProduct->old_price;
		$newProduct->price = (int)$currentXmlProduct->price;
		$newProduct->reviews_num = (int)$currentXmlProduct->reviews_num;
		$newProduct->image_url = $currentXmlProduct->image;

		if (!$newProduct->save())
			echo print_r($newProduct->getErrors()) . PHP_EOL;

		return true;
	}
} 