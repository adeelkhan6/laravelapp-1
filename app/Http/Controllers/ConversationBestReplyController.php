<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;

class ConversationBestReplyController extends Controller
{
    public function store(Reply $reply)
    {
        // authorize that the current user has permission to set the best reply
        // for the conversation
        // $this->authorize('update-conversation', $reply->conversation);

        $this->authorize('update', $reply->conversation);

        $reply->conversation->setBestReply($reply);  // seting buisnes login to conversation model

        // if they do then set it
        // $reply->conversation->best_reply_id = $reply->id;
        // $reply->conversation->save();

        // redirect back to the conversation page
        return back();
    }
}
