<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2021 Webvisit</title>
    <!-- The style.css file allows you to change the look of your web pages.
         If you include the next line in all your web pages, they will all share the same fursona
         This makes it easier to make new pages for your site. -->
    <!-- <link href="/dick.css" rel="stylesheet" type="text/css" media="all"> -->
    <!-- <link rel="icon" href="http://mario.com"> -->
    <style>
            .Bruhio {
                margin:4px, 4px;
                padding:4px;
                background-image: none;
                background-color: green;
                width: 500px;
                height: 110px;
                overflow-x: hidden;
                overflow-y: auto;
                text-align:justify;
            }
            .Bruhio p {
               color: #0000000
            }
    </style>
    
  </head>
  <body onload="myFunction()">
          <script>
    function myFunction() {
      var utter = new SpeechSynthesisUtterance("Hey");
      utter.lang = "en-US";
      utter.pitch = 1;
      utter.rate = 1;
      window.speechSynthesis.speak(utter);
      
    }
    </script>
    <script>
    // Create WebSocket connection.
    const socket = new WebSocket('ws://crasysockets.herokuapp.com');
    
    function penis() {
        var message = document.getElementById("msg").value
        socket.send(message)
        document.getElementById("msg").value = "";
    }
    
    // Connection opened
    socket.addEventListener('open', function (event) {
        socket.send('HelloI Am New Scatter');
    });

    // Listen for messages
    socket.addEventListener('message', function (event) {
        var node = document.createElement("p");
        var textnode = document.createTextNode(event.data.toString());
        node.appendChild(textnode);
        document.getElementById("scat").appendChild(node);
        var objDiv = document.getElementById("scat");
        objDiv.scrollTop = objDiv.scrollHeight;
    });
    </script>
    <script>
    function color() {
      var Coler = document.getElementById("bg").value
      var tColer = document.getElementById("txt").value
      var mario = document.getElementById("scat");
      mario.style["background-color"] = Coler;
      mario.style["background-image"] = "none";
      mario.style.color = tColer;
    }
    function theme1() {
      var Coler = "red";
      var tColer = "yellow";
      var mario = document.getElementById("scat");
      mario.style["background-color"] = Coler;
      mario.style["background-image"] = "none";
      mario.style.color = tColer;
    }
    function theme2() {
      var Coler = "mediumturquoise";
      var tColer = "mistyrose";
      var mario = document.getElementById("scat");
      mario.style["background-color"] = Coler;
      mario.style["background-image"] = "none";
      mario.style.color = tColer;
    }
    function theme3() {
      var Coler = "moccasin";
      var tColer = "saddlebrown";
      var mario = document.getElementById("scat");
      mario.style["background-color"] = Coler;
      mario.style["background-image"] = "none";
      mario.style.color = tColer;
    }
    function theme4() {
      var Coler = "black";
      var tColer = "red";
      var mario = document.getElementById("scat");
      mario.style["background-color"] = Coler;
      mario.style["background-image"] = "none";
      mario.style.color = tColer;
    }
    function theme5() {
      var Coler = "white";
      var tColer = "black";
      var mario = document.getElementById("scat");
      mario.style["background-color"] = Coler;
      mario.style["background-image"] = "none";
      mario.style.color = tColer;
    }
    function theme6() {
      var Coler = "white";
      var tColer = "black";
      var mario = document.getElementById("scat");
      mario.style["background-color"] = Coler;
      mario.style["background-image"] = 'url("https://i.imgur.com/ixCqIyK_d.png")';
      mario.style.color = tColer;
    }
    </script>
    <button onclick="myFunction()">Click. Me</button>
    <h1 style="text-align:center">Hi Its meBRUHH BRUH BRUH BRUo</h1>
   
    <p>Web site</p>
    <a href="/google.php">ProxyDeGoogle</a> <a href="https://sexy-voice-19912.pktriot.net">My otLukeyma a  fi/e)</a> <a href="https://Poopy.herokuapp.com/"> Poop Emoji</a> <a href="/imgur2.php">Imgur Sexay</a>
    <br>
    <?php
$poop = array("Penis", "mario", "silly", "crazy", "funny", "videos", "3gp", "to");
shuffle($poop);
$penis = implode(" ", $poop);
echo "<p>$penis</p>";
    ?>
    <p><img src="https://abnuo.neocities.org/ezgif.com-resize%207.gif">I'm F*cked Up.<img src="https://abnuo.neocities.org/ezgif.com-resize%207.gif"></p>
<form action="message.php" method="post">
  Change De X-Message HeaDer YaY
  <input type="text" name="message" id="message">
  <input type="submit" value="submit" name="submit">
</form>
<?php
$word = explode('"]', explode('["', file_get_contents("https://random-word-api.herokuapp.com/word"))[1])[0];
$word2 = explode('"]', explode('["', file_get_contents("https://random-word-api.herokuapp.com/word"))[1])[0];
$domain = "http://$word.com/";
echo "<p>CONGRATS! You are lucky today.. You have won a $word $word2! Clicky click! <a href=\"$domain\">Your surprise!</a></p>";
?>
<!-- Begin Chat -->
<h1>Chat</h1>
<div id="scat" class="Bruhio">
</div>
<textarea id="msg">Hey</textarea>
<button onclick="penis()">Send</button>
<p>Coler<p>
<input type="color" id="bg" name="bg"
           value="#008000">
<input type="color" id="txt" name="txt"
           value="#000000">
<button onclick="color()">Change palette</button>
<p>Or choose a theme:</p>
<button onclick="theme1()">BruhDonld</button>
<button onclick="theme2()">Yeety Sea</button>
<button onclick="theme3()">Lukert</button>
<button onclick="theme4()">ExE :devil:</button>
<button onclick="theme5()">COLOR INVERTED :devil:</button>
<button onclick="theme6()">Diabeto</button>
<!-- end chat -->
  </body>
</html>
