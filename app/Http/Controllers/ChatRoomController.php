<?php

namespace App\Http\Controllers;

use App\ChatRoom as ChatRoom;
use Illuminate\Http\Request;
use Log;
use App\Http\Requests;

class ChatRoomController extends Controller
{
    public function __construct(ChatRoom $chatRooms){
        $this->chatRooms=$chatRooms;
    }
    //
    public function getAll(){
        return $this->chatRooms->all();
    }
    public function create(){

        $data= json_decode(file_get_contents('php://input'));
        $newRoom=new ChatRoom;
        $newRoom->name=$data->name;
        if($newRoom->save()){

        }
        else{

        }

}
   public function show( $chatRoomid)
   {
        return ChatRoom::find($chatRoomid);
   }
}
