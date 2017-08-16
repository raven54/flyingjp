var express = require('express');
var router = express.Router();
var fs = require('fs');
var http = require('http');

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index');
  console.log('hello heroku');
});



module.exports = router;
