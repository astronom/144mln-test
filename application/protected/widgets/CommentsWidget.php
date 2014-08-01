<?php
/**
 * Created by PhpStorm.
 * User: astronom
 * Date: 01.08.14
 * Time: 21:23
 */

class CommentsWidget extends CWidget {

	public $comments;

	public function run()
	{
		$this->render('comments', array('comments' => $this->comments));
	}
} 