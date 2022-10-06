const express = require("express");
const bodyParser = require("body-parser");
const fs = require("fs");
const app = express();
const jsonParser = bodyParser.json();


let contacts = [];
let conIndex=0;
loadConFromFile(); 
function loadConFromFile(){
    fs.readFile("db.txt",function(err,data){
        contacts = JSON.parse(data);
        let maxId = 0;
        for(let contact of contacts){
            if(contact && contact.id>maxId) maxId = contact.id;
        }
        maxId++;
        conIndex=maxId;
    })

}

function saveConToFile(){
    fs.writeFile("db.txt",JSON.stringify(contacts),function(){});
}



// app.get("/emps.html",function(req,res){
//     res.sendFile(__dirname+"/empsFE.html");
// })


app.post("/add",jsonParser,function(req,res){
    req.body.id=conIndex++;
    contacts.push(req.body);
    saveConToFile();
    console.log(contacts);
    res.send({msg:"contact added"});
})


app.get("/show",function(req,res){
    if(req.query.name==undefined) req.query.name="";
    
    let filtered = contacts.filter(con=>con && con.name.toLowerCase().indexOf(req.query.name.toLowerCase())>-1)

    res.send(filtered);
});


app.delete("/delete",function(req,res){
    console.log(req.query,contacts);
    let conIndex = contacts.findIndex(con=>con && con.id==req.query.id);
    //emps.splice(empIndex,1);
    delete contacts[conIndex];
    saveConToFile();
    res.send({msg:"Contact deleted"});

})

app.put("/edit",jsonParser,function(req,res){
    let con = contacts.find(con=> con && con.id==req.body.id);
    con.name = req.body.name;
    con.phone = req.body.phone;
    saveConToFile();
    res.send({msg:"Contact saved"});

})


app.get("/getone",function(req,res){
    let con = contacts.find(con=> con && con.id==req.query.id);
    res.send(con);
})
app.listen(8080);