var http = require('http');




function sayHello(req,res) {
	console.log("Received a request for: " + req.url);
    var request = req.url;
	if (request == '/home') 
		{
		  res.write("Welcome to the Home Page");
		  res.end();
		} else
	if (request == '/getData') 
		{
		  res.write("Name:  Sister Delorey" + "\n");
		  res.write("Class: CS313-03");
		  res.end();
		}  
		else
		{
		  res.write("404:Page Not Found");
		  res.end();
		}  		
}

var server = http.createServer(sayHello);
server.listen(8888);

console.log("The server is now listening on port 8888...");



