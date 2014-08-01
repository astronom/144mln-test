<?php
/**
 * Created by PhpStorm.
 * User: astronom
 * Date: 10.10.13
 * Time: 13:59
 */

Yii::import('system.web.widgets.pagers');

class EPager extends CLinkPager
{

	public function run()
	{
		$this->registerClientScript();

		$buttons = $this->createPageButtons();
		if (empty($buttons))
			return;

		echo '<div class="container pagination">';
		echo '<span>Навигация: </span>';
		echo implode("\n", $buttons);
		echo '</div>';

	}

	protected function createPageButtons()
	{
		if (($pageCount = $this->getPageCount()) <= 1)
			return array();

		$pages = $this->getPageRange();
		$currentPage = $this->getCurrentPage(); // currentPage is calculated in getPageRange()
		$buttons = array();

		// internal pages
		foreach ($pages as $page)
			$buttons[] = $this->createPageButton($page + 1, $page, 'b-pagination__el', false, $page == $currentPage);

		return $buttons;
	}

	protected function getPageRange()
	{
		$pageCount = $this->getPageCount();

		return range(0, $pageCount-1);
	}

	protected function createPageButton($label, $page, $class, $hidden, $selected)
	{
		if ($hidden || $selected)
			$class .= ' ' . ($hidden ? self::CSS_HIDDEN_PAGE : self::CSS_SELECTED_PAGE);
		return CHtml::link($label, $this->createPageUrl($page), array('class' => $class));
	}

}