<?php
  
namespace App\Http\Controllers\Client;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\User;
  
class DomainController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('client.domains.index', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Check domain is available or not for purchasing.
     *
     * @return \Illuminate\View\View
     */
    public function check(Request $request)
    {
        // check domain valid
        $validator = Validator::make($request->all(), [
            'domain' => 'required|regex:/^(?!:\/\/)(?=.{1,255}$)((.{1,63}\.){1,127}(?![0-9]*$)[a-z0-9-]+\.?)$/i',
        ]);
        
        // check domain available
        if ($request->type == 'new') {
            $validator->after(function ($validator) {
                if (false) {
                    $validator->errors()->add(
                        'domain', 'Tên miền đã được đăng ký sử dụng. Vui lòng chọn tên miền khác'
                    );
                }
            });
        }

        // return if domain not available
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'error' => $validator->errors(),
            ]);
        }

        return response()->json([
            'status' => 'available',
        ]);
    }

    /**
     * Confirm domain and process.
     *
     * @return \Illuminate\View\View
     */
    public function confirm(Request $request)
    {
        $user = $request->user();
        $domain = $request->domain;

        if ($request->isMethod('post')) {
            // add domain service
            $user->addDomainService([
                'domain' => $request->domain,
                'type' => $request->type,
            ]);

            // return to wizard
            return redirect()->action('Client\HomeController@wizard');
        }

        return view('client.domains.confirm_' . $request->type, [
            'domain' => $domain,
            'price' => $user->getDomainPrice($domain),
            'type' => $request->type,
        ]);
    }
}