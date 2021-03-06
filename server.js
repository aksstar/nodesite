var express = require("express");
var app = express();
var port = 3000;
var bodyParser = require('body-parser');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

var url = "mongodb://localhost:27017/"

var mongoose = require("mongoose");
mongoose.Promise = global.Promise;
mongoose.connect("mongodb://localhost:27017/");
var nameSchema = new mongoose.Schema({
    firstName: String,
    lastName: String,
    Product : String,
    Price : Number,
});
var User = mongoose.model("User", nameSchema);

app.get("/", (req, res) => {
    res.sendFile(__dirname + "/index.html");
});

app.post("/addname", (req, res) => {
    var myData = new User(req.body);
    myData.save()
        .then(item => {
            res.send("Name saved to database");
        })
        .catch(err => {
            res.status(400).send("Unable to save to database");
        });
});


app.get('/show', (req, res) => {
  User.find(function (err, adminLogins) {
  if (err) return console.error("err");
  console.log(typeof admin);
})
});

app.listen(port, () => {
    console.log("Server listening on port " + port);
});
