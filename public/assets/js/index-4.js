var options = {
  series: [
    {
      name: "Total Candidates",
      type: "column",
      data: [20, 38, 38, 72, 55, 63, 43, 76, 55, 80, 40, 80],
    },
    {
      name: "Total Candidates",
      type: "area",
      data: [85, 65, 75, 38, 85, 35, 62, 40, 40, 64, 50, 89],
    },
    {
      name: "Shortlisted",
      type: "line",
      data: [25, 48, 48, 82, 65, 73, 53, 86, 65, 90, 50, 90],
    },
  ],
  chart: {
    height: 240,
    type: "line",
    stacked: false,
    zoom: {
      enabled: false,
    },
    toolbar: {
      show: false,
    },
  },
  grid: {
    borderColor: "rgba(107 ,114 ,128,0.1)",
  },
  colors: ["rgb(90,102,241)", "rgb(203,213,225)","rgb(96, 165 ,250)"],
  legend: {
    show: false,
  },
  stroke: {
    width: [0, 0, 2],
    curve: "smooth",
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: "20%",
      endingShape: "rounded",
      borderRadius: 5,
    },
  },

  fill: {
    opacity: [0.85, 0.25, 1],
    gradient: {
      inverseColors: false,
      shade: "light",
      type: "vertical",
      opacityFrom: 0.85,
      opacityTo: 0.55,
      stops: [0, 100, 100, 100],
    },
  },
  markers: {
    size: 0,
  },
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
document.querySelector("#subscriptionOverview").innerHTML = " ";
var chart = new ApexCharts(
  document.querySelector("#subscriptionOverview"),
  options
);
chart.render();

var options1 = {
  series: [1754, 1234],
  labels: ["Accepted", "Rejected"],
  chart: {
    height: 220,
    type: "donut",
    dropShadow: {
      enabled: true,
      enabledOnSeries: undefined,
      top: 5,
      left: 0,
      blur: 3,
      color: "#525050",
      opacity: 0.1,
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
    curve: "smooth",
    lineCap: "round",
    colors: "#fff",
    width: 0,
    dashArray: 0,
  },
  plotOptions: {
    pie: {
      expandOnClick: false,
      donut: {
        size: "90%",
        background: "transparent",
        labels: {
          show: true,
          name: {
            show: true,
            fontSize: "20px",
            color: "#495057",
            offsetY: -4,
          },
          value: {
            show: true,
            fontSize: "18px",
            color: undefined,
            offsetY: 8,
            formatter: function (val) {
              return val + "%";
            },
          },
          total: {
            show: true,
            showAlways: true,
            label: "Total",
            fontSize: "22px",
            fontWeight: 600,
            color: "#495057",
          },
        },
      },
    },
  },

  colors: ["rgb(90,102,241)", "#60a5fa"],
};
document.querySelector("#candidates-chart").innerHTML = " ";
var chart1 = new ApexCharts(
  document.querySelector("#candidates-chart"),
  options1
);
chart1.render();

function subOverview() {
  chart.updateOptions({
    colors: ["rgb(" + myVarVal + ")", "#d1dae5","rgb(96, 165 ,250)"],
  });
}
function Candidates() {
  chart1.updateOptions({
    colors: ["rgb(" + myVarVal + ")", "#60a5fa"],
  });
}
