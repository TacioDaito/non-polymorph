<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UpdateUserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user=User::findOrFail($request['id']);
        echo 'User updated.<br><br>Previous data:<br>';
        foreach($user->getAttributes() as $attribute=>$value){
            printf('| %s: %s ',$attribute,$value);
        }
        $user->update(['name'=>$request['newName'],'email'=>$request['newEmail']]);
        echo '<br><br>New data:<br>';
        foreach($user->getAttributes() as $attribute=>$value){
            printf('| %s: %s ',$attribute,$value);
        }
    }
}
