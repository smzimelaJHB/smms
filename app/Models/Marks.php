<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/*
 * @property int    $grade
 * @property int    $created_at
 * @property int    $deleted_at
 * @property int    $updated_at
 * @property string $SubjectCode
 */
class Marks extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'marks';

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
        'mystatus', 'created_at', 'grade','deleted_at', 'grade', 'SubjectCode', 'updated_at'
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
         'created_at' => 'timestamp', 'grade' => 'int', 'deleted_at' => 'timestamp', 'SubjectCode' => 'string', 'updated_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'created_at', 'deleted_at'
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
