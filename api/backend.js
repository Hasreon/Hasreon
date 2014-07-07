var pubnub = PUBNUB.init({
	publish_key: 'pub-c-f1c1301a-f5c5-4038-8f35-a4ec81044399',
	subscribe_key: 'sub-c-2ed8a5ea-014a-11e4-b97b-02ee2ddab7fe'
});

pubnub.subscribe({
	channel: 'hasreon_chat',
	message: function (m) {
		bounce(m);
	}
});

var msgArray;

function bounce(recv) {
	msgArray = recv.split("~");
	//Separate the Username from the incoming command
	if (recv.charAt(0) == "/") {
		//if the recieved data is a command, then do the below, else ignore.
		//Note that commands will not support additional parameters
		if (msgArray[0] == "/begin") {
			pubnub.publish({
				channel: "hasreon_chat",
				message: ":get('fairfalcongate')" + "~" + msgArray[1]
			});
		}

		if (msgArray[0] == ("/n" || "/north" || "/N" || "/North" || "/NORTH")) {
			if(jsonFile.North!=="False"){
				pubnub.publish({
					channel: "hasreon_chat",
					message: ":get('"+jsonFile.North+"')" + "~" + msgArray[1]
				});
			}else{
				gamelog.innerHTML = gamelog.innerHTML + "<br /> <br /> <center><h2>You can't go that way</h2></center>";
			}
		}
	}
}
