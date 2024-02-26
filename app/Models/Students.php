<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'studentis';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_student', 'id_student', 'email_student', 'password_student',
    ];
}
