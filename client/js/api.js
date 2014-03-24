/*
	Core JS API for connecting with server. Abuse at will.
*/
var api = {
	testConnection: function testConnection() {
		jx.load(config.apiserver+"api?mode=test",function(data){
			if(data=="good"){
			return true;
			}else{
			return false;
			}
		},"text","post");
		return;
	}
}