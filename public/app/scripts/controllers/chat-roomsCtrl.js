/**
 * 
 */

"use strict";


angular.module('chatApp')
   .controller('ChatRoomsCtrl',function($scope,ChatRoomService,$location){
	var chatRoomsLoaded = function(chatRooms)
    {
		$scope.chatRooms =chatRooms;
	};
	var handleErrors = function(response){
		console.error(response);
	};

	$scope.selectChatRoomBtnOnClick = function(chatRoom){
		$location.path('chat-room/'+chatRoom.id);
	}
	$scope.createChatRoomBtnOnClick=function(newchatRoom){
		ChatRoomService.create(newchatRoom).then($scope.selectChatRoomBtnOnClick);
	}
	ChatRoomService.getAll()
	.then(chatRoomsLoaded)
	.catch(handleErrors);
});