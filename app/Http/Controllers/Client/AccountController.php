<?php
  
namespace App\Http\Controllers\Client;
  
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
  
class AccountController extends Controller
{
    /**
     * Client profile page.
     *
     * @return \Illuminate\View\View
     */
    public function profile()
    {
        return view('client.account.profile');
    }
}