<?php

namespace App\Models;

use Entity;

class Article extends \Spot\Entity
{
    protected static $table = 'article';
    public static function fields()
    {
        return [
            'id'           => ['type' => 'integer', 'primary' => true, 'autoincrement' => true],
            'title'        => ['type' => 'string', 'required' => true],
            'category'     => ['type' => 'string', 'required' => true],
            'author'       => ['type' => 'string', 'required' => true],
            'date_created' => ['type' => 'datetime', 'value' => new \DateTime()],
            'intro'        => ['type' => 'text', 'required' => true],
            'content'      => ['type' => 'text', 'required' => true],
            'picture'      => ['type' => 'text', 'required' => true]
        ];
    }
}