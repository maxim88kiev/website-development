<?php

namespace AMBase\Podelu\Comments\Usecases;

class CommentAddRequest
{
    public $name;
    public $text;
    public $elementId = null;
    public $parentId = null;

    public function __construct($name, $text, $params)
    {
        $this->name = $name;
        $this->text = $text;

        if (!empty($params['elementId'])) {
            $this->elementId = $params['elementId'];
        }

        if (!empty($params['parentId'])) {
            $this->parentId = $params['parentId'];
        }
    }
}
