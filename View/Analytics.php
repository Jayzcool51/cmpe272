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
                La Carros
            </div>
            <div class="navbar">
                <a href="home.php"><div class="nav">Home</div></a>
                <a href="products.php"><div class="nav">Products</div></a>
                <a href="aboutus.php"><div class="nav">About Us</div></a>
                <a href="cart.php"><div class="nav">Cart</div></a>
                <a href="Analytics.php"><div class="nav">Analytics</div></a>
                <a href="#"><div class="nav">Sign Out</div></a>
            </div>
            <div id="contain">
                <div class="top-section">
                    <h4>Your Monthly Expenses</h4>
                    <canvas id="line-chart" height="300px"></canvas>
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
                <div class="bottom-most-section">
                    <h4>Recent Visits in Marketplace</h4>
                    <canvas id="bar-chart1" height="100px"></canvas>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <script src="../Resources/js/analytics.js"></script>
    </body>
</html>
