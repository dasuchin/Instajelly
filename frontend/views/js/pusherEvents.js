/**
 * Pusher Events
 * events and functions for Pusher
 */

Pusher.channel_auth_endpoint = '/user/PusherAuth';
var pusher = new Pusher('e881a367be3350402e94');

$(document).ready(function() {
    
    //// SUBSCRIBE TO CHANNELS
    var channelUserEvents = pusher.subscribe('private-userEvents');
    //var presenceChannel = pusher.subscribe('presence-userEvents');
    
    //// PRESENCE EVENTS
    //presenceChannel.bind('pusher:subscription_succeeded', function(members) {
    //    
    //    members.each(function(member) {
    //        
    //        // loop through current users
    //        //
    //        //
    //        //
    //        
    //    });
    //    
    //});
    //
    //presenceChannel.bind('pusher:member_added',function(member) {
    //    
    //    // someone joined
    //    //
    //    //
    //    //
    //    
    //});
    //
    //presenceChannel.bind('pusher:member_removed',function(member) {
    //    
    //    // someone left
    //    //
    //    //
    //    //
    //    
    //});
    
    
    //// USER EVENTS
    
    // New user registered!
    channelUserEvents.bind('newUser',function(data) {
        
        pusherAddUser(data);
        
    });
    
});

// add them to the newcomers ul
function pusherAddUser(data) {
    
    // add newcomer to ul
    var newcomers = $('#newcomers ul');
    newcomers.prepend('<li><a href="/' + data.username + '"><img src="' + data.picture + '" alt="" title="' + data.username + '"/></a></li>');
    
    // add 1 to the count
    var numbUsers = $('#numbUsers');
    var currentCount = parseInt(numbUsers.html(),10);
    numbUsers.html(currentCount+1);
    
    return true;
    
}