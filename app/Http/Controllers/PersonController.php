<?php
namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::orderBy('date', 'desc')->get();
        return view('acs', compact('people'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'go_date' => 'required|date'
        ]);

        Person::create([
            'last_name' => $validated['last_name'],
            'first_name' => $validated['first_name'],
            'middle_name' => $validated['middle_name'],
            'date' => $validated['go_date']
        ]);

        return redirect('/acs');
    }
    public function destroy(Request $request)
    {
        $request->validate([
            'pass_id' => 'required|integer|exists:people,id'
        ]);

        $person = Person::findOrFail($request->pass_id);
        $person->delete();

        return redirect('/acs');
    }
}
