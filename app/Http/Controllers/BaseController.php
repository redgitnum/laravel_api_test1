<?php

namespace App\Http\Controllers;

use App\Events\NewData;
use App\Models\Person;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        $people = Person::all();
        return response()->json($people, 200);
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
        event(new NewData);
        return response('Person Saved', 201);
    }

    public function delete(Request $request)
    {
        Person::find($request->id)->delete();
        event(new NewData);
        return response('Person Deleted', 200);
    }

    public function check()
    {
        event(new NewData);
        return response('check data', 200);
    }
}
