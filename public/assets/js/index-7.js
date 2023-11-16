"use strict";
// Project Analysis Chart
var options = {
  series: [
    {
      name: "Projects",
      type: "column",
      data: [1.8, 2.5, 2.5, 1.5, 2.5, 2.8, 3.8],
    },
    {
      name: "Tasks",
      type: "column",
      data: [1.1, 2.2, 3.1, 4, 4.1, 4.9, 6.5],
    },
    {
      name: "Revenue",
      type: "line",
      data: [20, 29, 37, 35, 44, 43, 50],
    },
  ],
  chart: {
    toolbar: {
      show: false,
    },
    height: 370,
    type: "line",
    stacked: false,
    fontFamily: "Poppins, Arial, sans-serif",
  },
  grid: {
    borderColor: "rgba(107 ,114 ,128,0.1)",
    strokeDashArray: 3,
  },
  dataLabels: {
    enabled: false,
  },
  title: {
    text: undefined,
  },
  xaxis: {
    categories: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
  },
  yaxis: [
    {
      show: true,
      axisTicks: {
        show: true,
      },
      axisBorder: {
        show: false,
        color: "#4eb6d0",
      },
      labels: {
        style: {
          colors: "#4eb6d0",
        },
      },
      title: {
        text: undefined,
      },
      tooltip: {
        enabled: true,
      },
    },
    {
    show: false,
      seriesName: "Projects",
      opposite: true,
      axisTicks: {
        show: true,
      },
      axisBorder: {
        show: false,
      },
      labels: {
        style: {
          colors: "#00E396",
        },
      },
      title: {
        text: undefined,
      },
    },
    {
        show: false,
      seriesName: "Revenue",
      opposite: true,
      axisTicks: {
        show: true,
      },
      axisBorder: {
        show: false,
      },
      labels: {
        show: false,
      },
      title: {
        text: undefined,
      },
    },
  ],
  tooltip: {
    enabled: true,
  },
  colors: ["#5a66f1", "#60a5fa", "#d5dde7"],
  legend: {
    show: true,
    position: "top",
    offsetX: 40,
    fontSize: "13px",
    fontWeight: "normal",
    labels: {
      colors: "#acb1b1",
    },
    markers: {
      width: 10,
      height: 10,
    },
  },
  stroke: {
    width: [0, 0, 1.5],
    curve: "straight",
    dashArray: [0, 0, 0],
  },
  plotOptions: {
    bar: {
      columnWidth: "35%",
      borderRadius: 3,
    },
  },
};

var chart1 = new ApexCharts(
  document.querySelector("#projectAnalysis"),
  options
);
chart1.render();

function projectAnalysis() {
  chart1.updateOptions({
    colors: ["rgb(" + myVarVal + ")", "#60a5fa", "#d5dde7"],
  });
}
