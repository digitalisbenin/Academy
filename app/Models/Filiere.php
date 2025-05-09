<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $cursus_id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property Cursus $cursus
 * @property Inscription[] $inscriptions
 */
class Filiere extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['cursus_id', 'name', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cursus()
    {
        return $this->belongsTo('App\Models\Cursus');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscriptions()
    {
        return $this->hasMany('App\Models\Inscription');
    }
}
