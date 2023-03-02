<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteUserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        echo 'User deleted:<br><br>';
        foreach(User::find($request['id'])->getAttributes() as $attribute=>$value){
            printf('| %s: %s ',$attribute,$value);
        }
        User::destroy($request['id']);
    }
}
