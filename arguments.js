"use strict";
var system = require('system');
var fs = require('fs');
function makeid(length) {
    var result           = [];
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
      result.push(characters.charAt(Math.floor(Math.random() * 
 charactersLength)));
   }
   return result.join('');
}

var filename = makeid(5)
if (system.args.length === 1) {
    console.log('Try to pass some args when invoking this script!');
} else {
    var page = require('webpage').create();
    page.content = system.args[1];
    page.render('temp/' + filename + '.png');
    phantom.exit();
}
try {
    fs.write("names.txt", filename + '\n', 'a');
} catch(e) {
    console.log(e);
}
phantom.exit();
