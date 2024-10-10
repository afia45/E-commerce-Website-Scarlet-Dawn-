const express= require('express');
const mysql=require('mysql');
const bodyParser= require("body-parser");
const encoder=bodyParser.urlencoded();
var session=require('express-session');
// const { param } = require('express-validator');
var expressValidator=require ('express-validator');
// var product=require('./html/')

const app=express();
//css file
app.use("/css",express.static("css"));
app.use("/img",express.static("img"));
app.use("/fonts",express.static("fonts"));
//create connection
let db= mysql.createConnection({
    host:"localhost",
    user: "root",
    password: "",
    connectionLimit: 10,
    database: 'nodejs'//to fetch
});

//connect
db.connect((err)=>{
    if(err){
        throw err;
    }
    console.log('Database Connected Succedfullly...');
});


app.get("/login",function(req,res){
    res.sendFile(__dirname+"/html/login.html");
})

//authenticate the login with database
app.post("/login", encoder, function(req,res){
    var username= req.body.username;
    var password= req.body.password;

    db.query("select * from loginuser where user_name = ? and user_pass = ?", [username,password], function(error,results,fields){
        if(results.length>0){
            res.redirect("/home");
        }else{
            res.redirect("/login");
        }
        res.end();
    })
})

//when login success
app.get("/home",function(req,res){
    res.sendFile(__dirname + "/html/home.html")
})

//logout
app.get('')

//rendering rest of the html files in 'html' folder
app.use(express.static('html'));

//Body parser middleware
app.use(bodyParser.urlencoded({extended:false}));
app.use(bodyParser.json());

//Express session middle ware
app.use(session({
    secret: 'keyboard cat',
    resave: false,
    saveUninitialized: true,
    cookie: {secure: true}
}));

//express validator middleware
// app.use(expressValidator({
//     errorFormatter: function (param, msg, value) {
//         var namespace = param.split('.')
//             , root = namespace.shift()
//             , formParam = root;

//         while (namespace.length) {
//             formParam += '[' + namespace.shift() + ']';
//         }

//         return {
//             param: formParam,
//             msg: msg,
//             value: value
//         };
//     }
// }));

//express messages middleware
app.use(require('connect-flash')());
app.use(function (req,res,next){
    res.locals.messages=require('express-messages')(req,res);
    next();
});


//set app port
app.listen('4500', ()=>{
    console.log('Server started on port 4500');
});