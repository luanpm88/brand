<?php
  
namespace App\Http\Controllers\Client;
  
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
  
class UserController extends Controller
{
    /**
     * User picture.
     *
     * @return \Illuminate\View\View
     */
    public function picture(Request $request, $id)
    {
        $user = User::find($id);

        if ($user->getPicture()) {
            return response()->file($user->getPicture());
        } else {
            return response()->file(public_path('image/no-product-image.png'));
        }
    }
}