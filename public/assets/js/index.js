"use strict";

/*  sales overview chart */
var options = {
  series: [
    {
      name: "Income",
      data: [20, 38, 38, 72, 55, 63, 43, 76, 55, 80, 40, 80],
    },
    {
      name: "Expenses",
      data: [85, 65, 75, 38, 85, 35, 62, 40, 40, 64, 50, 89],
    },
  ],
  chart: {
    animations: {
      enabled: false,
    },
    height: 300,
    type: "bar",
    zoom: {
      enabled: false,
    },
    toolbar: {
      show: false,
    },
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: "55%",
      endingShape: "rounded",
      borderRadius: 5,
    },
  },
  dataLabels: {
    enabled: false,
  },
  legend: {
    show: false,
  },
  stroke: {
    show: true,
    width: 3,
    colors: ["transparent"],
  },
  grid: {
    borderColor: "rgba(107 ,114 ,128,0.1)",
  },
  colors: ["rgb(90,102,241)", "rgb(203,213,225)"],
  yaxis: {
    title: {
      style: {
        color: "#adb5be",
        fontSize: "14px",
        fontFamily: "Inter, sans-serif",
        fontWeight: 600,
        cssClass: "apexcharts-yaxis-label",
      },
    },
    labels: {
      style: {
        colors: "rgb(107 ,114 ,128)",
        fontSize: "12px",
      },
      formatter: function (y) {
        return y.toFixed(0) + "";
      },
    },
  },
  xaxis: {
    type: "month",
    categories: [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ],
    axisBorder: {
      show: true,
      color: "rgba(119, 119, 142, 0.05)",
      offsetX: 0,
      offsetY: 0,
    },
    axisTicks: {
      show: true,
      borderType: "solid",
      color: "rgba(119, 119, 142, 0.05)",
      width: 6,
      offsetX: 0,
      offsetY: 0,
    },
    labels: {
      rotate: -90,
      style: {
        colors: "rgb(107 ,114 ,128)",
        fontSize: "12px",
      },
    },
  },
};
var chart = new ApexCharts(document.querySelector("#salesOverview"), options);
chart.render();

/* basic chart */
var options = {
  series: [
    {
      data: [400, 470, 540, 690, 1100, 1380],
    },
  ],
  chart: {
    type: "bar",
    height: 370,
    toolbar: {
      show: false,
    },
  },
  fill: {
    type: "gradient",
    gradient: {
      shadeIntensity: 1,
      opacityFrom: 0.7,
      opacityTo: 1,
      colorStops: [
        {
          offset: 0,
          color: "#60a5fa",
          opacity: 1,
        },
        {
          offset: 100,
          color: "#5a66f1",
          opacity: 1,
        },
      ],
    },
  },
  plotOptions: {
    bar: {
      borderRadius: 4,
      horizontal: true,
    },
  },
  colors: ["#5e76a6"],
  grid: {
    borderColor: "transparent",
  },
  dataLabels: {
    enabled: false,
  },
  xaxis: {
    categories: [
      "Facebook",
      "Instagram",
      "Dribble",
      "Twitter",
      "Chrome",
      "Pininterest",
    ],
    labels: {
      show: true,
      style: {
        colors: "#adb5be",
        fontSize: "11px",
        fontWeight: 600,
        cssClass: "apexcharts-xaxis-label",
      },
    },
  },
  yaxis: {
    labels: {
      show: true,
      style: {
        colors: "#adb5be",
        fontSize: "11px",
        fontWeight: 600,
        cssClass: "apexcharts-yaxis-label",
      },
    },
  },
};
var chart1 = new ApexCharts(document.querySelector("#visitors"), options);
chart1.render();

/* Chartjs (#donut)  */
var myCanvas = document.getElementById("sales-donut");
var myCanvasContext = myCanvas.getContext("2d");
var myChart;
myChart = new Chart(myCanvas, {
  type: "doughnut",
  data: {
    labels: ["Items", "Revenue"],
    datasets: [
      {
        data: [60, 40],
        backgroundColor: ["rgb(90, 102, 241)", "rgb(96, 165, 250)"],
        borderWidth: 0,
      },
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        display: false,
      },
    },
    cutout: 90,
  },
});
/* Chartjs (#donut) closed */

/*  sales overview chart */
function salesOverview() {
  chart.updateOptions({
    colors: ["rgb(" + myVarVal + ")", "rgb(203,213,225)"],
  });
}

function visitorschart() {
  function rgbToHex(r, g, b) {
    return "#" + ((1 << 24) | (r << 16) | (g << 8) | b).toString(16).slice(1);
  }
  chart1.updateOptions({
    colors: [
      rgbToHex(
        myVarVal.split(",")[0],
        myVarVal.split(",")[1],
        myVarVal.split(",")[2]
      ),
    ],
    fill: {
      type: "gradient",
      gradient: {
        shadeIntensity: 1,
        opacityFrom: 0.7,
        opacityTo: 1,
        colorStops: [
          {
            offset: 0,
            color: "#60a5fa",
            opacity: 1,
          },
          {
            offset: 100,
            color: "rgb(" + myVarVal + ")",
            opacity: 1,
          },
        ],
      },
    },
  });
}
function salesdonut() {
  myChart.data.datasets[0] = {
    data: [50, 30, 30],
    backgroundColor: ["rgb(" + myVarVal + ")", "rgb(96, 165, 250)"],
    borderWidth: 0,
  };
  myChart.update();
}
