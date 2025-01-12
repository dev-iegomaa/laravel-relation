<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAddress;
use Carbon\Carbon;
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

    public function conditionForRelation(): JsonResponse
    {
        $users = User::select('id', 'name')->with(['address:name,user_id' => function ($q) {
            $q->where('name', 'cairo');
        }])->get();
        return new JsonResponse($users);
    }

    public function conditionWhereHas(): JsonResponse
    {
        $users = User::whereHas('address')->get();
        return new JsonResponse($users);
    }

    public function conditionWhereDoesntHave(): JsonResponse
    {
        $users = User::WhereDoesntHave('address')->get();
        return new JsonResponse($users);
    }

    public function conditionWhereDateForRelation(): JsonResponse
    {
        $users = User::whereHas('address', function ($query) {
            $query->whereDate('created_at', '<', Carbon::now());
        })->get();
        return new JsonResponse($users);
    }
}
