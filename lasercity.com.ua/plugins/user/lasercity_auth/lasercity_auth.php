<?php defined('_JEXEC') or die;

class PlgUserLasercity_auth extends JPlugin
{
    function onContentPrepareForm($form, $data)
    {
        if ($form->getName()=='com_users.registration')
        {
            //$this->reLoadFrom('registration', $form);
        }
    }

    function onUserBeforeSave($oldUser, $isNew, $newUser) {
        //JFactory::getApplication()->enqueueMessage('test', 'error');

        file_put_contents('check', json_encode($oldUser) . ' ' . json_encode($newUser));

        //JFactory::getApplication()->redirect(JUri::base());
        return true;
    }

    function reLoadFrom($name, &$form) {
        $form->addFormPath(dirname(__FILE__).'/forms');
        $form->reset(true);
        $form->loadFile($name);
    }
}