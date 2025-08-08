<?php

namespace App\Http\Controllers;

use App\Models\Documentary;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentaryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'made_by' => 'required|string|max:255',
            'youtube_link' => 'required|url'
        ]);

        $documentary = Documentary::create([
            'title' => $request->title,
            'made_by' => $request->made_by,
            'youtube_link' => $request->youtube_link,
            'user_id' => Auth::id(),
            'status' => 'approved',
            'approved_at' => now()
        ]);

        // Log the activity
        Activity::create([
            'user_id' => Auth::id(),
            'type' => 'documentary_submitted',
            'description' => 'Submitted a new revolutionary documentary',
            'metadata' => [
                'documentary_title' => $request->title,
                'made_by' => $request->made_by
            ]
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Documentary submitted successfully!',
            'documentary' => $documentary
        ]);
    }

    public function index()
    {
        // Show all approved documentaries
        $documentaries = Documentary::with('user')
            ->where('status', 'approved')
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json([
            'documentaries' => $documentaries
        ]);
    }
}
