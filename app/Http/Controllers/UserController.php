<?php 
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


Class UserController extends Controller{
    public static function getAllUsers(){
    $listusers = User::where('id', '!=', auth()->id())->get();
    return view('users', compact('listusers'));
}

    public function search(Request $request){
        $query = request()->term;

        $listusers = User::where('username', 'LIKE', "%{$query}%")
        ->orWhere('fullname', 'LIKE', "%{$query}%")
        ->get();

        return view('/users', compact('listusers'));
    }

    public function show($id){
        $user = User::find($id);
        return view('user', compact('user'));
    }
}