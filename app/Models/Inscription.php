<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $filiere_id
 * @property integer $niveau_etude_id
 * @property string $civilité
 * @property string $nom
 * @property string $prenom
 * @property string $nationalite
 * @property string $dateNaissance
 * @property string $pays
 * @property string $ville
 * @property string $phone
 * @property string $email
 * @property string $diplome_url
 * @property string $identite_url
 * @property string $photo_url
 * @property string $created_at
 * @property string $updated_at
 * @property Filiere $filiere
 * @property NiveauEtude $niveauEtude
 */
class Inscription extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['filiere_id', 'niveau_etude_id', 'civilite', 'nom', 'prenom', 'nationalite', 'dateNaissance', 'pays', 'ville', 'phone', 'email', 'numwhat', 'diplome_url', 'identite_url', 'photo_url', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function filiere()
    {
        return $this->belongsTo('App\Models\Filiere');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function niveauEtude()
    {
        return $this->belongsTo('App\Models\NiveauEtude');
    }
}
