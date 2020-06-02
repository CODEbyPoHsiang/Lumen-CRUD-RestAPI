<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class Api extends Controller
{

    public function index()
    {
        $member = Member::all();
        return response()->json($member);
    }

    public function show($id)
    {
        $member = Member::find($id);
        return response()->json($member);
    }

    public function store(Request $request)
    {
        $author = Member::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = Member::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Member::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}