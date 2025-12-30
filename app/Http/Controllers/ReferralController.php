<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use PhpParser\NodeVisitor\FirstFindingVisitor;

class ReferralController extends Controller
{
    public function store(Request $request, $username)
{

 $referrer = user::where('username', $username)->first();
   
if ($referrer) {
          session()->put('referrer_id', $referrer->id);
            $referrerId = session('referrer_id');

            
}
else{
    $defaultReferrer = user::where('username','admin')->First();
    session()->put('referrer_id', $defaultReferrer->id);
}
dd(session('referrer_id'));
}}
     
   