<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Deleted_Employee;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class DeletedEmployeeController extends Controller
{
    public function storeEmployee(Request $request)
    {
        $validationRules = [
            'auto_id' => 'required|integer',
            'date_embauche' => 'nullable|date',
            'date_naiss_emp' => 'nullable|date',
            'expir_carte_monit' => 'nullable|date',
            'type_employee' => 'required|string|max:31',
            'addr_emp' => 'nullable|string|max:255',
            'capn_emp' => 'nullable|string|max:255',
            'carte_moniteur' => 'nullable|string|max:255',
            'cin' => 'required|unique:deleted_employees|string|max:255',
            'email_emp' => 'nullable|email|max:255',
            'lieu_naiss_emp' => 'nullable|string|max:255',
            'nom_emp' => 'nullable|string|max:255',
            'nom_emp_arb' => 'nullable|string|max:255',
            'npc_emp' => 'nullable|string|max:255',
            'observations' => 'nullable|string|max:255',
            'prenom_emp' => 'nullable|string|max:255',
            'prenom_emp_arb' => 'nullable|string|max:255',
            'tel' => 'nullable|string|max:255',
            'type_emp' => 'nullable|in:Directeur,Moniteur,Secretaire',
            'type_moniteur' => 'nullable|in:Pratique,Theorique',
            'etat' => 'nullable'
        ];
        $incomingData = $request->json()->all();
        $validator = Validator::make( $incomingData, $validationRules);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        Deleted_Employee::create( $incomingData);
        return response()->json(['message' => 'Employee data stored successfully'], 201);

    }
}
