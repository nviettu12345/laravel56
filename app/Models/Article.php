<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table='articles';

    protected $status=[
        1=> [
            'name' => 'Public',
            'class'=> 'badge-danger'
        ],
        0=> [
            'name' => 'Private',
            'class'=> 'badge-secondary'
        ]
    ];

    public function getStatus()
    {
        return array_get($this->status,$this->a_active,'[N\A]');
    }
}
