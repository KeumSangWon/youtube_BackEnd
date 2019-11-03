<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use Illuminate\Support\Facades\Validator;
class FirebaseController extends Controller
{
	public function index(Request $request){
		$validator = Validator::make($request->json()->all(), [
			'name' => 'required|string|max:30',
			'email' => 'required|string|max:50',
			'password' => 'required|string|max20'
		]);

		if($validator->fails()){
					return response()->json($validator->errors()->toJson(), 400);
			}

		$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/test-f7cca-firebase-adminsdk-seb28-d28e328314.json');
		$firebase 		  = (new Factory)
                        ->withServiceAccount($serviceAccount)
                        ->withDatabaseUri('https://test-f7cca.firebaseio.com')
                        ->create();
		$database = $firebase->getDatabase();
		$newPost 	= $database
		              ->getReference('user')
		              ->push(['name' => $request->json()->get('name'), 'email' => $request->json()->get('email'), 'password' => $request->json()->get('password')]);
	}
}
?>
