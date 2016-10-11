<?php

namespace App\Http\Controllers;

use App\ChatRoom as ChatRoom;
use App\Message as Message;
use Illuminate\Http\Request;
use Auth;
use Input;
use App\Http\Requests;
use Illuminate\Support\Facades\DB as DB;

class MessageController extends Controller
{
    //


    public function __construct(Message $messages){
        $this->messages=$messages;
    }
    public function getByChatRoom($id){
        $chatRoom= ChatRoom::find($id);
        return $chatRoom->messages;
    }
    public function getAll(){
        return $this->messages->all();
    }
    public function createInChatRoom(ChatRoom $chatRoom){
        $message=$this->messages->newInstance(Input::all());
        $message->chatRoom()->associate($chatRoom);
        $message->user()->associate($this->me());
        $message->save();
        return $message;
    }
    public function getByChatRoomId($id){
        return $this->messages;
    }
    public function getUpdates($lastMessageId, $chatRoom){
        return DB::table('messages')->where('chat_room_id',$chatRoom)->where('id', '>', $lastMessageId)->get();
    }
    public function postCreateNewMessage($chatRoom){

        $data= json_decode(file_get_contents('php://input'));

        $message = new Message();

        $message->body=$data->body;
        $message->chat_room_id=$chatRoom;
        $message->user_id=1;

        $message->save();
        return $message;
    }
}
