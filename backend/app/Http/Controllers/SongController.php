<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SongController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'singer' => 'required|string|max:255',
            'youtube_link' => 'required|url'
        ]);

        $song = Song::create([
            'title' => $request->title,
            'singer' => $request->singer,
            'youtube_link' => $request->youtube_link,
            'user_id' => Auth::id(),
            'status' => 'approved',
            'approved_at' => now()
        ]);

        // Log the activity
        Activity::create([
            'user_id' => Auth::id(),
            'type' => 'song_submitted',
            'description' => 'Submitted a new revolutionary song',
            'metadata' => [
                'song_title' => $request->title,
                'singer' => $request->singer
            ]
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Song submitted successfully!',
            'song' => $song
        ]);
    }

    public function index()
    {
        // Show all approved songs
        $songs = Song::with('user')
            ->where('status', 'approved')
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json([
            'songs' => $songs
        ]);
    }
}
