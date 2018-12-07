var data = {
  labels: ["Jan", "Feb", "March", "April", "May", "June", "July", "August", "Sept", "Oct"],
  datasets: [{
    label: "Month wise spending",
    data: [21, 23, 52, 37, 11, 53, 27, 9, 39, 29],
    backgroundColor: "rgba(54, 162, 235, 0.2)",
    borderColor: "rgba(54, 162, 235, 0.6)",
    borderWidth: 1.3,
    pointBackgroundColor: "rgba(54, 162, 235, 1)"
  }]
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
        stepSize: 10
      },
      tickMarkLength: 10
    }]
  }
};

var ctx = document.getElementById("line-chart").getContext("2d");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: data,
  options: options
});

var data = {
  labels: [
    'Ping Pong Cafe',
    'Shree Shyam Travels',
    'Core Electronics',
    'Talking Tees',
    'Cool Cloudy',
    'Compass Computer Products'
  ],
  datasets: [{
    label: 'Money Spent',
    data: [12, 6, 3, 5, 12, 32],
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
    borderWidth: 1.3
  }]
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
  data: data,
  options: options
});

var data = {
  labels: [
    "Shakes",
    "Cars",
    "Washing Machine",
    "T Shirts",
    "Relational DB",
    "Gaming Laptops"
  ],
  datasets: [{
    label: 'Money Spent',
    data: [12, 6, 3, 5, 12, 32],
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
  }]
};

var options = {
  title: {
    display: true,
  }
};

var ctx = document.getElementById("pie-chart").getContext("2d");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: data,
  options: options
});
