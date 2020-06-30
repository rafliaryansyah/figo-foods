<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $histories = History::all();
        return view('pages.admin.history.index', compact('histories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.history.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:128',
            'description' => 'required|max:512'
        ]);

        DB::table('histories')->insert([
            'image' => $request->file('image')->store(
                'assets/gallery', 'public'
            ),
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('history.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $history = History::findOrFail($id);
        return view('pages.admin.history.edit', compact('history'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required|max:128',
            'description' => 'required|max:512'
        ]);

        DB::table('histories')->where('id', $id)->update([
            'image' => $request->file('image')->store(
                'assets/gallery', 'public'
            ),
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('history.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
