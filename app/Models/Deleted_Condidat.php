<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deleted_Condidat extends Model
{
    use HasFactory;

    protected $table = 'deleted_condidats';
    protected $fillable = [
        'id',
        'adrs_arab',
        'adrs_frenc',
        'cin',
        'num_contrat',
        'observation',
        'date_fin_contrat',
        'date_inscription',
        'date_naissance',
        'email',
        'etat',
        'image_cin',
        'lieu_nais',
        'nom_arab',
        'nom_frenc',
        'prenom_arab',
        'prenom_frenc',
        'profession',
        'profile',
        'ref_web',
        'tel',
        'montant',
        'nmbr_heure_pr',
        'nmbr_heure_th',
        'type',
        'possede_permis',
        'id_condidat',
        'id_cat',
        'montant_paye',
        'reste',
        'id_autoe',
    ];
}
