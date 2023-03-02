<?php

namespace App\Http\Controllers;

use App\Models\IdentityDocument;
use Illuminate\Http\Request;

class registerUserDocument extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $userIdentityDocument = new IdentityDocument;
        $userIdentityDocument->user_id = $request['id'];
        $userIdentityDocument->code = $request['code'];
        $userIdentityDocument->save();
        echo 'Document registered successfully.';
    }
}
