/**
 * 
 */
"use strict";
angular.module('chatApp')
  .factory('MessageService' , function (WebService) {
       return{
           getByChatRoom: function(chatRoom){
               return WebService.get('messages/'+chatRoom.id);
           },
           postNewMessageInChatRoom:function(chatRoom, message){
               return WebService.post('messages/'+chatRoom.id, message);
           },
           getUpdates:function(chatRoom,lastMessage){
               var lastMessageId;
               if(!lastMessage){
                   lastMessageId=0;
               }
               else{
                   lastMessageId=lastMessage.id;
               }
               return WebService.get('messages/'+lastMessageId+'/'+chatRoom.id);
           }
       }
    });