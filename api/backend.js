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
var boulder = false;
var mayor = false;
var sword = false;

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
			if (jsonFile.North !== "False") {
				pubnub.publish({
					channel: "hasreon_chat",
					message: ":get('" + jsonFile.North + "')" + "~" + msgArray[1]
				});
			} else {
				gamelog.innerHTML = gamelog.innerHTML + "<center><h3>You can't go that way</h3></center>";
			}
		}

		if (msgArray[0] == ("/s" || "/south" || "/S" || "/South" || "/SOUTH")) {
			if (jsonFile.South !== "False") {
				pubnub.publish({
					channel: "hasreon_chat",
					message: ":get('" + jsonFile.South + "')" + "~" + msgArray[1]
				});
			} else {
				gamelog.innerHTML = gamelog.innerHTML + "<center><h3>You can't go that way</h3></center>";
			}
		}

		if (msgArray[0] == ("/w" || "/west" || "/W" || "/West" || "/WEST")) {
			if (jsonFile.West !== "False") {
				pubnub.publish({
					channel: "hasreon_chat",
					message: ":get('" + jsonFile.West + "')" + "~" + msgArray[1]
				});
			} else {
				gamelog.innerHTML = gamelog.innerHTML + "<center><h3>You can't go that way</h3></center>";
			}
		}

		if (msgArray[0] == ("/e" || "/east" || "/E" || "/East" || "/EAST")) {
			if (jsonFile.East !== "False") {
				pubnub.publish({
					channel: "hasreon_chat",
					message: ":get('" + jsonFile.East + "')" + "~" + msgArray[1]
				});
			} else {
				gamelog.innerHTML = gamelog.innerHTML + "<center><h3>You can't go that way</h3></center>";
			}
		}
		var msg3;
		if (msgArray[0] == "/look") {
			msg3 = "<br /> ";
			if (jsonFile.Buildings !== []) {
				msg3 += "Nearby buildings:" + jsonFile.Buildings + "<br />";
			}
			if (jsonFile.North !== "False") {
				msg3 += "North is: " + eval(jsonFile.North).name + "<br />";
			}
			if (jsonFile.East !== "False") {
				msg3 += "East is: " + eval(jsonFile.East).name + "<br />";
			}
			if (jsonFile.South !== "False") {
				msg3 += "South is: " + eval(jsonFile.South).name + "<br />";
			}
			if (jsonFile.West !== "False") {
				msg3 += "West is: " + eval(jsonFile.West).name + "<br />";
			}
			gamelog.innerHTML = gamelog.innerHTML + msg3 + "<br />";
		}
		if (msgArray[0] == "/Boulder" && msgArray[2] == eval("fairfalconforest") && sword && mayor && !boulder) {
			gamelog.innerHTML = gamelog.innerHTML + "The Boulder Moved!";
			boulder = true;
		} else if (msgArray[2] !== eval("fairfalconforest")) {
			gamelog.innerHTML = gamelog.innerHTML + "There is no Boulder Here...";
		} else if (msgArray[2] == eval("fairfalconforest") && (!sword || !mayor)) {
			gamelog.innerHTML = gamelog.innerHTML + "You are not ready...";
		} else if (msgArray[2] == eval("fairfalconforest") && boulder) {
			gamelog.innerHTML = gamelog.innerHTML + "The Boulder is not in the way...";
		}

		if (msgArray[0] == "/blacksmith" && mayor && msgArray[2] == eval("fairfalconblacksmith") && !sword) {
			gamelog.innerHTML = gamelog.innerHTML + "Oh, its you. The Mayor told me about you. You wanted a sword? It's there on the counter.";
			gamelog.innerHTML = gamelog.innerHTML + "<br /> You take the sword. <br />";
			sword = true
		} else if (msgArray[0] == "/blacksmith" && msgArray[2] == eval("fairfalconmainstreet") && !mayor) {
			gamelog.innerHTML = gamelog.innerHTML + "The blacksmith is out...";
		} else if (msgArray[0] == "/blacksmith" && msgArray[2] !== eval("fairfalconmainstreet")) {
			gamelog.innerHTML = gamelog.innerHTML + "There is no blacksmith here...";
		} else if (msgArray[0] == "/blacksmith" && msgArray[2] == eval("fairfalconmainstreet") && sword) {
			gamelog.innerHTML = gamelog.innerHTML + "<br /> There is nothing here. <br />";
		}

		if (msgArray[0] == "/mayor" && msgArray[2] == eval("fairfalcontownhall") && !mayor) {
			gamelog.innerHTML = gamelog.innerHTML + "<br /> Oh its you. I've heard many things about you. Please, have a seat. <br /> You sit down. <br /> I have a problem. In the forest there is a tpye of sea-dwelling monster called a Kraken, and it has created an abode in an Ancient Cave. It is tunnelling under the city and is causing many buildings to collapse. Will you subdue it for me? I'll make it worth your while.<br /> You nod. </br>Excellent. I've arranged for you to get a sword. Go see the Blacksmith<br />";
			mayor = true
		} else if (msgArray[0] == "/mayor" && msgArray[2] == eval("fairfalcontownhall") && mayor) {
			gamelog.innerHTML = gamelog.innerHTML + "What are you waiting for? Go see the blacksmith. He'll tell you the rest.<br />";
		} else if (msgArray[0] == "/mayor" && msgArray[2] !== eval("fairfalcontownhall")) {
			gamelog.innerHTML = gamelog.innerHTML + "The mayor is not here..."
		}

		if (msgArray[0] == "/kraken" && msgArray[2] == eval("cave")) {
			console.log("RELEASE THE KRAKEN!")
				//Fighting logic
		} else {
			gamelog.innerHTML = gamelog.innerHTML + "You can't do that."
		}
	}
}
