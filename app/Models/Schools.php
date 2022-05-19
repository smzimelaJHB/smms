<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $schoolName
 * @property string $adress
 * @property string $email
 * @property string $tel
 * @property int    $created_at
 * @property int    $deleted_at
 * @property int    $updated_at
 */
class Schools extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'schools';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'schoolName';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'schoolName','address', 'created_at', 'deleted_at', 'email', 'tel', 'updated_at'
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
        'schoolName' => 'string', 'address' => 'string', 'created_at' => 'timestamp', 'deleted_at' => 'timestamp', 'email' => 'string', 'tel' => 'string', 'updated_at' => 'timestamp'
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