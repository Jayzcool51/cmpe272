<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../Resources/css/analytics.css">
        <link href="https://fonts.googleapis.com/css?family=Cinzel|Open+Sans|Raleway|Roboto" rel="stylesheet">
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
                <div class="top-section">
                    <h4>Your Monthly Expenses</h4>
                    <canvas id="line-chart" height="10px"></canvas>
                </div>
                <div class="bottom-section clearfix">
                    <div class="left-section">
                        <h4>Money Spent Website Wise</h4>
                        <canvas id="bar-chart" height="240px"></canvas>
                    </div>
                    <div class="right-section">
                        <h4>Money Spent Product Wise</h4>
                        <canvas id="pie-chart" height="200px"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <script src="../Resources/js/analytics.js"></script>
    </body>
</html>
