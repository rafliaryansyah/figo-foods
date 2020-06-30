<?php

namespace App\Http\Controllers;

// use App\Http\Requests\WelcomeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Welcome;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $welcomes = Welcome::all();
        return view('pages.admin.welcome.index', compact('welcomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.welcome.create');
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

        DB::table('welcomes')->insert([
                'image' => $request->file('image')->store(
                    'assets/gallery', 'public'
                ),
                'title' => $request->title,
                'description' => $request->description
        ]);

        return redirect()->route('welcome.index');

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
        $welcome = Welcome::findOrFail($id);
        return view('pages.admin.welcome.edit', compact('welcome'));
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
            'image' => 'required',
            'title' => 'required|max:128',
            'description' => 'required|max:512'
        ]);

        DB::table('welcomes')->where('id', $id)->update([
                'image' => $request->file('image')->store(
                    'assets/gallery', 'public'
                ),
                'title' => $request->title,
                'description' => $request->description
        ]);

        return redirect()->route('welcome.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('welcomes')->where('id', $id)->delete();

        return redirect()->route('welcome.index');
    }
}
