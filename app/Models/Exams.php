<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $updated_at
 * @property int    $deleted_at
 * @property int    $created_at
 * @property string $subjectName
 */
class Exams extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'exams';

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
        'updated_at', 'subjectName', 'grade', 'deleted_at', 'created_at'
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
        'updated_at' => 'timestamp', 'subjectName' => 'string',
        'deleted_at' => 'timestamp', 'created_at' => 'timestamp'
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