'use strict'

// Earnings Report Chart
var options = {
    series: [
    {
      name: 'Students',
      type: 'column',
      data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 45, 35]
    },
    {
      name: 'Earnings',
      type: 'line',
      data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43, 27]
    },
    ],
      chart: {
          toolbar: {
              show: false
          },
      type: 'line',
      height: 340,
    },
    grid: {
      borderColor: '#f1f1f1',
      strokeDashArray: 3
    },
    colors: ["rgb(90,102,241)", "rgb(203,213,225)"],
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: [1, 2],
      curve: ['straight', 'smooth'],
    },
    legend: {
      show: false,
    },
    xaxis: {
      axisBorder: {
        color: '#e9e9e9',
      },
    },
    plotOptions: {
      bar: {
        columnWidth: "22%",
        borderRadius: 2
      }
    },
  };
var chart1 = new ApexCharts(document.querySelector("#earningsReport"), options);
chart1.render();

function earningsReport(){
	chart1.updateOptions({
        colors: ["rgb(" + myVarVal + ")", "rgb(203,213,225)"]
	})
}