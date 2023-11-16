var options = {
  series: [
    {
      name: "Session",
      data: [20, 38, 38, 72, 55, 63, 43, 76, 55, 80, 40, 100],
    },
  ],
  chart: {
    height: 300,
    type: "bar",
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
  plotOptions: {
    bar: {
      columnWidth: "55%",
      endingShape: "rounded",
      borderRadius: 4,
    },
  },
  dataLabels: {
    enabled: false,
  },
  legend: {
    show: false,
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
var chart1 = new ApexCharts(document.querySelector("#audienceReport"), options);
chart1.render();

function audience() {
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
  });
}

// Sessions By Device Chart
var options = {
  series: [1754, 1234, 878, 270],
  labels: ["Mobile", "Tablet", "Desktop", "Others"],
  chart: {
    height: 325,
    type: "donut",
  },
  dataLabels: {
    enabled: false,
  },

  legend: {
    position: "bottom",
    horizontalAlign: "center",
    fontSize: "15px",
    fontWeight: 500,
    labels: {
      color: ["rgb(100, 116, 139)"],
    },
  },
  stroke: {
    show: true,
    curve: "smooth",
    lineCap: "round",
    colors: "#fff",
    width: 0,
    dashArray: 0,
  },
  grid: {
    borderColor: "rgba(107 ,114 ,128,0.1)",
  },
  plotOptions: {
    pie: {
      expandOnClick: false,
      donut: {
        size: "80%",
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
            fontSize: "32px",
            fontWeight: 600,
            offsetY: 8,
            formatter: function (val) {
              return val + "%";
            },
          },
          total: {
            show: true,
            showAlways: true,
            label: "Total",
            fontSize: "25px",
            color: "rgb(100, 116, 139)",
          },
        },
      },
    },
  },
  colors: [
    "rgba(90,102,241, 1)",
    "rgba(96,165,250, 1)",
    "rgba(234,179 ,8, 1)",
    "rgba(203,213,225, 1)",
  ],
};
document.querySelector("#sessions").innerHTML = " ";
var chart = new ApexCharts(document.querySelector("#sessions"), options);
chart.render();

function Sessions() {
  chart.updateOptions({
    colors: [
      "rgba(" + myVarVal + ", 1)",
      "rgba(96,165,250, 1)",
      "rgba(234,179 ,8, 1)",
      "rgba(203,213,225, 1)",
    ],
  });
}

var options = {
  series: [
    {
      data: [44, 55, 41, 64, 22, 43, 21],
    },
    {
      data: [53, 32, 33, 52, 13, 44, 32],
    },
  ],
  chart: {
    type: "bar",
    height: 280,
    toolbar: {
      show: false,
    },
  },
  plotOptions: {
    bar: {
      horizontal: true,
      dataLabels: {
        position: "top",
      },
    },
  },
  grid: {
    borderColor: "rgba(107 ,114 ,128,0.1)",
  },
  colors: ["rgb(90,102,241)", "rgb(203,213,225)"],
  dataLabels: {
    enabled: false,
    offsetX: -6,
    style: {
      fontSize: "12px",
      colors: ["#fff"],
    },
  },
  legend: {
    show: false,
  },
  stroke: {
    show: true,
    width: 1,
    colors: ["#fff"],
  },
  tooltip: {
    shared: true,
    intersect: false,
  },
  xaxis: {
    categories: ["Jan", "feb", "mar", "apr", "jun", "jul", "aug"],
    labels: {
      show: true,
      style: {
        colors: "#8c9097",
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
        colors: "#8c9097",
        fontSize: "11px",
        fontWeight: 600,
        cssClass: "apexcharts-yaxis-label",
      },
    },
  },
};
var chart = new ApexCharts(document.querySelector("#audience"), options);
chart.render();

function audienceOverview() {
  chart.updateOptions({
    colors: ["rgb(" + myVarVal + ")", "rgb(203,213,225)"],
  });
}

var options = {
  series: [40, 40, 20],
  chart: {
    type: "polarArea",
    height: 350,
    width: 450,
  },
  labels: ["Male", "Female", "Others"],
  stroke: {
    colors: ["#fff"],
  },
  fill: {
    opacity: 0.8,
  },
  legend: {
    position: "bottom",
  },
  colors: ["#5e76a6", "#d5dde7", "#a68e5e"],
  responsive: [
    {
      breakpoint: 480,
      options: {
        chart: {
          width: 200,
        },
        legend: {
          position: "bottom",
        },
      },
    },
  ],
};
var chart = new ApexCharts(document.querySelector("#session2"), options);
chart.render();

function session2() {
  chart.updateOptions({
    colors: ["rgb(" + myVarVal + ")", "rgb(203,213,225)", "rgb(96,165,250)"],
  });
}
