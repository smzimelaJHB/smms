<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $idNumber
 * @property string $subjectName
 * @property string $password
 * @property string $gender
 * @property string $fullName
 * @property string $email
 * @property string $cell
 * @property string $email
 * @property string $IDnumber
 * @property string $name
 * @property string $password
 * @property string $surname
 * @property int    $updated_at
 * @property int    $created_at
 * @property int    $deleted_at
 * @property int    $created_at
 * @property int    $age
 * @property int    $age
 * @property int    $updated_at
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
    protected $primaryKey = 'idNumber';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idNumber','subjectName', 'password', 'gender', 'fullName','cell', 'email','age'
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
        'idNumber' => 'string', 'updated_at' => 'timestamp', 'created_at' => 'timestamp', 'subjectName' => 'string', 'password' => 'string', 'gender' => 'string', 'fullName' => 'string', 'email' => 'string', 'deleted_at' => 'timestamp', 'created_at' => 'timestamp', 'cell' => 'string', 'age' => 'int', 'email' => 'string', 'IDnumber' => 'string', 'name' => 'string', 'password' => 'string', 'age' => 'int', 'surname' => 'string', 'updated_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'updated_at', 'created_at', 'deleted_at', 'created_at', 'updated_at'
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