<?php
  
namespace App\Http\Controllers\Client;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\User;
  
class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('client.website.index', [
            'user' => $request->user(),
        ]);
    }
}