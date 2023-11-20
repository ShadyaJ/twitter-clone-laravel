<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;

class IdeaController extends Controller
{
    public function store()
    {
        request()->validate([
            'content' => 'required|min:3|max:240'
        ]);

        $idea = Idea::create([
            'content' => request()->get('content', ''),
        ]);
    
        return redirect()->route('dashboard')->with('success', 'Idea created successfully!');
    }
}
