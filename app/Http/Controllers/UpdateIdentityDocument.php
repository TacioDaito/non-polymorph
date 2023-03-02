<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UpdateIdentityDocument extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $document = User::findOrFail($request['id'])->identityDocument;
        echo 'Document updated.<br><br>Previous data:<br>';
        foreach($document->getAttributes() as $attribute=>$value){
            printf('| %s: %s ',$attribute,$value);
        }
        $document->update(['code'=>$request['newCode']]);
        echo '<br><br>New data:<br>';
        foreach($document->getAttributes() as $attribute=>$value){
            printf('| %s: %s ',$attribute,$value);
        }
    }
}
