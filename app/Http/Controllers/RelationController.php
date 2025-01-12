<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\JsonResponse;

class RelationController extends Controller
{
    public function hasOne(): JsonResponse
    {
        $users = User::select('id', 'name')->with('address:name,user_id')->get();
        return new JsonResponse($users);
    }

    public function hasOneReverse(): JsonResponse
    {
        $address = UserAddress::select(['user_id', 'name'])->with('user:id,name')->get();
        return new JsonResponse($address);
    }
}
