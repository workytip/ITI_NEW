// console.log('Hello from the Node js!');
var http = require('http');
const fs = require('fs');
const url = require('url');
http.createServer(function (req, res) {
    let MYURL = url.parse(req.url,true);

    if (req.url == '/')
    {
        res.writeHead(200, {'Content-Type': 'text/html'});
        fs.readFile('home.html',function(err,data){
            console.log(err);
            res.end(data);

        });
       
    }
    else if (req.url == '/about')
    {
        res.writeHead(200, {'Content-Type': 'text/html'});
        fs.readFile('about.html',function(err,data){
            console.log(err);
            res.end(data);

        });
       
    }
    else if (req.url == '/contact')
    {
        res.writeHead(200, {'Content-Type': 'text/html'});
        fs.readFile('contact.html',function(err,data){
            console.log(err);
            res.end(data);

        });
       
    }
    else if (req.url == '/register')
    {
        res.writeHead(200, {'Content-Type': 'text/html'});
        fs.readFile('register.html',function(err,data){
            console.log(err);
            res.end(data);

        });
       
    }
   
    else if (req.url == '/add' && req.method == 'POST')
    {
        
        req.on('data',(data)=>{
          let q = url.parse("/?"+data.toString(),true).query;
            //  console.log(q.password);
            if(q.password.length<8)
            {
                res.write('Error password is less than 8 characters ')
            }
            else
            {
                res.write('Registration success')

            }
        });
        req.on('end',()=>res.end('done'))
              
    }
    else
    {
        res.writeHead(200, {'Content-Type': 'text/html'});
        res.end('Not Found');
       
    }

}).listen(8080);