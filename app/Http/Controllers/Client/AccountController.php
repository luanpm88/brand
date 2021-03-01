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
    public function profile(Request $request)
    {
        return view('client.account.profile', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Client brand page.
     *
     * @return \Illuminate\View\View
     */
    public function brand(Request $request)
    {
        return view('client.account.brand', [
            'user' => $request->user(),
        ]);
    }
}