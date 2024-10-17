<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    function index() {
        $members = Member::paginate(20);
        return view('member.daftarmember', [
            'title' => 'Member List',
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

    function show($id) {
        $member = Member::get()->where('id', $id)->first();

        return view('member.detail', [
            'member' => $member
        ]);
    }

    function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'gender' => 'required|string',
            'phone_number' => 'required|string',
            'address' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Failed Update Member');
        }

        $update = Member::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);

        if ($update) {
            return redirect()->back()->with('success', 'Member Updated successfully!');
        }
    }

    function destroy($id) {
        $delete = Member::find($id)->delete();

        if ($delete) {
            return redirect()->back()->with('success', 'Member Deleted successfully!');
        }
    }
}
