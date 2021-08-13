<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index() {

        $guest = Guest::select('id', 'created_at')
            ->get()
            ->groupBy(function($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });

            $guestcount = [];
            $guestArr = [];

            foreach ($guest as $key => $value) {
                $guestcount[(int)$key] = count($value);
            }

            for($i = 1; $i <= 12; $i++){
                if(!empty($guestcount[$i])){
                    array_push($guestArr, $guestcount[$i]);
                }else{
                    array_push($guestArr, 0);   
                }
            }

        return view('dashboard', [
            'guests' => Guest::latest()->get(),
            'statistic' => $guestArr
        ]);
    }

    public function create() {
        return view('guest.create', [
            'guests' => Guest::latest()->get()
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => ['required'],
            'address' => ['required', 'min:5'],
            'number_phone' => ['required', 'min:8'],
            'purpose' => ['required', 'min:8'],
        ]);

        $guest = new Guest();
        $guest->name = $request->name;
        $guest->date = date('Y-m-d');
        $guest->address = $request->address;
        $guest->number_phone = $request->number_phone;
        $guest->purpose = $request->purpose;
        $guest->save();
        
        return redirect('/')->with('success', 'Selamat Data Berhasil Ditambahkan');
    }
}
