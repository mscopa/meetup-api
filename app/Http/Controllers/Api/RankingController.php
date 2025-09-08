<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function index(Request $request)
    {
        $meetupSessionId = $request->user()->meetup_session_id;

        $companies = Company::whereHas('user', function ($query) use ($meetupSessionId) {
            $query->where('meetup_session_id', $meetupSessionId);
        })
        ->orderByDesc('score')
        ->get(['id', 'name', 'number', 'score', 'coins']);

        return response()->json(['data' => $companies]);
    }
}
