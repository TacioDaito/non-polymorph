<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class ListAllIdentityDocuments extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        foreach(User::has('identityDocument')->get() as $user){
            printf('User email: %s | Identity Document Code: %s<br><br>',$user->email,$user->identityDocument->code);
        }
    }
}
