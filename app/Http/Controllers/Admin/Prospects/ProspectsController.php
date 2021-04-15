<?php

namespace App\Http\Controllers\Admin\Prospects;

use App\Models\Prospect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Prospects\StoreProspectRequest;

class ProspectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show all of our prospects and manage them from here
        return view('admin.prospects.index', ['prospects'=> Prospect::latest()->paginate(25)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // go to prospects creation form
        return view('admin.prospects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProspectRequest $request)
    {
        $prospect = Prospect::create($request->only('name, email'));

        // post request store
        if($request->hasFile('profile-image')){
            $path = $request->profile_image->store('public/prospects/profile/images');
            $prospect->update(['profile-image'=>$path]);
        }

        return redirect()->route('admin.prospects.dashboard')->with('success', 'Sucessfully created a new prospect');
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
        //
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
        //
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
