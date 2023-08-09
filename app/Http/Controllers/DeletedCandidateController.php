<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deleted_Condidat;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DeletedCandidateController extends Controller
{
    public function storeCondidate(Request $request)
    {

        $validationRules = [
            'id' => 'required|integer',
            'adrs_arab' => 'required',
            'adrs_frenc' => 'required',
            'cin' => 'required',
            'num_contrat' => 'required|integer',
            'observation' => 'nullable',
            'date_fin_contrat' => 'nullable|date',
            'date_inscription' => 'nullable|date',
            'date_naissance' => 'nullable|date',
            'email' => 'nullable|email',
            'etat' => 'nullable',
            'image_cin' => 'nullable',
            'lieu_nais' => 'nullable',
            'nom_arab' => 'nullable',
            'nom_frenc' => 'nullable',
            'prenom_arab' => 'nullable',
            'prenom_frenc' => 'nullable',
            'profession' => 'nullable',
            'profile' => 'nullable',
            'ref_web' => 'nullable',
            'tel' => 'nullable|digits:10',
            'montant' => 'required|numeric',
            'nmbr_heure_pr' => 'required|integer',
            'nmbr_heure_th' => 'required|integer',
            'type' => 'nullable',
            'possede_permis' => 'required|boolean',
            'id_condidat' => 'nullable|integer',
            'id_cat' => 'nullable|integer',
            'montant_paye' => 'required|integer',
            'reste' => 'required|integer',
            'id_autoe' => 'nullable|integer',
        ];

        $incomingData = $request->json()->all();
        $validator = Validator::make( $incomingData, $validationRules);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        Deleted_Condidat::create( $incomingData);
        return response()->json(['message' => 'Candidate data stored successfully'], 201);
    }


}
