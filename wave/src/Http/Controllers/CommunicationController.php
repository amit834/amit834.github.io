<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Query\Builder;
use Wave\Announcement;
use Wave\Connection;

class CommunicationController extends Controller
{
    public function index()
    {
        $announcements = Announcement::paginate(10);
        return view('theme::communications.index', compact('announcements'));
    }
    
    //function for update or create communications
    public function create_update_connections(Request $request){
        $validatedData = $request->validate([
            'app_id' => 'required|string',
            'dev_id' => 'required|string',
            'client_secret' => 'required|string',
            'api_uri' => 'required|string',
            'api_auth_uri' => 'required|string',
            'status' => 'required|in:enable,disable',
        ]);
        //update or create data
        $records = Connection::updateOrCreate(
            [
               'type'   => $request->type,
            ],
            [
               'app_id' => $request->app_id,
               'dev_id' => $request->dev_id,
               'client_secret' => $request->client_secret,
               'api_uri' => $request->api_uri,
               'api_auth_uri'  => $request->api_auth_uri,
               'is_active' => $request->status,
               'type' => $request->type,
            ],
        );
        //check it is created or updated or not
        if ($records) {
            return redirect()->back()->with('success', 'Record saved successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to save record.');
        }
    }
}