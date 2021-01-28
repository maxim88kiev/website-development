<?php defined('_JEXEC') or die;

jimport('helpers.search', 'components/com_lasercity');

class lasercityViewclinics extends JViewLegacy
{
    public $items = array();
    public $usersCount = array();

    function display($tpl = null)
    {
	    $this->items = $this->get('Items');

	    $addR = '';

	    if (isset($this->items['active_filters'])) {
	    	$filters = $this->items['active_filters'];

	    	$config = [
	    		'district', 'micro_district', 'metro'
		    ];

	    	foreach ($filters as $filter) {
	    		if (in_array($filter->type, $config)) {
	    			$addR = "({$filter->title})";
	    			break;
			    }
		    }
	    }
	    
	    $this->document->setTitle('Лазерная эпиляция ' . CityHelper::getCurrent()->title . ' ' . $addR . '  | ' .
		    $this->items['search_info']['count'] . ' лучших салонов - Lasercity.');

	    $this->document->setDescription('Лазерная эпиляция в городе '. CityHelper::getCurrent()->title .
		    ' ⭐ Лучшие салоны в городе ➤Достоверные отзывы ✅ Записывайтесь и задавайте вопросы на нашем сайте 👍');

	    $db = JFactory::getDbo();
        $db->setQuery("SELECT COUNT(*) FROM `#__lasercity_last_visit` WHERE `object_type`='home'");
        $this->usersCount = $db->loadResult();

        return parent::display($tpl); //
    }
}