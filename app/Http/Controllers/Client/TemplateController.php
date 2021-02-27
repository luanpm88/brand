<?php
  
namespace App\Http\Controllers\Client;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\User;
  
class TemplateController extends Controller
{
    /**
     * add plan to user.
     *
     * @return \Illuminate\View\View
     */
    public function addTemplate(Request $request)
    {
        $user = $request->user();

        $user->addTemplateService([
            'template' => $request->template,
        ]);

        $request->session()->flash('success', 'Bạn đã đăng ký giao diện thành công. Hãy tiếp tục bước tiếp theo để hoàn tất.');

        return redirect()->action('Client\HomeController@wizard');
    }
}