<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voteCount1 = Vote::where('candidate_id', 1)->count();
        $voteCount2 = Vote::where('candidate_id', 2)->count();
        $voteCount3 = Vote::where('candidate_id', 3)->count();

        $userCount0 = User::where('already_vote', 0)->count();
        $userCount1 = User::where('already_vote', 1)->count();

        $totalUsers = User::count();

        return view('admin', [
            'countCandidate1' => $voteCount1,
            'countCandidate2' => $voteCount2,
            'countCandidate3' => $voteCount3,
            'userCount0' => $userCount0,
            'userCount1' => $userCount1,
            'totalUsers' => $totalUsers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showUsers()
    {
        $users = User::where(function ($query) {
                $query->where('fullname', '!=', 'admin')
                      ->orWhere('username', '!=', 'admin');
            })
            ->get();
    
        return view('table', [
            'users' => $users,
        ]);
    }
    
    
    
    
    
    
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
