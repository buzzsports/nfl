<html>
<head>
<title>NbaStreams</title>
<meta name="referrer" content="never">
<meta name="referrer" content="no-referrer"/>
<script src="/cdn-cgi/apps/head/y8MXf5E3ufQc52wip_GYiCUIaqU.js"></script><script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr@0.2.86/dist/clappr.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/clappr/clappr-level-selector-plugin@latest/dist/level-selector.min.js"></script>
<script src="https://cdn.jsdelivr.net/clappr.chromecast-plugin/latest/clappr-chromecast-plugin.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<?php require("_Obfuscator.php"); ?>
<body style="margin:0px;padding:0px;">
<div id="ppp"></div>
<script>
var playerElement = document.getElementById("ppp");
var clap = {
source: 'http://185.53.89.48/live/ufc.m3u8',
 height: "100%",
 width: "100%",
parentId: "#ppp",
plugins: [LevelSelector,ChromecastPlugin],
mimeType: "application/x-mpegURL",
autoPlay: false,
playInline: true,
mediacontrol: {seekbar: "#fff", buttons: "#fff"},
chromecast: {
          appId: '9DFB77C0',
          contentType: 'video/m3u8',
          media: {
            type: ChromecastPlugin.None,
            title: 'Live',
            subtitle: 'Live'
          }
        }
}
var player = new Clappr.Player(clap);


</script>







</body>
</html>
