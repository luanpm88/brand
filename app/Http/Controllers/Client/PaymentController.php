<?php
  
namespace App\Http\Controllers\Client;
  
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Service;
  
class PaymentController extends Controller
{
    /**
     * Pay for services.
     *
     * @return \Illuminate\View\View
     */
    public function checkout(Request $request)
    {
        $user = $request->user();

        // set services as pending. all new => pending
        $user->services()->where('status', '=', Service::STATUS_NEW)->update([
            'status' => Service::STATUS_PENDING,
        ]);

        // create new payment transaction
        $user->addPaymentForNewService($user->services()->where('status', '=', Service::STATUS_PENDING));

        switch ($request->payment) {
            case 'bank':
                return redirect()->action('Client\HomeController@wizard');
            default:
        }
    }

    /**
     * Cancel payment.
     *
     * @return \Illuminate\View\View
     */
    public function cancel(Request $request)
    {
        $user = $request->user();

        // set services as pending. all new => pending
        $user->services()->where('status', '=', Service::STATUS_PENDING)->delete();

        // // => NEW
        // $user->services()->where('status', '=', Service::STATUS_PENDING)->update([
        //     'status' => Service::STATUS_NEW,
        // ]);

        return redirect()->action('Client\HomeController@dashboard');
    }
}