<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserEntry;

class UserEntryController extends Controller
{
    function index()
    {
        $all = UserEntry::all();
        dd($all); //引数で指定したデータをdumpして終了するデバック用の関数

        // $entry = UserEntry::first();
        // dump($entry);
    }

    function detail($id) {
        $item = UserEntry::find($id);
        return view('user_entry_detail', ['item' => $item]);
    }
}
