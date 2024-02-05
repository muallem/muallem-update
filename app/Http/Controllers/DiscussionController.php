<?php

namespace App\Http\Controllers;

use App\Models\Thesis;
use App\Models\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DiscussionController extends Controller
{
    public function print(Request $request){

        $id = Crypt::decrypt($request->id);
        $data = Thesis::select('id', 'title', 'group', 'student_id')->with('wp_users', 'discussions')->where('id', $id)->first();
        return view('print', ['data' => $data]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('discussion.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Discussion $discussion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Discussion $discussion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Discussion $discussion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discussion $discussion)
    {
        //
    }
}
