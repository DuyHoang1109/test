<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public static function getAll(){
        return [
            ['id' => 1, 'name' => 'Product 1', 'price' => 100],
            ['id' => 2, 'name' => 'Product 2', 'price' => 200],
            ['id' => 3, 'name' => 'Product 3', 'price' => 300],
        ];
    }
}
