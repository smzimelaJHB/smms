<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $SubjectCode
 * @property string $SubjectCode
 * @property string $SubjectName
 * @property string $SubjectName
 * @property int    $created_at
 * @property int    $updated_at
 * @property int    $created_at
 * @property int    $deleted_at
 * @property int    $updated_at
 */
class Subjects extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subjects';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'SubjectCode';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'created_at', 'SubjectName', 'updated_at', 'created_at', 'deleted_at', 'SubjectName', 'updated_at'
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
        'SubjectCode' => 'string', 'SubjectCode' => 'string', 'created_at' => 'timestamp', 'SubjectName' => 'string', 'updated_at' => 'timestamp', 'created_at' => 'timestamp', 'deleted_at' => 'timestamp', 'SubjectName' => 'string', 'updated_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at', 'created_at', 'deleted_at', 'updated_at'
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