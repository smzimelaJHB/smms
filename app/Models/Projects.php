<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $updated_at
 * @property int    $created_at
 * @property int    $deleted_at
 * @property string $projectName
 * @property string $subjectName
 */
class Projects extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'updated_at', 'created_at', 'deleted_at', 'grade', 'projectName', 'subjectName'
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
        'updated_at' => 'timestamp', 'created_at' => 'timestamp', 'deleted_at' => 'timestamp', 'projectName' => 'string', 'subjectName' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'updated_at', 'created_at', 'deleted_at'
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
