<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PollingsUnits extends Controller
{

    public function total()
    {
        $results = DB::table('polling_unit')
            ->join('announced_pu_results', 'polling_unit.polling_unit_id', '=', 'announced_pu_results.polling_unit_uniqueid')
            ->select('polling_unit.polling_unit_id', 'polling_unit.ward_id', 'polling_unit.lga_id', 'polling_unit.polling_unit_name', 'announced_pu_results.party_score','announced_pu_results.party_abbreviation','announced_pu_results.entered_by_user')
            ->paginate(10); // Specify the number of records per page (e.g., 10)
    
        return view('elections.index', compact('results'));
    }
    
    public function party_total_scores(Request $request)
    {
        // Fetch the list of local governments for the dropdown
        $localGovernments = DB::table('announced_pu_results')
            ->join('polling_unit', 'announced_pu_results.polling_unit_uniqueid', '=', 'polling_unit.polling_unit_id')
            ->join('lga', 'polling_unit.lga_id', '=', 'lga.lga_id')
            ->select('lga.lga_id', 'lga.lga_name')
            ->distinct()
            ->get();
    
        // Initialize variables for selected local government and corresponding party scores
        $selectedLocalGovernment = null;
        $partyScores = [];
    
        // Check if a local government is selected
        if ($request->has('local_government')) {
            // Get the selected local government ID from the request
            $selectedLocalGovernment = $request->input('local_government');
    
            // Fetch the polling unit results and calculate the sum of party scores for the selected local government
            $pollingUnitResults = DB::table('announced_pu_results')
                ->join('polling_unit', 'announced_pu_results.polling_unit_uniqueid', '=', 'polling_unit.polling_unit_id')
                ->select('polling_unit.polling_unit_name', 'announced_pu_results.party_score')
                ->where('polling_unit.lga_id', $selectedLocalGovernment)
                ->get();
            
            $partyScores = DB::table('announced_pu_results')
                ->join('polling_unit', 'announced_pu_results.polling_unit_uniqueid', '=', 'polling_unit.polling_unit_id')
                ->select('announced_pu_results.party_abbreviation', DB::raw('SUM(announced_pu_results.party_score) as total_score'))
                ->where('polling_unit.lga_id', $selectedLocalGovernment)
                ->groupBy('announced_pu_results.party_abbreviation')
                ->get();
        }
    
        return view('elections.total_scores', [
            'pollingUnitResults' => $pollingUnitResults ?? null,
            'localGovernments' => $localGovernments,
            'selectedLocalGovernment' => $selectedLocalGovernment,
            'partyScores' => $partyScores,
        ]);
    }
    

    public function dash(){
        return view('dash.dash');
    }
    public function create()
    {
        return view('elections.store');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'uniqueid' => 'nullable',
            'ward_id' => 'nullable|integer',
            'lga_id' => 'nullable|integer',
            'uniquewardid' => 'nullable',
            'polling_unit_number' => 'required',
            'polling_unit_name' => 'required',
            'polling_unit_description' => 'required',
            'lat' => 'nullable',
            'long' => 'nullable',
            'entered_by_user' => 'nullable',
            'date_entered' => 'nullable|date',
            'user_ip_address' => 'nullable',
        ]);
    
        // Store the polling unit data in the database
        DB::table('polling_unit')->insert([
            'uniqueid' => $request->input('uniqueid'),
            'ward_id' => $request->input('ward_id'),
            'lga_id' => $request->input('lga_id'),
            'uniquewardid' => $request->input('uniquewardid'),
            'polling_unit_number' => $request->input('polling_unit_number'),
            'polling_unit_name' => $request->input('polling_unit_name'),
            'polling_unit_description' => $request->input('polling_unit_description'),
            'lat' => $request->input('lat'),
            'long' => $request->input('long'),
            'entered_by_user' => $request->input('entered_by_user'),
            'date_entered' => $request->input('date_entered'),
            'user_ip_address' => $request->input('user_ip_address'),
            'polling_unit_id' => $request->input('polling_unit_id'),
        ]);
    
        return redirect()->back()->with('success', 'Polling unit created successfully.');
    }
    
      
    
}
