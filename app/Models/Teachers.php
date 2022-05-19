<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $employeeID
 * @property string $position
 * @property string $schoolName
 * @property string $studentName
 * @property string $subjectName
 * @property string $password
 * @property string $idNumber
 * @property string $gender
 * @property string $password
 * @property string $email
 * @property string $cell
 * @property string $email
 * @property string $EmployeeID
 * @property string $name
 * @property int    $updated_at
 * @property int    $deleted_at
 * @property int    $created_at
 * @property int    $created_at
 * @property int    $updated_at
 */
class Teachers extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'teachers';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'employeeID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'position', 'schoolName', 'studentName', 'subjectName', 'updated_at', 'password', 'idNumber', 'gender', 'password', 'email', 'deleted_at', 'created_at', 'cell', 'created_at', 'email', 'EmployeeID', 'name', 'updated_at'
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
        'employeeID' => 'string', 'position' => 'string', 'schoolName' => 'string', 'studentName' => 'string', 'subjectName' => 'string', 'updated_at' => 'timestamp', 'password' => 'string', 'idNumber' => 'string', 'gender' => 'string', 'password' => 'string', 'email' => 'string', 'deleted_at' => 'timestamp', 'created_at' => 'timestamp', 'cell' => 'string', 'created_at' => 'timestamp', 'email' => 'string', 'EmployeeID' => 'string', 'name' => 'string', 'updated_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'updated_at', 'deleted_at', 'created_at', 'created_at', 'updated_at'
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