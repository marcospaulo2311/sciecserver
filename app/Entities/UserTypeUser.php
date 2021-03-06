<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class UserTypeUser extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [ 'id_user',
                            'id_type_user',
                            'status'
                            ];

}
