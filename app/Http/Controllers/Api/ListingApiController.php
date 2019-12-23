<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingApiController extends Controller
{

    public $success_status = 200;
    public $error_status = 401;

    public function list(){
        $listings = Listing::all();
        return response(['listing' => $listings],$this->success_status);
    }
}
