<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pub;
class PubController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      //$this->middleware('role:user');
  }
    public function index()
    {
        $pubs = Pub::all();

        return view('user.pubs.index')->with([
          'pubs' => $pubs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $pub = Pub::findOrFail($id);

        return view('user.pubs.show')->with([
          'pub' => $pub
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
