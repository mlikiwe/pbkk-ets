<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

use function Laravel\Prompts\alert;

class BorrowController extends Controller
{
    function index() {
        return view('borrow.peminjamanbuku', [
            'title' => 'Book Loan List',
            'borrows' => Borrow::with(['member', 'book'])->paginate(20),
            'members' => Member::all(),
            'books' => Book::all()
        ]);
    }

    function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'member_id' => 'required|integer',
            'book_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            alert('gagal');
            // return redirect()->back()->with('error', 'Failed Register Member');
        }

        $selectedBook = Book::find($request->book_id);
        // return $selectedBook;

        if ($selectedBook->stock <= 0) {
            return view('borrow.create')->with([
                'error' => 'Stock is not available',
            ]);
        }
        
        $save = Borrow::create([
            'member_id' => $request->member_id,
            'book_id' => $request->book_id,
            'borrow_date' => Carbon::now(),
            'due_date' => Carbon::now()->addDays(7),
            'status' => 'Borrowed'
        ]);
        
        if ($save) {
            $selectedBook->stock -= 1;
            $selectedBook->save();

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
            // 'return_date' => 'required|date',// Validate the return date
            // 'status' => 'required|string'
        ]);

        if ($validator->fails()) {
            alert('gagal');
            // return redirect()->back()->with('error', 'Failed Update Member');
        }

        $update = Borrow::findOrFail($id)->update([
            'member_id' => $request->member_id,
            'book_id' => $request->book_id,
            // 'return_date' => $request->return_date,
            // 'status' => $request->status
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

    function returnBook($id) {
        $borrow = Borrow::find($id);

        if ($borrow->status == 'Borrowed') {
            $borrow->return_date = Carbon::now();
            $borrow->status = 'Returned';
            $borrow->book->stock += 1;
            $borrow->save();

            return redirect()->back()->with('success', 'Book Returned');
        }

        return redirect()->back()->with('error', 'Failed returning book');
    }
}
