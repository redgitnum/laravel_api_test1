<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        $people = Person::all();
        return response()->json($people);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'age' => 'required'
        ]);

        Person::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'age' => $request->age,
            ]);
        return response('Person Saved', 201);
    }

    public function delete(Request $request)
    {
        // dd($request);
        return response('User Deleted', 200);
        Person::find($request->id)->delete();
    }
}
