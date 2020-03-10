// load the things we need
var express = require('express');
var app = express();

// set the view engine to ejs
app.set('view engine', 'ejs');

// use res.render to load up an ejs view file

// index page 
app.get('/', function(req, res) {
    var workouts = [
        { name: 'RUN', fitlevel: 3 },
        { name: 'BIKE', fitlevel: 5 },
        { name: 'SWIM', fitlevel: 10 }
    ];
    var tagline = "Exercise is the flywheel of good health.";

    res.render('pages/index', {
        workouts: workouts,
        tagline: tagline
    });
});

// about page 
app.get('/about', function(req, res) {
	res.render('pages/about');
});

app.listen(8080);
console.log('8080 is the magic port');