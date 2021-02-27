<?php
  
namespace App\Http\Controllers\Client;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\User;
  
class PlanController extends Controller
{
    /**
     * add plan to user.
     *
     * @return \Illuminate\View\View
     */
    public function addPlan(Request $request)
    {
        $user = $request->user();

        $user->addPlanService([
            'plan' => $request->plan,
        ]);

        $request->session()->flash('success', 'Bạn đã đăng ký gói dịch vụ thành công. Hãy tiếp tục bước tiếp theo để hoàn tất.');

        return redirect()->action('Client\HomeController@wizard');
    }
}