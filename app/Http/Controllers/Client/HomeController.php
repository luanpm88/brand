<?php
  
namespace App\Http\Controllers\Client;
  
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
  
class HomeController extends Controller
{
    /**
     * Member dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        return view('client.home.dashboard');
    }

    /**
     * Wizard for new member.
     *
     * @return \Illuminate\View\View
     */
    public function wizard(Request $request)
    {
        if ($request->type == 'website') {
            return view('client.website.domain');
        }
    }
}