<?php use Joomla\Uri\Uri;
use Joomla\Utilities\ArrayHelper;

defined('_JEXEC') or die;

class LasercityViewhome extends JViewLegacy
{
	function display($tpl = null)
	{
		$this->prices = $this->get('FilterServices');

		$segments        = explode('/', \Joomla\CMS\Uri\Uri::current());
		$city            = $segments[count($segments) - 2];
		$default_city_id = JComponentHelper::getParams('com_lasercity')->get('city');

		/*echo '<pre>';
		print_r(CityHelper::getCurrent());
		echo '</pre>';*/

		if ($default_city_id == CityHelper::getCurrent()->id && $city == CityHelper::getCurrent()->alias)
		{
			header('Location: /');
		}
		$this->document->setTitle('Лазерная эпиляция ' . CityHelper::getCurrent()->title .
			' | ТОП 10 лучших салонов - Lasercity.');
		$this->document->setDescription('Лазерная эпиляция в городе '. CityHelper::getCurrent()->title .
			' ⭐ Лучшие салоны в городе ➤Достоверные отзывы ✅ Записывайтесь и задавайте вопросы на нашем сайте 👍');

		/*JHtml::_('script', 'templates/lasercity/js/index.js', array('version' => 'auto'), array('defer' => 'defer'));
		JHtml::_('script', 'templates/lasercity/js/filter.js', array('version' => 'auto'), array('defer' => 'defer'));*/

//        JHtml::_('script', 'templates/lasercity/js/scroller.js', array('version' => 'auto'));
		return parent::display($tpl);
	}

}