<?php

class SiteController extends Controller
{

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex($page = 0)
	{
		$criteria = Product::model()->getDbCriteria();

		if (!empty($_GET['pageSize']))
			Yii::app()->user->setState('pageSize', (int)$_GET['pageSize']);

		$pageSize = Yii::app()->user->getState('pageSize', Yii::app()->params['defaultPageSize']);

		$dataProvider = new CActiveDataProvider('Product', array(
				'criteria'   => $criteria,
				'pagination' => array(
						'pageVar'             => 'page',
						'pageSize'            => $pageSize,
						'validateCurrentPage' => false,
				)
		));

		$this->render('index', array(
				'dataProvider' => $dataProvider,
				'pageSize'     => $pageSize,
		));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if ($error = Yii::app()->errorHandler->error) {
			if (Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	public function actionProduct($id = 0)
	{
		if ($id === 0) {
			return false;
		}

		$product = Product::model()->with(array('comments'))->findByPk($id);
		$review = new Review();

		$this->render('product', ['product' => $product, 'review' => $review]);
	}

	/**
	 * Displays the contact page
	 */
	public function actionReview()
	{
		if (isset($_POST['Review'])) {
			$review = new Review();
			$review->attributes = $_POST['Review'];
			$product = Product::model()->with(array('comments'))->findByPk($_GET['product_id']);

			if($product)
				$review->product_id = $product->id;

			$result = array();

			if ($review->save()) {
				if (Yii::app()->request->isAjaxRequest) {
					$result['success'] = true;
					$this->beginClip("list");
					$this->widget('application.widgets.CommentsWidget', array(
							'comments'         => $product->comments,
					));
					$this->endClip();
					$result['list'] = $this->clips['list'];

					$this->renderJson($result);
				} else
					$this->redirect($this->createUrl('site/product', ['id' => $_GET['product_id']]));
			} else {
				if (Yii::app()->request->isAjaxRequest) {

				} else {

					$this->render('product', ['product' => $product, 'review' => $review]);
				}
			}
		} else
			$this->redirect($this->createUrl('site/product', ['id' => $_GET['product_id']]));
	}
}