var express = require('express');
var app = express();
var router = express.Router();
var fs = require('fs');
var http = require('http');

/* GET home page.

router.get('/', function(req, res, next) {
  res.render('index');
  console.log('hello heroku');
});

*/
app.get('/', function(req, res) {
    res.render('./public/index.html');
});
module.exports = app;
