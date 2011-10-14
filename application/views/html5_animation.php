<html>
<head>
<style>
    @-webkit-keyframes changeScale {
        0% {
            -webkit-transform: scale(1.0);
        }
        50% {
            -webkit-transform: scale(0.3);
        }
        100% {
            -webkit-transform: scale(1.0);
        }
    }

    #box {
        height: 300px;
        width: 300px;
        background-color: purple;
        -webkit-animation-name: changeScale;
        -webkit-animation-duration: 4s;
    }
</style>
<meta name="viewport" content="width=device-width, initial-scale=1"> 	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>html5_animation</title>
</head>
<body>
    <div id="box"></div>
</body>
</html>