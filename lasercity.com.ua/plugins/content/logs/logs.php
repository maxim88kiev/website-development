<?php defined('_JEXEC') or die;

class plgContentLogs extends JPlugin
{
    private $path_to_logs = null;
    private $user_login = null;
    private $component_name = null;
    private $isNew = false;
    private $status = null;

    /*function __construct(object $subject, array $config = array())
    {
        $this->path_to_logs = JPATH_BASE . '/logs';
        $this->user_login = JFactory::getUser()->username;
        $this->component_name = JFactory::getApplication()->input->get('option');
        parent::__construct($subject, $config);
    }

    function onContentAfterSave($context, $article, $isNew)
    {
        $this->isNew = $isNew;
        $info = explode('.', $context);
        $this->status = $this->isNew ? 'Новая' : 'Отредактировано';
        $this->toLog($info[1], $article->id);
    }

    function onContentAfterDelete($context, $article)
    {
        $this->status = 'Удаленно';
        $info = explode('.', $context);
        $this->toLog($info[1], $article->id);
    }

    function onContentChangeState($context, $pks, $value)
    {
        $lang = array(
            -2 => 'В корзине',
            0 => 'Снято с публикации',
            1 => 'Опубликовано',
            2 => 'В архив'
        );
        $status = isset($lang[$value]) ? $lang[$value] : $value;
        $this->status = "Изменен статус ({$status})";
        $info = explode('.', $context);
        $this->toLog($info[1], is_array($pks) ? implode('-', $pks) : $pks);
    }

    function toLog($view, $id)
    {
        $components = array();
        foreach ((array)$this->params->get('components') as $component) {
            $components[] = $component->name;
        }

        if (in_array(mb_strtoupper($this->component_name), $components)) {
            $this->checkDir($this->path_to_logs);
            $path = $this->path_to_logs . '/' . date('d.m.Y');
            $this->checkDir($path);
            $path .= '/' . $this->component_name;
            $this->checkDir($path);
            $log = date('H:i:s') . " Автор: {$this->user_login} Статус: " .
                ($this->status) . " ID: {$id}\r\n";
            file_put_contents("{$path}/{$view}.log", $log, FILE_APPEND | LOCK_EX);
        }
    }

    function checkDir($path)
    {
        if (!file_exists($path)) {
            mkdir($path);
        }
    }*/
}