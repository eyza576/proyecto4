<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Doctor
 * @package App\Models
 * @version September 30, 2021, 1:15 am UTC
 *
 * @property string $apellido_nombre
 * @property string $dni
 * @property string $especialidad
 */
class Doctor extends Model
{
    //use SoftDeletes;

    public $table = 'doctor';
    protected $primaryKey= 'iddoctor';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'apellido_nombre',
        'dni',
        'especialidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'iddoctor' => 'integer',
        'apellido_nombre' => 'string',
        'dni' => 'string',
        'especialidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'apellido_nombre' => 'nullable|string|max:45',
        'dni' => 'nullable|string|max:45',
        'especialidad' => 'nullable|string|max:45'
    ];

    
}
