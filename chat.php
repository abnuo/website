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
        socket.send('Hello, I Was Friend User!');
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
<!-- Begin chat -->
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
<!-- End chat -->
