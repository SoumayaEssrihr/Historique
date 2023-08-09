<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deleted_Employee extends Model
{
    use HasFactory;

    protected $table = 'deleted_employees';
    protected $fillable = [
        'auto_id',
        'date_embauche',
        'date_naiss_emp',
        'expir_carte_monit',
        'type_employee',
        'addr_emp',
        'capn_emp',
        'carte_moniteur',
        'cin',
        'email_emp',
        'lieu_naiss_emp',
        'nom_emp',
        'nom_emp_arb',
        'npc_emp',
        'observations',
        'prenom_emp',
        'prenom_emp_arb',
        'tel',
        'type_emp',
        'type_moniteur',
        'etat'
    ];
}
