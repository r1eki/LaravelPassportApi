<?php

namespace App\Http\Controllers\API;

use Lcobucci\JWT\Parser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;

class UserController extends Controller
{
    public $successStatus = 200;

    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('nApp')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'hp'   => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('nApp')->accessToken;
        $success['name'] =  $user->name;
        $success['hp']  = $user->hp;

        return response()->json(['success'=>$success], $this->successStatus);
    }

    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }
    
    public function transaksi(){
         public function transaksi(){
         $validator = Validator::make($request->all(), [
            'pinjaman' => 'required',
            'bunga'   => 'required',
            'jumlah_angsuran' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        // Function 
        
    }
    
    public function logout(Request $request) {
    $value = $request->bearerToken();
    if ($value) {
 
        $id = (new Parser())->parse($value)->getHeader('jti');
        $revoked = DB::table('oauth_access_tokens')->where('id', '=', $id)->update(['revoked' => 1]);
        $this->guard()->logout();
    }
    Auth::logout();
    return Response(['code' => 200, 'message' => 'You are successfully logged out'], 200);
    }
    
    
}
