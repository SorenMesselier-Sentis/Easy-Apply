<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidateController extends Controller
{

    public function show($id){
        $candidate = Candidate::find($id);
        return view('candidates.show', compact('candidate'));
    }

    public function destroy($id){
        Candidate::find($id)->delete();
        return redirect("/");
    }
}
