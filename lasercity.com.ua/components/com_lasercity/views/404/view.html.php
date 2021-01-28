<?php defined('_JEXEC') or die;

class LasercityView404 extends JViewLegacy
{
    function display($tpl = null)
    {
        $this->document->setTitle(JText::_('COM_LASERCITY_404_DESCRIPTION'));
        return parent::display($tpl);
    }
}