const exp = require('express');
const app = exp();

app.get('/',function(req,res){
    res.sendFile(__dirname+'/home.html');
});
app.listen(8080);