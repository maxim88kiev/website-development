<?php

namespace AMBase\Podelu\Comments\Usecases;

class CommentAddResponse implements \JsonSerializable
{
    public $error;

    public function __construct($error = '')
    {
        $this->error = $error;
    }


    public function jsonSerialize()
    {
        $map = [
            'success' => empty($this->error),
        ];

        if ($this->error) {
            $map['error'] = $this->error;
        }

        return $map;
    }
}
