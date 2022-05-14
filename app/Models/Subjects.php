<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $SubjectName
 * @property string $SubjectCode
 * @property int    $deleted_at
 * @property int    $created_at
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
        'SubjectName','SubjectCode','deleted_at', 'created_at', 'updated_at'
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
        'SubjectCode' => 'string', 'SubjectName' => 'string', 'deleted_at' => 'timestamp', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at', 'created_at', 'updated_at'
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
