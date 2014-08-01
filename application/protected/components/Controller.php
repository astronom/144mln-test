<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
    public $layout = '//layouts/main';

    protected function beforeAction($action) {
        // Logging user actions
        Yii::app()->user->logActivity($action);

        return parent::beforeAction($action);
    }

	/**
	 * Return data to browser as JSON
	 *
	 * @param array $data
	 */
	protected function renderJSON($data)
	{
		header('Content-type: application/json');
		echo CJSON::encode($data);

		Yii::app()->end();
	}
}