<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Codeimage;
use App\Models\Detail;
use App\Models\Domain;
use App\Models\Program;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function admin_program_get()
    {
        return view('Backend.program');
    }
    public function admin_program_get_add(Request $request)
    {

        try {
            $validatedData = $request->validate([
                'Name' => 'required|string|max:255',
                'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'link' => 'required|string',
                'type_listing' => 'required|string',
                'Status' => 'required|string',
                'Payout_Ratio' => 'required|numeric',
                'Ref_Back' => 'required|numeric',
                'Our_Rate' => 'required|integer',
                'Our_Investment' => 'required|numeric',
                'Min' => 'required|numeric',
                'Max' => 'required|numeric',
                'Referral' => 'required|numeric',
                'Withdraw_Type' => 'required|string',
                'Plans_Discription' => 'nullable|string',
                'Payeer' => 'nullable|boolean',
                'Perfect_Money' => 'nullable|boolean',
                'Bitcoin' => 'nullable|boolean',
            ]);

            // Handle file upload
            if ($request->hasFile('Image')) {
                $imageName = time() . '.' . $request->Image->extension();
                $request->Image->move(public_path('assets_backend/img/program'), $imageName);
                $validatedData['image'] = $imageName;
            }



            // Store the program
            $Program = Program::create([
                'name' => $request->input('Name'),
                'status' => $request->input('Status'),
            ]);

            Detail::create([
                'program_id' => $Program->id,
                'link' => $request->link,
                'image' => $validatedData['image'] ?? null,
                'type_listing' => $request->input('type_listing'),
                'payout_ratio' => $request->input('Payout_Ratio'),
                'ref_back' => $request->input('Ref_Back'),
                'our_rate' => $request->input('Our_Rate'),
                'our_investment' => $request->input('Our_Investment'),
                'min' => $request->input('Min'),
                'max' => $request->input('Max'),
                'referral' => $request->input('Referral'),
                'withdraw_type' => $request->input('Withdraw_Type'),
                'plans_description' => $request->input('Plans_Discription'),
                'payeer' => $request->has('Payeer'),
                'perfect_money' => $request->has('Perfect_Money'),
                'bitcoin' => $request->has('Bitcoin'),
                'litecoin' => $request->has('Litecoin'),
                'bitcoin_cash' => $request->has('Bitcoin_Cash'),
                'ethereum' => $request->has('Ethereum'),
                'usdt_bep20' => $request->has('USDT_BEP20'),
                'usdt_trc20' => $request->has('USDT_TRC20'),
                'epaycore' => $request->has('Epaycore'),
                'tron' => $request->has('Tron'),
                'bnb' => $request->has('BNB'),
                'advcash' => $request->has('Advcash'),
                'okpay' => $request->has('Okpay'),
                'mastercard' => $request->has('Mastercard'),
                'solidtrustpay' => $request->has('SolidTrustPay'),
                'webmoney' => $request->has('WebMoney'),
                'paypal' => $request->has('Paypal'),
                'yandex' => $request->has('Yandex'),
                'nxmoney' => $request->has('NXMoney'),
                'dash' => $request->has('Dash'),
                'dogecoin' => $request->has('Dogcoin'),
                'ripple' => $request->has('Ripple'),
                'stellar' => $request->has('Stellar'),
                'bertycash' => $request->has('Bertycash'),
                'sslsecurtiy' => $request->has('SSLSecurity'),
                'ddos' => $request->has('DDos'),
            ]);


            Domain::create([
                'program_id' => $Program->id,
                'domain_name' => $request->Domain_Name,
                'register_id' => $request->register_id,
                'server' => $request->register_server,
                'updated' => Carbon::parse($request->updated)->format('Y-m-d H:i:s'),
                'created' => Carbon::parse($request->created)->format('Y-m-d H:i:s'),
                'expired' => Carbon::parse($request->expired)->format('Y-m-d H:i:s'),
                'registrar_enom' => $request->registrar_enom,
                'registrar_iana_id' => $request->registrar_iana_id,
                'registrar_email' => $request->registrar_email,
                'registrar_phone' => $request->registrar_phone,
                'domain_status' => $request->domain_status,
                'name_server' => $request->name_server,
                'dnssec' => $request->dnssec,
            ]);

            // Define the image fields you want to check
            $imageFields = ['image1', 'image2', 'image3', 'image4'];

            foreach ($imageFields as $key => $field) {
                if ($request->hasFile($field)) {
                    // Create a unique image name for each file
                    $imageName = time() . $key . '.' . $request->$field->extension();
                    // Move the uploaded file to the desired directory
                    $request->$field->move(public_path('image/lid'), $imageName);
                    // Save the file name to the validated data array with dynamic keys
                    $validatedData[$field] = $imageName; // 'image1', 'image2', etc.
                }
            }


            Codeimage::create([
                'program_id' => $Program->id,
                'image1' => $validatedData['image1'] ?? null,
                'code1' => '<a href="https://trading-hyips.pro/detail/' . $Program->id . '"><img src="https://trading-hyips.pro/image/lid/' . ($validatedData['image1'] ?? '') . '" border="0"></a>',
                'image2' => $validatedData['image2'] ?? null,
                'code2' => '<a href="https://trading-hyips.pro/detail/' . $Program->id . '"><img src="https://trading-hyips.pro/image/lid/' . ($validatedData['image2'] ?? '') . '" border="0"></a>',
                'image3' => $validatedData['image3'] ?? null,
                'code3' => '<a href="https://trading-hyips.pro/detail/' . $Program->id . '"><img src="https://trading-hyips.pro/image/lid/' . ($validatedData['image3'] ?? '') . '" border="0"></a>',
                'image4' => $validatedData['image4'] ?? null,
                'code4' => '<a href="https://trading-hyips.pro/detail/' . $Program->id . '"><img src="https://trading-hyips.pro/image/lid/' . ($validatedData['image4'] ?? '') . '" border="0"></a>',
            ]);




            return redirect()->route('admin_program_get')->with('success', 'Program added successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Handle validation errors
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Handle general exceptions
            return redirect()->back()->with('error', 'Something went wrong. Please try again.')->withInput();
        }

        // Redirect back with success message
    }
}
