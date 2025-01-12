<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use Illuminate\Http\JsonResponse;

class AppearanceController extends Controller
{
    public function visible(): JsonResponse
    {
        $address = UserAddress::find(1);
        $address->makeVisible(['street']);
        return new JsonResponse($address);
    }

    public function hidden(): JsonResponse
    {
        $address = UserAddress::find(1);
        $address->makeHidden(['street']); // OR use select('id', 'name')->find.
        return new JsonResponse($address);
    }
}
