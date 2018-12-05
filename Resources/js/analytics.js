// new Chart(document.getElementById("line-chart"), {
//     type: 'line',
//     data: {
//         labels: ["Jaunary", "February", "March", "April", "May", "June"],
//         datasets: [
//             {
//                 label: "Spending (Dollar)",
//                 backgroundColor: ["rgba(231, 76, 60, 0.75)"],
//                 data: [2478,5267,734,784,433, 500]
//             }
//         ]
//     },
//     options: {
//         legend: { display: false },
//         title: {
//             display: true,
//             text: 'Monthly spending($) in the marketplace'
//         }
//         // animation: {
//         //       onProgress: function(animation) {
//         //           progress.value = animation.animationObject.currentStep / animation.animationObject.numSteps;
//         //       }
//         //   }
//     }
// });

var data = {
    labels: ["Jan", "Feb", "March", "April", "May", "June", "July", "August", "Sept", "Oct"],
    datasets: [
        {
            label: "Month wise budget",
            data: [21, 23, 52, 37, 11, 53, 27, 9, 39, 29],
            backgroundColor: "rgba(54, 162, 235, 0.2)",
            borderColor:"rgba(54, 162, 235, 0.6)",
            borderWidth: 1.3,
            pointBackgroundColor: "rgba(54, 162, 235, 1)"
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
                stepSize:10
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


//
// new Chart(document.getElementById("doughnut-chart"), {
//     type: 'doughnut',
//     data: {
//         labels: ["T Shirts", "Shakes", "Washing Machine", "Desktop", "Sports Cars", "Linux EC2", "Gaming Laptops", "Burgers"],
//         datasets: [
//             {
//                 label: "Population (millions)",
//                 backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#FFB6C1", "#00FF00"],
//                 data: [500,1000,100,100,200, 500, 500, 1000]
//             }
//         ]
//     },
//     options: {
//         title: {
//             display: true,
//             text: 'Products purchased in the marketplace'
//         }
//     }
// });
//
//
// new Chart(document.getElementById("bar-chart-horizontal"), {
//     type: 'horizontalBar',
//     data: {
//         labels: ["iamprabha.com", "www.mayankdhingra.com", "www.mohitgahlot.com", "www.dhruwill.com", "jayzcool.com", "mohinishdaswani.space"],
//         datasets: [
//             {
//                 label: "Products",
//                 backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
//                 data: [1000,2000,200,500,500,100]
//             }
//         ]
//     },
//     options: {
//         legend: { display: false },
//         title: {
//             display: true,
//             text: 'Products purchased from individual website in the marketplace'
//         }
//     }
//});


var data = {
    labels: [
        'Ping Pong Cafe',
        'Shree Shyam',
        'Electronics',
        'Clothing',
        'Books',
        'Kitchen and Dining'
    ],
    datasets: [
        {
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
    data: data,
    options: options
});