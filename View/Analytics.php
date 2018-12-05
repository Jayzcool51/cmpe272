<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../Resources/css/analytics.css">
    </head>
    <body>
        <div class="container">
            <div class="logo">
                Company Name
            </div>
            <div class="navbar">
                <div class="nav">Home</div>
                <div class="nav">Products</div>
                <div class="nav"></div>
                <div class="nav">About Us</div>
                <div class="nav">Contact</div>
            </div>
            <div id="contain">
                <div id="canvas-holder" style="float:left;">
                    <canvas id="bar-chart" width="400" height="450">
                </canvas></div>
                <div id="canvas-holder-keymsg" style="float:left;">
                    <canvas id="doughnut-chart" width="500" height="450">
                </canvas></div>
                <div id="canvas-holder-keymsg" style="float:right;">
                    <canvas id="bar-chart-horizontal" width="500" height="450">
                </canvas></div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <script src="../Resources/js/analytics.js"></script>
    </body>
</html>
