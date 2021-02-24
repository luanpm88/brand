<?php
  
namespace App\Http\Controllers\Client;
  
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
  
class HomeController extends Controller
{
    /**
     * Client dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        return view('client.home.dashboard');
    }
}