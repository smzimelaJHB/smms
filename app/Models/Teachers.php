<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $EmployeeID
 * @property string $name
 * @property string $pass
 * @property string $email
 * @property string $cell
 * @property string $FullName
 * @property string $SubjectCode
 * @property int    $created_at
 * @property int    $deleted_at
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
    protected $primaryKey = 'EmployeeID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'EmployeeID','pass', 'EmployeeID', 'email',
        'cell', 'created_at', 'deleted_at','FullName','SubjectCode', 'updated_at'
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
        'EmployeeID' => 'string', 'password' => 'string',
        'cell' => 'string', 'created_at' => 'timestamp', 'deleted_at'
        => 'timestamp', 'email' => 'string',
        'FullName' => 'string', 'pass' => 'string', 'SubjectCode' =>
        'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'deleted_at', 'updated_at'
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
