<?php
namespace App\Http\Controllers;

use App\Models\Recruits\Apply;
use App\Models\Recruits\Recruit;
use Illuminate\Http\Request;

class ApplyController extends Controller {

    public function apply(Request $request){
        $apply = Apply::create([
            "user_id" => $request->get('user_id'), 
            "recruit_id" => $request->get('recruit_id'),
            "check_compleat" => 0
        ]);
    }

    public function get_pick(Request $request){
        $id = $request->id; 
        $apply = Recruit::where("user_id", $id)->with("apply")->get();
        return response()->json($apply);
    }
}