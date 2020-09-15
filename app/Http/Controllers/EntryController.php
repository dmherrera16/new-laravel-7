<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entry;
use App\Http\Requests\EntryFormRequest;

class EntryController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}

    public function create(){
    	return view('entries.create');
    }

    public function store(EntryFormRequest $request){
    	
    	$entry = new Entry();
    	$entry->title = $request->get('title');
    	$entry->content = $request->get('content');
    	$entry->user_id = auth()->id();
    	$entry->save();

    	$status = 'Your entry has been successfully saved';
    	return back()->with(compact('status'));
    }

    public function edit(Entry $entry){

    	$this->authorize('update', $entry);

    	return view('entries.edit', compact('entry'));
    }

    public function update(EntryFormRequest $request, Entry $entry){

    	$this->authorize('update', $entry);
    	
    	$entry->title = $request->get('title');
    	$entry->content = $request->get('content');
    	$entry->save();

    	$status = 'Your entry has been successfully updated';
    	return back()->with(compact('status'));
    }
}
