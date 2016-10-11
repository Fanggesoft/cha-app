<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $table = "messages";
    protected $fillable = array('body');

    public function chatRoom()
    {
        return $this->belongsTo('ChatRoom', 'chat_room_id');
    }

    public function user()
    {
        return $this->belongsTo('users', 'user_id');
    }
    public function scopeAfterId($query, $lastId){
        return $query->where('id','>',$lastId);
    }
    public function scopeByChatRoom($query, $chatRoom){

        return $query->where('chat_room_id',$chatRoom->id);
    }
}