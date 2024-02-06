<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\ListItem;

class TodoListController extends Controller
{
    public function index()
    {
        return view('welcome', ['listItems' => ListItem::where('is_complete', 0)->get()]);
    }
    public function markComplete($id)
    {

        log::info($id);
        $listItem = ListItem::find($id);
        log::info($listItem);
        $listItem->is_complete = 1;
        $listItem->save();
        return redirect('/');
    }
    public function saveItem(Request $request)
    {
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = 0;
        $newListItem->save();

        return redirect('/');
    }
}
