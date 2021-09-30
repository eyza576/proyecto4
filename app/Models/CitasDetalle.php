<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CitasDetalle
 * @package App\Models
 * @version September 30, 2021, 1:11 am UTC
 *
 * @property integer $idcita
 */
class CitasDetalle extends Model
{
    //use SoftDeletes;

    public $table = 'citasdetalle';
    protected $primaryKey= 'idcitasdetalle';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idcita'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcitasdetalle' => 'integer',
        'idcita' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcita' => 'nullable|integer'
    ];

    
}
