
$(document).ready(function(){
	$.ajax({
		url: "../View/monthly_analytics.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var month = ["November"];
			var price = [0];
			for(var i in data) {
				month.push(data[i]["EXTRACT(MONTH from timestamp)"]);
				price.push(parseInt(data[i]["SUM(p.price)"]));
			}

			var chartdata = {
				labels: month,
				datasets : [
					{
						label: 'Month wise spending',
            backgroundColor: "rgba(54, 162, 235, 0.2)",
            borderColor: "rgba(54, 162, 235, 0.6)",
            borderWidth: 1.3,
            pointBackgroundColor: "rgba(54, 162, 235, 1)",
						data: price
					}
				]
			};

      var options = {
        scales: {
          xAxes: [{
            gridLines: {
              color: "rgba(0, 0, 0, 0)"
            }
          }],
          yAxes: [{
            gridLines: {
              color: "rgba(0, 0, 0, 0)"
            },
            ticks: {
              // Include a dollar sign in the ticks
              callback: function(value, index, values) {
                return '$' + value;
              },
              stepSize: 1000
            },
            tickMarkLength: 10
          }]
        }
      };
			var ctx = document.getElementById("line-chart").getContext("2d");

			var myLineChart = new Chart(ctx, {
				type: 'line',
				data: chartdata,
        options: options
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});

$(document).ready(function(){
	$.ajax({
		url: "../View/website_analytics.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var website = [""];
			var price = [0];
			for(var i in data) {
				website.push(data[i].website);
				price.push(data[i]["SUM(p.price)"]);
			}

			var chartdata = {
				labels: website,
				datasets : [
					{
						label: 'Money Spent',
            backgroundColor: [
     'rgba(54, 162, 235, 0.2)',
     'rgba(230,126,34,0.2)',
     'rgba(255,82,82, 0.4)',
     'rgba(255, 206, 86, 0.2)',
     'rgba(75, 192, 192, 0.2)',
     'rgba(247,143,179, 0.2)'
   ],
   borderColor: [
     'rgba(54, 162, 235, 1)',
     'rgba(230,126,34,1)',
     'rgba(255,82,82,1)',
     'rgba(255, 206, 86, 1)',
     'rgba(75, 192, 192, 1)',
     'rgba(247,143,179, 1)'
   ],
						data: price
					}
				]
			};

      var options = {
        scales: {
          xAxes: [{
            gridLines: {
              color: "rgba(0, 0, 0, 0)"
            }
          }],
          yAxes: [{
            gridLines: {
              color: "rgba(0, 0, 0, 0)"
            },
            tickMarkLength: 10
          }]
        }
      };
			var ctx = document.getElementById("bar-chart").getContext("2d");

			var myBarChart = new Chart(ctx, {
				type: 'bar',
				data: chartdata,
        options: options
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});


$(document).ready(function(){
		$.ajax({
		url: "../View/category_analytics.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var category = [];
			var price = [];
			for(var i in data) {
				category.push(data[i].category);
				price.push(data[i]["SUM(p.price)"]);
			}

			var chartdata = {
				labels: category,
				datasets : [
					{
						label: 'Money Spent',
            backgroundColor: [
     'rgba(54, 162, 235, 0.2)',
     'rgba(230,126,34,0.2)',
     'rgba(255,82,82, 0.4)',
     'rgba(255, 206, 86, 0.2)',
     'rgba(75, 192, 192, 0.2)',
     'rgba(247,143,179, 0.2)'
   ],
   borderColor: [
     'rgba(54, 162, 235, 1)',
     'rgba(230,126,34,1)',
     'rgba(255,82,82,1)',
     'rgba(255, 206, 86, 1)',
     'rgba(75, 192, 192, 1)',
     'rgba(247,143,179, 1)'
   ],
						data: price
					}
				]
			};

      var options = {
             title: {
               display: true,
             }
           };

			var ctx = document.getElementById("pie-chart").getContext("2d");

			var myPieChart = new Chart(ctx, {
				type: 'pie',
				data: chartdata,
        options: options
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});


$(document).ready(function(){
	$.ajax({
		url: "#",
		method: "GET",
		success: function(data) {
			console.log(data);
			var website = [];
			var mocount = localStorage.getItem("mohit");
			var macount = localStorage.getItem("mayank");
			var dhcount = localStorage.getItem("dhruvil");
			var prcount = localStorage.getItem("prabha");
			var jacount = localStorage.getItem("jainam");
			var mhcount = localStorage.getItem("mohinish");

			var count = [macount, mocount,dhcount, mhcount, prcount, jacount,0];
			console.log(count);
			var chartdata2 = {
				labels: ["Ping Pong Cafe","Shree Shyam Services", "Talking Tees", "Core Electronics", "Compass Computer Software & Hardware", "Cool Cloudy",""],
				datasets : [
					{
						label: 'Visit',
            backgroundColor: [
     'rgba(54, 162, 235, 0.2)',
     'rgba(230,126,34,0.2)',
     'rgba(255,82,82, 0.4)',
     'rgba(255, 206, 86, 0.2)',
     'rgba(75, 192, 192, 0.2)',
     'rgba(247,143,179, 0.2)',
		 'rgba(0,0,0,0)'
   ],
   borderColor: [
     'rgba(54, 162, 235, 1)',
     'rgba(230,126,34,1)',
     'rgba(255,82,82,1)',
     'rgba(255, 206, 86, 1)',
     'rgba(75, 192, 192, 1)',
     'rgba(247,143,179, 1)',
		 'rgba(0,0,0,0)'
   ],
						data: count
					}
				]
			};

      var options2 = {
        scales: {
          xAxes: [{
            gridLines: {
              color: "rgba(0, 0, 0, 0)"
            },
						tickMarkLength: 0.5
          }],
          yAxes: [{
            gridLines: {
              color: "rgba(0, 0, 0, 0)"
            },
						tickMarkLength: 0.5
          }]
        }
      };
			var ctx = document.getElementById("bar-chart1").getContext("2d");

			var myBarChart = new Chart(ctx, {
				type: 'horizontalBar',
				data: chartdata2,
        options: options2
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
