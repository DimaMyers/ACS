<?php
namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::query()->orderBy('date', 'desc')->get();
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

        Person::create($validated);

        return redirect()->route('person.index');
    }
    public function destroy(Request $request)
    {
        $request->validate([
            'pass_id' => 'required|integer|exists:people,id'
        ]);

        $person = Person::findOrFail($request->pass_id);
        $person->delete();

        return redirect()->route('person.index');
    }
}
