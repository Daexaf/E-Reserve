<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function stepOne(Request $request)
    {
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addWeek();
        return view('reservations.step-one', compact('min_date', 'max_date'));
    }

    public function stepTwo(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'res_date' => ['required', 'date', new DateBetween, new TimeBetween],
            'number_telp' => ['required', 'Max:13'],
            'guest_number' => ['required'],
        ], [
            'required' => 'Data harus diisi lengkap',
            'number_telp.Max:13' => 'Nomor telepon maksimal 13'
        ]);

        $reservation = $request->all();
        $res_id = Reservation::create($reservation)->id;
        $tables = Table::where('status', TableStatus::Available)->where('guest_number', '>=', $request['guest_number'])->get();

        return view('reservations.step-two', ['res_id' => $res_id, 'tables' => $tables]);
    }

    public function thanks(Request $request, $id)
    {
        Reservation::where('id', $request['res_id'])->update(['table_id' => $request['table_id']]);
        $res_id = Reservation::find($id);
        return view('thanks', ['res_id' => $res_id]);
    }
}
