<?php

// Namespacing.
namespace App\Http\Controllers;

// Facades.
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

// Events
use App\Events\MessageSent;

// Models.
use App\Models\Message;
use App\Models\User;
use Inani\Larapoll\Poll;

// Exports
use App\Exports\UsersExport;
use App\Exports\MessagesExport;

class ChatsController extends Controller
{
    /**
     * Show chats
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Date and time of the stream.
        $streamDate = \Carbon\Carbon::parse(env('STREAM_DATE'))->toDateTimeString();

        // Check if the stream should be online.
        if($streamDate > \Carbon\Carbon::now()->toDateTimeString())
            return view('offline');
        else
        {
            // Check if user cookie is set. If not, show login page.
            if (\Cookie::has('userLogCookie') === false) {
                // Init view.
                return view('login');
            }
            else {

                // Get cookie value.
                $cookieValue = \Cookie::get('userLogCookie');

                // Get user information.
                $user = User::where('password', $cookieValue)->first();

                // Return to login if value is null. Else return to index with user variable.
                if ($user === null)
                    return view('login');
                else
                    return view('index', compact('user'));
            }
        }
    }

    /**
     * Get the user.
     *
     * @return Message
     */
    public function login(Request $request)
    {
        // Validate user input.
        $request->validate([
            'name' => 'sometimes|string|max:191',
            'email' => 'required|email|max:191',
        ]);

        $cookieValue = \Hash::make($request->email);

        $user = User::updateOrCreate(
            [
                'email' => $request->email
            ],
            [
                'name' => $request->name,
                'password' => $cookieValue,
                'email' => $request->email,
            ]);

        // Set user cookie for 15 minutes.
        \Cookie::queue(\Cookie::make('userLogCookie', $cookieValue, 60 * 30));

        // Return to index function.
        return redirect()->action([ChatsController::class, 'index']);
    }

    /**
     * Fetch all messages
     *
     * @return Message
     */
    public function fetchMessages()
    {
        // Return messages.
        return Message::with('user')->get();
    }

    /**
     * Persist message to database
     *
     * @param  Request $request
     * @return Response
     */
    public function sendMessage(Request $request)
    {
        // Get cookie value.
        $cookieValue = \Cookie::get('userLogCookie');

        // Get user information.
        $user = User::where('password', $cookieValue)->first();

        // Insert messages in the database.
        $message = $user->messages()->create([
            'message' => $request->input('message')
        ]);

        // Broadcast the news message to other clients.
        broadcast(new MessageSent($user, $message))->toOthers();

        // Return succes message.
        return ['status' => 'Message Sent!'];
    }

    /**
     * Export Users to excel.
     */
    public function exportUsers()
    {
        return Excel::download(new UsersExport, 'overzicht_gebruikers' . date('Ymdhis') . '.xlsx');
    }

    /**
     * Export Users to excel.
     */
    public function exportMessages()
    {
        return Excel::download(new MessagesExport, 'overzicht_chat' . date('Ymdhis') . '.xlsx');
    }
}
