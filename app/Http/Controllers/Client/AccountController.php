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
        $user = $request->user();

        // save profile
        if ($request->isMethod('post')) {

            $validated = $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'address' => 'required',
            ]);

            $user->update($request->all());

            if($request->file('picture')) {
                $path = $request->file('picture')
                    ->storeAs('user/' . $user->id, 'picture');
            }
        }

        // fill old request if exist
        $user->fill($request->old());

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