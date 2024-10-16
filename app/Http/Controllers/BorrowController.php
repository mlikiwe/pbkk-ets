<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\alert;

class BorrowController extends Controller
{
    function index() {
        return view('borrow.peminjamanbuku', [
            'title' => 'Book Loan List',
            'borrows' => Borrow::with(['member', 'book'])->get(),
            'members' => Member::all(),
            'books' => Book::all()
        ]);
    }

    function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'members' => 'required|string',
            'books' => 'required|string',
        ]);

        if ($validator->fails()) {
            alert('gagal');
            // return redirect()->back()->with('error', 'Failed Register Member');
        }

        $save = Borrow::create([
            'member_id' => $request->member,
            'book_id' => $request->book,
            'borrow_date' => Carbon::now(),
            'due_date' => Carbon::now()->addDays(7),
            'status' => 'Borrowed'
        ]);

        if ($save) {
            return redirect()->back()->with('success', 'Borrow Data registered successfully!');
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
            'member_id' => 'required|exists:members,id', // Validate that the member exists
            'book_id' => 'required|exists:books,id', // Validate that the book exists
            'return_date' => 'required|date',// Validate the return date
            'status' => 'required|string'
        ]);

        if ($validator->fails()) {
            alert('gagal');
            // return redirect()->back()->with('error', 'Failed Update Member');
        }

        $update = Borrow::findOrFail($id)->update([
            'member_id' => $request->member_id,
            'book_id' => $request->book_id,
            'return_date' => $request->return_date,
            'status' => $request->status
        ]);

        if ($update) {
            return redirect()->back()->with('success', 'Borrow Data updated successfully!');
        }

        // return $request->all();
    }

    function destroy($id) {
        $delete = Borrow::find($id)->delete();

        if ($delete) {
            return redirect()->back()->with('success', 'Member Deleted successfully!');
        }
    }
}
