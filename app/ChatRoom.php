<?php

namespace App;
use App\Message as Message;
use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    //
    protected $table='chat_rooms';
    protected $fillable=array('name');

    public function messages(){
        return $this->hasMany('App\Message','chat_room_id');
    }

}
