<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function editShipping($type)
    {
        if ($type === 'free')
            $shippingMethod = Setting::where('key', 'free_shipping_label')->first();
        elseif ($type === 'local')
            $shippingMethod = Setting::where('key', 'local_shipping_label')->first();
        elseif ($type === 'outer')
            $shippingMethod = Setting::where('key', 'outer_shipping_label')->first();
        else {
            abort(404);
        }


        return view('admin.settings.shipping.edit', get_defined_vars());
    }

    public function updateShipping(Request $request, $id)
    {
        // dd($request);
        try {

            $request->validate([
                'method' => 'required|string|max:255',
                'method_value' => 'required|numeric',
            ]);
            DB::beginTransaction();

                $shippingMethod = Setting::findOrFail($id);
                $shippingMethod->update([                 
                    'plan_value' => $request->method,
                    'value' => $request->method_value,
                ]);
            DB::commit();
            return redirect()->back()->with('success', 'تم تحديث طريقة الشحن بنجاح');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return redirect()->back()->with('error', 'لم يتم  تحديث طريقة الشحن ');
        }
       


    }
}
