console.log('Server-side code running');

const express = require('express');
const mysql=require('mysql');
const app = express();

// serve files from the public directory
app.use(express.static('html'));

//create connection
let db= mysql.createConnection({
    host:"localhost",
    user: "root",
    password: "",
    connectionLimit: 10,
    database: 'cart_db'//to fetch
});

//connect
db.connect((err)=>{
    if(err){
        throw err;
    }
    console.log('Database Connected Succedfullly...');
});

// serve the homepage
app.get('/', (req, res) => {
  res.sendFile(__dirname + '/shop.html');
});

// start the express web server listening on 8080
app.listen(8080, () => {
    console.log('listening on 8080');
  });