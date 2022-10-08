const express = require('express');
const bodyParser = require('body-parser');
const cookieParser = require('cookie-parser');
const app = express();
const cors = require('cors');
const formParser = bodyParser.urlencoded();
const mongodb = require("mongodb");

const dbclient = new mongodb.MongoClient("mongodb://localhost:27017");
dbclient.connect();

const db = dbclient.db("lab3");

db.collection("Users").insertOne({_id:1,username:"Ahmed",password:123})

app.use(cors());
app.use(formParser);
app.use(cookieParser());

app.set("view engine","ejs");

app.post("/login",async function(req,res){
    let myuser = await db.collection("Users").findOne({_id:1})

    if(myuser && req.body.password==myuser.password){

        myuser.sid = Math.random();

        res.cookie("sid",myuser.sid)
        res.send("Login success");
        
    }else{
        res.send("Login Failed Incorrect username or password");
    }
})



app.get("/" ,async function(req,res){

    let myuser = await db.collection("Users").findOne({_id:1})
    res.cookie("msg","welcome");
    let username = myuser.username;
    // res.send("welcome");
    res.render("home.ejs" ,{username:username});
})

app.get("/login" ,function(req,res){

    res.render("login.ejs" );
})

app.listen(8080)
