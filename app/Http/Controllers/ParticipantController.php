<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function index()
    {
        $participants = Participant::all();
        return view('participants', compact('participants'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nickname' => 'required|string',
            'age' => 'required|integer|min:1',
            'breed' => 'required|string',
            'color' => 'required|string',
            'owner' => 'required|string'
        ]);



        Participant::create([
            'nickname' => $validated['nickname'],
            'age' => $validated['age'],
            'breed' => $validated['breed'],
            'color' => $validated['color'],
            'owner' => $validated['owner']
        ]);

        return redirect()->back()->with('success', 'Участник заявлен');
    }
}
