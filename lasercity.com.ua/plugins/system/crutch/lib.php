<?php defined('_JEXEC') or die();

class HTML extends JHtml
{
	public static $f_scripts = array();

	public static function implode_f_scripts()
	{
		$trueOrder = self::setLevels(self::$f_scripts);
		$scripts   = array();
		foreach ($trueOrder as $script)
		{
			$attrs = array();
			foreach ($script['attrs'] as $attr => $value)
			{
				$attrs[] = $attr . (isset($value{0}) ? "=\"{$value}\"" : '');
			}
			$attrs     = implode(' ', $attrs);
			$scripts[] = "<script {$attrs} src=\"{$script['src']}\"></script>";
		}

		return implode("\r\n", $scripts);
	}

	/**
	 * @param       $src   => http(s)://example.com/example.js або /example.js
	 * @param int   $level => ціле число
	 * @param array $attrs => [type=>"text/javascript"] або [async] | назва атрибута => ключ значення або тільки значення
	 *
	 *
	 * @since version
	 */
	public static function f_scripts($src, $level = 0, $attrs = array())
	{
		$checkSRC = false;
		foreach (self::$f_scripts as $script)
		{
			if ($script['src'] == $src)
			{
				$checkSRC = true;
				break;
			}
		}
		if (!$checkSRC)
		{
			$doc       = JFactory::getDocument();
			$h_scripts = $doc->_scripts;
			if (isset($h_scripts[$src]))
			{
				$checkSRC = true;
			}
			if ((preg_match('(http://|https://)', $src) || file_exists(JPATH_BASE . $src)) && is_numeric($level) && !$checkSRC)
			{
				$script                  = array();
				$script['src']           = $src;
				$script['attrs']['type'] = 'text/javascript';
				if (!empty($attrs))
				{
					if (is_array($attrs))
					{
						$checkTypes = array(
							'async', 'defer', 'language', 'type'
						);
						foreach ($attrs as $attr => $value)
						{
							if (is_numeric($attr))
							{
								if (in_array($value, $checkTypes))
								{
									$script['attrs'][$value] = null;
								}
							}
							else
							{
								if (in_array($attr, $checkTypes))
								{
									$script['attrs'][$attr] = $value;
								}
							}
						}
					}
				}
				$script['level']   = $level;
				self::$f_scripts[] = $script;
			}
		}
	}

	private static function setLevels($scripts)
	{
		$levels = array();
		foreach ($scripts as $script)
		{
			if (!in_array($script['level'], $levels))
			{
				$levels[] = $script['level'];
			}
		}
		arsort($levels);
		$outArray = array();
		foreach ($levels as $level)
		{
			foreach ($scripts as $id => $script)
			{
				if ($script['level'] == $level)
				{
					$outArray[] = $script;
					unset($scripts[$id]);
				}
			}
		}

		return $outArray;
	}
}