<?php

namespace Wave\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Query\Builder;
use Wave\Announcement;

class CommunicationController extends Controller
{
    public function index()
    {
        $announcements = Announcement::paginate(10);
        return view('theme::communications.index', compact('announcements'));
    }
}
