<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class CreateUserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if(!User::where('email', $request['email'])->first()){
            $newUser = new User;
            $newUser->name = $request['name'];
            $newUser->email = $request['email'];
            $result = $newUser->save();
            echo $result ? 'Sucesso.' : 'Falha.';
        }else{
            echo "There's already an user using this email.";
        }
    }
}
