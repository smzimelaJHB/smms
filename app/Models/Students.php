<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $IDNumber
 * @property string $FullName
 * @property string $email
 * @property string $cell
 * @property string $gender
 * @property string $pass
 * @property string $SubjectCode
 * @property int    $updated_at
 * @property int    $age
 * @property int    $deleted_at
 * @property int    $created_at

 */
class Students extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'IDNumber';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'IDNumber', 'FullName', 'email', 'age', 'deleted_at', 'created_at',
        'cell', 'gender', 'pass', 'SubjectCode', 'updated_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'IDNumber' => 'string', 'updated_at' => 'timestamp', 'FullName' => 'string',
        'email' => 'string', 'age' => 'int', 'deleted_at' => 'timestamp',
         'created_at' => 'timestamp', 'cell' => 'string', 'gender' =>
         'string', 'pass' => 'string', 'SubjectCode' => 'string'

    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'updated_at', 'deleted_at', 'created_at'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}
