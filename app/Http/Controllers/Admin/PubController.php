<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pub;

class PubController extends Controller
{


  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:admin');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pubs = Pub::all();

        return view('admin.pubs.index')->with([
          'pubs' => $pubs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pubs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'name' => 'required|max:191',
          'owner' => 'required|max:191',
          'times' => 'required|max:191',
          'games' => 'required|max:191',
          'discount' => 'required',
          'location' => 'required|max:191'
        ]);

        $pub = new Pub();
        $pub->name = $request->input('name');
        $pub->owner = $request->input('owner');
        $pub->times = $request->input('times');
        $pub->games = $request->input('games');
        $pub->discount = $request->input('discount');
        $pub->location = $request->input('location');

        $pub->save();

        return redirect()->route('admin.pubs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pub = Pub::findOrFail($id);

        return view('admin.pubs.show')->with([
          'pub' => $pub
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pub = Pub::findOrFail($id);

      return view('admin.pubs.edit')->with([
        'pub' => $pub
      ]);
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
      $pub = Pub::findOrFail($id);

      $request->validate([
        'name' => 'required|max:191',
        'owner' => 'required|max:191',
        'times' => 'required|max:191',
        'games' => 'required|max:191',
        'discount' => 'required',
        'location' => 'required|max:191'
      ]);

      $pub->name = $request->input('name');
      $pub->owner = $request->input('owner');
      $pub->times = $request->input('times');
      $pub->games = $request->input('games');
      $pub->discount = $request->input('discount');
      $pub->location = $request->input('location');

      $pub->save();

      return redirect()->route('admin.pubs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $pub = Pub::findOrFail($id);

      $pub->delete();

      return redirect()->route('admin.pubs.index');
    }
}
