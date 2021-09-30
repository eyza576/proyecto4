<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usurio
 * @package App\Models
 * @version September 30, 2021, 12:54 am UTC
 *
 * @property string $apellido
 * @property string $nombre
 * @property string $usurio
 * @property string $password
 */
class Usurio extends Model
{
    //use SoftDeletes;

    public $table = 'usurio';
    protected $primaryKey= 'idusurio';
    public $timestamps =false;
    
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'apellido',
        'nombre',
        'usurio',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idusurio' => 'integer',
        'apellido' => 'string',
        'nombre' => 'string',
        'usurio' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'apellido' => 'nullable|string|max:45',
        'nombre' => 'nullable|string|max:45',
        'usurio' => 'nullable|string|max:45',
        'password' => 'nullable|string|max:45'
    ];

    
}
