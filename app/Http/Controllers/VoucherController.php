<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function store(Request $request){
        Voucher::create($request->all());
        return redirect()->back()->with('success', 'Voucher Generated Successfully');
    }
}
