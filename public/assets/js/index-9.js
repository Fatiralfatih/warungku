"use strict";

// Total Revenue Chart
var options = {
  series: [
    {
      name: "Deals",
      type: "column",
      data: [23, 11, 22, 35, 17, 28, 22, 37, 21, 44, 22, 30],
    },
    {
      name: "Revenue",
      type: "line",
      data: [30, 25, 36, 30, 45, 35, 64, 51, 59, 36, 39, 51],
    },
  ],
  chart: {
    height: 280,
    type: "line",
    stacked: !1,
    toolbar: {
      show: !1,
    },
  },
  grid: {
    borderColor: "rgba(107 ,114 ,128,0.1)",
  },
  dataLabels: {
    enabled: false,
  },
  legend: {
    position: "top",
  },
  colors: ["#5a66f1", "rgb(203,213,225)"],
  stroke: {
    width: [1, 1],
    curve: ["straight", "smooth"],
  },
  labels: [
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
  legend: {
    show: false,
    position: "top",
  },
  plotOptions: {
    bar: {
      columnWidth: "15%",
      borderRadius: 1,
    },
  },
};
var chart = new ApexCharts(document.querySelector("#revenue"), options);
chart.render();

/*  revenue overview chart */
function revenueOverview() {
  function rgbToHex(r, g, b) {
    return "#" + ((1 << 24) | (r << 16) | (g << 8) | b).toString(16).slice(1);
  }
  chart.updateOptions({
    colors: [
      rgbToHex(
        myVarVal.split(",")[0],
        myVarVal.split(",")[1],
        myVarVal.split(",")[2]
      ),
      "rgb(203,213,225)",
    ],
  });
}
/* basic chart */
var options = {
  series: [
    {
        data: [400, 430, 470, 540, 600, 800]
    },
  ],
  chart: {
    type: "bar",
    height: 380,
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
    categories: ['Marketing', 'Digital', 'Web', 'Advertisement', 'Employee Referal', 'Other'],
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
var chart1 = new ApexCharts(document.querySelector("#leads"), options);
chart1.render();
function leads() {
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
