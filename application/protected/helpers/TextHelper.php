<?php

/**
 * Created by PhpStorm.
 * User: astronom
 * Date: 31.07.14
 * Time: 19:18
 */
class TextHelper
{

	/**
	 * Word Limiter
	 *
	 * Limits a string to X number of words.
	 *
	 * @access    public
	 * @param    string
	 * @param    integer
	 * @param    string    the end character. Usually an ellipsis
	 * @param   boolean
	 * @return    string
	 */
	public static function word_limiter($str, $limit = 100, $end_char = '&#8230;',  $force = false)
	{
		if (trim($str) == '') {
			return $str;
		}

		preg_match('/^\s*+(?:\S++\s*+){1,' . (int)$limit . '}/', $str, $matches);

		if (strlen($str) == strlen($matches[0]) && !$force) {
			$end_char = '';
		}

		return rtrim($matches[0]) . $end_char;
	}
} 