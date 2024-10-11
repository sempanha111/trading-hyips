<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\Userrate;
use Illuminate\Http\Request;
use App\Services\GeneralService;

class IndexController extends Controller
{
    protected $generalService;
    public function __construct(GeneralService $generalService)
    {
        $this->generalService = $generalService;
    }


    public function index()
    {
        $superVipPrograms = $this->generalService->Get_By_Type('Super Vip');
        $exclusivePrograms = $this->generalService->Get_By_Type('Exclusive');
        $PremiumPrograms = $this->generalService->Get_By_Type('Premium');
        $NormalPrograms = $this->generalService->Get_By_Type('Normal');
        $TrialPrograms = $this->generalService->Get_By_Type('Trial');




        return view('Frontend.index', compact('superVipPrograms', 'exclusivePrograms', 'PremiumPrograms', 'NormalPrograms', 'TrialPrograms'));
    }


    public function news(){
        return view('Frontend.news');
    }
    public function partners(){
        return view('Frontend.directory');
    }
    public function articles(){
        return view('Frontend.articles');
    }
    public function support(){
        return view('Frontend.support');
    }


    public function add_vote($id)
    {
        // Retrieve the program along with its details
        $program = Program::with('details')->find($id);

        if (!$program) {
            return redirect()->back()->with('error', 'Program not found.');
        }

        $details = $program->details; // This is a collection of details

        // If you want to work with a specific detail, you might want to find it
        $detail = $details->first(); // Get the first detail as an example

        return view('Frontend.vote_now', compact('program', 'detail', 'id'));
    }


    public function add_vote_send(Request $request, $id)
    {

        try {
            $request->validate([
                'comment' => 'required|min:7',
                'email' => 'required|email'
            ]);
            Userrate::create([
                'program_id' => $id,
                'email' => $request->email,
                'comment' => $request->comment,
                'rate' => $request->vote
            ]);



            return redirect()->back()->with('success', 'Thank you for your rating!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Handle validation errors
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Handle general exceptions
            return redirect()->back()->with('error', 'Something went wrong. Please try again.')->withInput();
        }
    }




    public function detail($id)
    {
        $program = Program::with('details')->find($id);

        if (!$program) {
            return redirect()->back()->with('error', 'Program not found.');
        }

        $details = $program->details;

        $detail = $details->first();

        return view('Frontend.detail', compact('program', 'detail', 'id'));
    }


    public function traffic($id)
    {
        $program = Program::with('details')->find($id);

        if (!$program) {
            return redirect()->back()->with('error', 'Program not found.');
        }

        // Now you can access the details directly
        $details = $program->details; // This is a collection of details

        // If you want to work with a specific detail, you might want to find it
        $detail = $details->first(); // Get the first detail as an example

        return view('Frontend.traffic', compact('program', 'detail', 'id'));
    }


    public function whois($id)
    {
        $program = Program::with('details')->find($id);

        if (!$program) {
            return redirect()->back()->with('error', 'Program not found.');
        }

        // Now you can access the details directly
        $details = $program->details; // This is a collection of details

        // If you want to work with a specific detail, you might want to find it
        $detail = $details->first(); // Get the first detail as an example

        return view('Frontend.whois', compact('program', 'detail', 'id'));
    }


    public function scam($id)
    {
        $program = Program::with('details')->find($id);

        if (!$program) {
            return redirect()->back()->with('error', 'Program not found.');
        }

        // Now you can access the details directly
        $details = $program->details; // This is a collection of details

        // If you want to work with a specific detail, you might want to find it
        $detail = $details->first(); // Get the first detail as an example

        return view('Frontend.scam', compact('program', 'detail', 'id'));
    }


    public function code($id)
    {
        $program = Program::with('details')->find($id);

        if (!$program) {
            return redirect()->back()->with('error', 'Program not found.');
        }

        // Now you can access the details directly
        $details = $program->details; // This is a collection of details

        // If you want to work with a specific detail, you might want to find it
        $detail = $details->first(); // Get the first detail as an example

        return view('Frontend.code', compact('program', 'detail', 'id'));
    }


    public function pfilter($crypto)
    {
        // dd($crypto);
        $superVipPrograms = $this->generalService->Filter_By_Crypto('Super Vip', $crypto);
        $exclusivePrograms = $this->generalService->Filter_By_Crypto('Exclusive', $crypto);
        $PremiumPrograms = $this->generalService->Filter_By_Crypto('Premium', $crypto);
        $NormalPrograms = $this->generalService->Filter_By_Crypto('Normal', $crypto);
        $TrialPrograms = $this->generalService->Filter_By_Crypto('Trial', $crypto);

        return view('Frontend.filter', compact('superVipPrograms', 'exclusivePrograms', 'PremiumPrograms', 'NormalPrograms', 'TrialPrograms'));
    }
    public function category($category)
    {
        // dd($category);
        if ($category === 'New') {

            $superVipPrograms = $this->generalService->Filter_By_Category('Super Vip');
            $exclusivePrograms = $this->generalService->Filter_By_Category('Exclusive');
            $PremiumPrograms = $this->generalService->Filter_By_Category('Premium');
            $NormalPrograms = $this->generalService->Filter_By_Category('Normal');
            $TrialPrograms = $this->generalService->Filter_By_Category('Trial');



        } elseif ($category === 'Super VIP') {

            $superVipPrograms = $this->generalService->Filter_By_Category('Super Vip');
            $exclusivePrograms = collect();
            $PremiumPrograms = collect();
            $NormalPrograms = collect();
            $TrialPrograms = collect();
        }elseif ($category === 'Exclusive') {

            $superVipPrograms = collect();
            $exclusivePrograms = $this->generalService->Filter_By_Category('Exclusive');
            $PremiumPrograms = collect();
            $NormalPrograms = collect();
            $TrialPrograms = collect();
        }elseif ($category === 'Premium') {

            $superVipPrograms = collect();
            $exclusivePrograms = collect();
            $PremiumPrograms = $this->generalService->Filter_By_Category('Premium');
            $NormalPrograms = collect();
            $TrialPrograms = collect();
        }elseif ($category === 'Normal') {

            $superVipPrograms = collect();
            $exclusivePrograms = collect();
            $PremiumPrograms = collect();
            $NormalPrograms = $this->generalService->Filter_By_Category('Normal');
            $TrialPrograms = collect();
        }elseif ($category === 'Trial') {

            $superVipPrograms = collect();
            $exclusivePrograms = collect();
            $PremiumPrograms = collect();
            $NormalPrograms = collect();
            $TrialPrograms = $this->generalService->Filter_By_Category('Trial');
        }

        return view('Frontend.filter_category', compact('superVipPrograms', 'exclusivePrograms', 'PremiumPrograms', 'NormalPrograms', 'TrialPrograms'));
    }
}
