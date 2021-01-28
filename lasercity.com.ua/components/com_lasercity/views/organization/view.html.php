<?php defined('_JEXEC') or die;

class lasercityVieworganization extends JViewLegacy
{
	public $item;
    function display($tpl = null)
    {
	    $this->item = $this->get('Item');;
	    JFactory::getDocument()->setTitle($this->item['organization']->title . ' (' . CityHelper::getCurrent()->title . ') Отзывы');
	    JFactory::getDocument()->setDescription($this->item['organization']->title . ' (' . CityHelper::getCurrent()->title . '). Оставляйте правдивие отзывы, записивайтесь и задавайте вопросы организациям на нашем сайте');
        return parent::display($tpl);
    }

}
