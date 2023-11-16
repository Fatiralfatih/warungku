"use strict";
var options = {
  series: [
    {
      name: "Income",
      data: [23, 55, 22, 45, 20, 32, 22, 42, 21, 44, 22, 30],
    },
    {
      name: "Expenses",
      data: [40, 35, 66, 28, 38, 55, 45, 70, 55, 69, 46, 49],
    },
  ],
  chart: {
    animations: {
      enabled: false,
    },
    height: 390,
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
      columnWidth: "35%",
      endingShape: "rounded",
      borderRadius: [2,2],
    },
  },
  dataLabels: {
    enabled: false,
  },
  legend: {
    position: "top",
    fontSize: "12px",
    fontFamily: "Inter, sans-serif",
    fontWeight: 600,
  },
  stroke: {
    curve: "smooth",
    width: [5,5],
  },
  // fill: {
  //   colors: undefined,
  //   opacity: [0.1, 1],
  //   type: ["gradient", "gradient"],
  //   gradient: {
  //     shade: "light",
  //     type: "vertical",
  //     shadeIntensity: 0.5,
  //     gradientToColors: undefined,
  //     inverseColors: true,
  //     opacityFrom: 0.7,
  //     opacityTo: 0,
  //     stops: [0, 80, 100],
  //     colorStops: [],
  //   },
  // },
  grid: {
    borderColor: "rgba(107 ,114 ,128,0.1)",
  },
  colors: ["rgb(90,102,241)", "rgb(203,213,225)"],
  yaxis: {
    title: {
      style: {
        color: "#adb5be",
        fontSize: "12px",
        fontFamily: "Inter, sans-serif",
        fontWeight: 500,
        cssClass: "apexcharts-yaxis-label",
      },
    },
    labels: {
      style: {
        colors: "rgb(107 ,114 ,128)",
        fontSize: "12px",
        fontFamily: "Inter, sans-serif",
        fontWeight: 500,
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
var chart = new ApexCharts(document.querySelector("#statistics"), options);
chart.render();
function statistics() {
  chart.updateOptions({
    colors: ["rgb(" + myVarVal + ")", "rgb(203,213,225)"],
  });
}

