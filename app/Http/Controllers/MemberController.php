<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    function index() {
        $members = Member::all();
        return view('daftarmember', [
            'title' => 'Daftar Member',
            'members' => $members,
        ]);
    }

    function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'gender' => 'required|string',
            'phone_number' => 'required|string',
            'address' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Failed Register Member');
            // view('daftarmember', [
            //     'status' => 'error',
            //     'message' => 'Gagal menambahkan data'
            // ]);
        }

        $save = Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);

        if ($save) {
            return redirect()->back()->with('success', 'Member registered successfully!');
        }
    }
}
