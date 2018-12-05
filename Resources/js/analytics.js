new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
        labels: ["Jaunary", "February", "March", "April", "May", "June"],
        datasets: [
            {
                label: "Spending (Dollar)",
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850", "#FFB6C1"],
                data: [2478,5267,734,784,433, 500]
            }
        ]
    },
    options: {
        legend: { display: false },
        title: {
            display: true,
            text: 'Monthly spending($) in the marketplace'
        }
        // animation: {
        //       onProgress: function(animation) {
        //           progress.value = animation.animationObject.currentStep / animation.animationObject.numSteps;
        //       }
        //   }
    }
});


new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
        labels: ["T Shirts", "Shakes", "Washing Machine", "Desktop", "Sports Cars", "Linux EC2", "Gaming Laptops", "Burgers"],
        datasets: [
            {
                label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#FFB6C1", "#00FF00"],
                data: [500,1000,100,100,200, 500, 500, 1000]
            }
        ]
    },
    options: {
        title: {
            display: true,
            text: 'Products purchased in the marketplace'
        }
    }
});


new Chart(document.getElementById("bar-chart-horizontal"), {
    type: 'horizontalBar',
    data: {
        labels: ["iamprabha.com", "www.mayankdhingra.com", "www.mohitgahlot.com", "www.dhruwill.com", "jayzcool.com", "mohinishdaswani.space"],
        datasets: [
            {
                label: "Products",
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                data: [1000,2000,200,500,500,100]
            }
        ]
    },
    options: {
        legend: { display: false },
        title: {
            display: true,
            text: 'Products purchased from individual website in the marketplace'
        }
    }
});