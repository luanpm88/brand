<?php
  
namespace App\Http\Controllers\Client;
  
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Service;
  
class HomeController extends Controller
{
    /**
     * Member dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard(Request $request)
    {
        $user = $request->user();

        if ($user->hasActivePlan()) {
            return view('client.home.dashboard');
        } else {
            return view('client.home.welcome');
        }
    }

    /**
     * Wizard for new member.
     *
     * @return \Illuminate\View\View
     */
    public function wizard(Request $request)
    {
        $user = $request->user();

        // save wizard
        if ($request->isMethod('post')) {
            $user->updateMetadata([
                'wizard' => 'website',
            ]);

            // redirect to wizard
            return redirect()->action('Client\HomeController@wizard');
        }

        // @website: user has plan
        if ($user->hasActivePlan()) {
            // redirect to wizard
            return redirect()->action('Client\HomeController@dashboard');
        }

        // @website: have pending payment
        if ($user->hasPendingPayment()) {
            return view('client.payments.bank', [
                'services' => $user->services()->where('status', '=', Service::STATUS_PENDING)->get(),
                'total' => $user->services()->where('status', '=', Service::STATUS_PENDING)->sum('price'),
            ]);
        }

        // @website: billing page
        if ($user->hasTemplateService() && $user->hasPlanService() && $user->hasDomainService()) {
            return view('client.services.checkout', [
                'services' => $user->services()->where('status', '=', Service::STATUS_NEW)->get(),
                'total' => $user->services()->where('status', '=', Service::STATUS_NEW)->sum('price'),
            ]);
        }

        // @website: template select
        if ($user->hasPlanService()) {
            return view('client.templates.select', [
                'templates' => $user->getTemplates(),
            ]);
        }

        // @website: plan select
        if ($user->hasDomainService()) {
            return view('client.plans.select', [
                'plans' => $user->getPlans(),
            ]);
        }

        // @website: domain registration
        return view('client.website.domain');
    }
}