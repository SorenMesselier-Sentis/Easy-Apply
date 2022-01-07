<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidateController extends Controller
{

    public function show($id){
        $candidate = Candidate::findOrFail($id);
        return view('candidates.show', compact('candidate'));
    }

    public function create()
    {
        return view("candidates.create");
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'birth_date' =>['nullable', 'date'],
            'phone_number' =>['nullable', 'numeric'],
            'pofile_picture' =>['nullable', 'max:255'],
            'cv' =>['nullable'],
            'website' =>['nullable', 'max:255'],
            'instagram' =>['nullable', 'max:255'],
            'facebook' =>['nullable', 'max:255'],
            'linkedin' =>['nullable', 'max:255'],

            'user_id' =>['required', 'unique:Candidates'],
            'status_id' => ['nullable'],
        ]);
        Candidate::create($attributes);
        return redirect("/");
    }

    public function destroy($id){
        Candidate::find($id)->delete();
        return redirect("/");
    }
}
