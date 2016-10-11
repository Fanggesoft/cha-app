/**
 * 
 */
angular.module('chatApp')
     .factory('ChatRoomService',function(WebService){
        	  //WebService又是一个工厂。
        	   return {
        		   getAll:function(){
        			   return WebService.get('chat-rooms');
        		   },
                   show:function(id){
        			   return WebService.get('chat-rooms/'+id);
        		   },
                   create:function(chatRoom){
        			 return WebService.post('chat-rooms',chatRoom); 
        		   }
        	   }
        	   
           });