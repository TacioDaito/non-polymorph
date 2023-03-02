<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class ListAllUsersController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        foreach(User::all() as $user){
            foreach($user->getAttributes() as $attribute=>$value){
                printf('| %s: %s ',$attribute,$value);
            }
            echo '<br><br>';
        }
    }
}
