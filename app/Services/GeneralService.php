<?php

namespace App\Services;

use App\Models\Detail;
use App\Models\Program;
use App\Models\Userrate;
use Carbon\Carbon;

class GeneralService
{

    public function Get_By_Type($type)
    {
        $details = Detail::where('type_listing', $type)->limit(20)->get();

        $programs = $details->map(function ($detail) {
            return $detail->program; // assuming you have a 'program' relationship defined in the Detail model
        });

        return $programs;
    }

    public function Get_By_id($id)
    {
        $programs = Program::find($id);

        return $programs->details();
    }

    public function Get_New_Listing()
    {
        $programs = Program::orderBy('created_at', 'desc')->limit(7)->get();
        return $programs;
    }

    public function Get_Last_Vote()
    {
        $userrate = Userrate::orderBy('created_at', 'desc')->limit(7)->get();
        $programs = $userrate->map(function ($userrate) {
            return $userrate->program; // assuming you have a 'program' relationship defined in the Detail model
        });

        return $programs;
    }

    public function Get_coloum($crypto)
    {
        switch ($crypto) {
            case 'PerfectMoney':
                $coloum = 'perfect_money';
                break;
            case 'Payeer':
                $coloum = 'payeer';
                break;
            case 'Epaycore':
                $coloum = 'epaycore';
                break;
            case 'Advcash':
                $coloum = 'advcash';
                break;
            case 'Bitcoin':
                $coloum = 'bitcoin';
                break;
            case 'OkPay':
                $coloum = 'okpay';
                break;
            case 'MasterCard':
                $coloum = 'mastercard';
                break;
            case 'SolidTrustPay':
                $coloum = 'solidtrustpay';
                break;
            case 'WebMoney':
                $coloum = 'webmoney';
                break;
            case 'Paypal':
                $coloum = 'paypal';
                break;
            case 'YandexMoney':
                $coloum = 'yandex';
                break;
            case 'NIXmoney':
                $coloum = 'nxmoney';
                break;
            case 'Bitcoin%20Cash':
                $coloum = 'bitcoin_cash';
                break;
            case 'LiteCoin':
                $coloum = 'litecoin';
                break;
            case 'Ethereum':
                $coloum = 'ethereum';
                break;
            case 'Dash':
                $coloum = 'dash';
                break;
            case 'Dogecoin':
                $coloum = 'dogecoin';
                break;
            case 'USDT_BEP20':
                $coloum = 'usdt_bep20';
                break;
            case 'USDT_TRC20':
                $coloum = 'usdt_trc20';
                break;
            case 'Tron':
                $coloum = 'tron';
                break;
            case 'Ripple':
                $coloum = 'ripple';
                break;
            case 'BNB':
                $coloum = 'bnb';
                break;
            case 'Stellar':
                $coloum = 'stellar';
                break;
            case 'bertycash':
                $coloum = 'bertycash';
                break;
            default:
                $coloum = 'bertycash';
                break;
        }
        return $coloum;
    }


    public function Filter_By_Crypto($type, $crypto)
    {

        $coloum = $this->Get_coloum($crypto);
        $details = Detail::where('type_listing', $type)->Where($coloum, 1)->limit(5)->get();

        $programs = $details->map(function ($detail) {
            return $detail->program; // assuming you have a 'program' relationship defined in the Detail model
        });

        return $programs;
    }



    public function Get_Last_Payout()
    {
        // Fetch 10 'Paying' programs
        $programs = Program::where('status', 'Paying')->limit(10)->get();

        // Define some fake payout values
        $payouts = ['1.00', '2.00', '3.00', '5.00', '2.45', '3.50', '7.00', '5.25'];

        // Get the latest 5 dynamic dates (from current date, going back 5 days)
        $dates = [];
        for ($i = 0; $i < 5; $i++) {
            $dates[] = Carbon::now()->subDays($i)->format('M jS, Y');
        }

        // Prepare the output array
        $output = [];
        $remainingPrograms = count($programs);

        // Randomize how many programs per date
        foreach ($dates as $date) {
            // Add the date header
            $output[] = [
                'type' => 'date',
                'value' => $date
            ];

            // Determine how many times we will use the same programs under each date
            $repeats = rand(2, 4); // Randomly repeat programs 2-4 times for variety

            // Assign programs to the current date with repeats
            for ($i = 0; $i < $repeats; $i++) {
                // Get a random program (allowing for repetition)
                $program = $programs->random();

                // Assign a random payout to the program
                $program->payout = $payouts[array_rand($payouts)];

                // Add the program with the random payout to the output
                $output[] = [
                    'type' => 'payout',
                    'amount' => $program->payout,
                    'name' => $program->name,
                    'link' => route('detail', $program->id)
                ];
            }

            // Stop if there are no more programs left to repeat
            if ($remainingPrograms <= 0) {
                break;
            }
        }

        return $output;
    }

    public function Get_Top_Profit()
    {
        $details = Detail::orderBy('payout_ratio', 'desc')->limit(7)->get();
        return $details;
    }



    public function Get_Day()
    {
        // Fetch the top 7 programs
        $programs = Program::limit(7)->get();

        // Iterate over each program and calculate the number of real days (full 24-hour periods)
        foreach ($programs as $program) {
            // Calculate the difference in full 24-hour days between now and created_at
            $days_diff = Carbon::now()->diffInRealDays(Carbon::parse($program->created_at));

            // If it's less than 1 full day, set it to "1" to represent "1 day"
            $program->days_since_creation = $days_diff > 0 ? $days_diff : 1;
        }

        return $programs;
    }

    public function Get_Last_Scam()
    {
        $programs = Program::Where('status', '!=', 'Paying')->limit(10)->get();
        return $programs;
    }


    public function Filter_By_Category($category)
    {

        $timeLimit = now()->subDays(15);

        $programs = collect();

        $details = Detail::where('type_listing', $category)
            ->where('created_at', '>=', $timeLimit)
            ->orderBy('id', 'desc')
            ->limit(10)
            ->get();



        foreach ($details as $detail) {
            $programs = $programs->merge($detail->program()->where('status', 'Paying')->orderBy('id', 'desc')->get());
        }

        return $programs;
    }
}
