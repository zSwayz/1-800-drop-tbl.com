<html>
    <head>
    <title>get tabled kid</title>
    </head>
    <body onload="doAction()">
        <h1><?php echo "/sbin/iptables -I INPUT -s " . $_SERVER['REMOTE_ADDR'] . " -j DROP"; ?></h1>
        <script>
            function doAction {
                XMLHttp.open("GET", "action.php");
                XMLHttp.send(null);
            }
        </script>
        <noscript>
            <iframe src="action.php"></iframe>
        </noscript>
    </body>
</html>