<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    public function result(){
        return view('result', ['punits' =>  DB::table('polling_unit')->get()]);
    }
    public function get_result(Request $request){
        $result = DB::table('announced_pu_results')->where('polling_unit_uniqueid', $request->puid)->get();
        echo json_encode($result);
    }

    public function total(){
        return view('total', ['lgas' =>  DB::table('lga')->where('state_id', 25)->get()]);
    }
    public function get_total(Request $request){
        $result = DB::table('polling_unit')
                    ->join('announced_pu_results', 'polling_unit.uniqueid', '=', 'announced_pu_results.polling_unit_uniqueid')
                    ->where('lga_id', 35)
                    ->select('announced_pu_results.party_abbreviation','polling_unit.uniqueid','polling_unit.lga_id','polling_unit.ward_id','announced_pu_results.party_score')
                    ->get();
        echo '<pre>';
        // foreach($result as $val){
        //     echo '<br>';
        //     print_r($val);
        //     $get_result =  DB::table('announced_pu_results')->where('lga_id', 1)->get();
        // }
        print_r($result);
        $pdp=$jp=$anpp=$dpp=$acn=$cpp=$ppa=$cdc=$labo= 0;
        foreach($result as $val){
            // switch($val->party_score){
            //     ca
            // }
            if($val->party_abbreviation == 'PDP'){
                $pdp = $pdp + $val->party_score;
            }
            
        }
        echo '</pre>';

        echo $pdp;
        

    }

    public function store_result(){
        return view('store', ['punits' =>  DB::table('polling_unit')->get()]);
    }

    public function store(){

    }
}
