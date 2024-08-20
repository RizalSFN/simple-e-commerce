// import ApexCharts from "apexcharts";

// const areaOptions = {
//     chart: {
//       height: "100%",
//       maxWidth: "100%",
//       type: "area",
//       fontFamily: "Inter, sans-serif",
//       dropShadow: {
//         enabled: false,
//       },
//       toolbar: {
//         show: false,
//       },
//     },
//     tooltip: {
//       enabled: true,
//       x: {
//         show: false,
//       },
//     },
//     fill: {
//       type: "gradient",
//       gradient: {
//         opacityFrom: 0.55,
//         opacityTo: 0,
//         shade: "#1C64F2",
//         gradientToColors: ["#1C64F2"],
//       },
//     },
//     dataLabels: {
//       enabled: false,
//     },
//     stroke: {
//       width: 6,
//     },
//     grid: {
//       show: false,
//       strokeDashArray: 4,
//       padding: {
//         left: 2,
//         right: 2,
//         top: 0
//       },
//     },
//     series: [
//       {
//         name: "New users",
//         data: [6500, 6418, 6456, 6526, 6356, 6456],
//         color: "#1A56DB",
//       },
//     ],
//     xaxis: {
//       categories: ['01 February', '02 February', '03 February', '04 February', '05 February', '06 February', '07 February'],
//       labels: {
//         show: false,
//       },
//       axisBorder: {
//         show: false,
//       },
//       axisTicks: {
//         show: false,
//       },
//     },
//     yaxis: {
//       show: false,
//     },
//   }
  
//   if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
//     const chart = new ApexCharts(document.getElementById("area-chart"), areaOptions);
//     chart.render();
//   }

  const barOptions = {
    series: [
      {
        name: "Income",
        color: "#31C48D",
        data: ["1420", "1620", "1820", "1420", "1650"],
      },
      {
        name: "Expense",
        data: ["788", "810", "866", "788", "1100"],
        color: "#F05252",
      }
    ],
    chart: {
      sparkline: {
        enabled: false,
      },
      type: "bar",
      width: "100%",
      height: 400,
      toolbar: {
        show: false,
      }
    },
    fill: {
      opacity: 1,
    },
    plotOptions: {
      bar: {
        horizontal: true,
        columnWidth: "100%",
        borderRadiusApplication: "end",
        borderRadius: 6,
        dataLabels: {
          position: "top",
        },
      },
    },
    legend: {
      show: true,
      position: "bottom",
    },
    dataLabels: {
      enabled: false,
    },
    tooltip: {
      shared: true,
      intersect: false,
      formatter: function (value) {
        return "$" + value
      }
    },
    xaxis: {
      labels: {
        show: true,
        style: {
          fontFamily: "Inter, sans-serif",
          cssClass: 'text-xs font-normal fill-gray-300 dark:fill-gray-400'
        },
        formatter: function(value) {
          return "$" + value
        }
      },
      categories: ["Jul", "Aug", "Sep", "Oct", "Nov"],
      axisTicks: {
        show: false,
      },
      axisBorder: {
        show: false,
      },
    },
    yaxis: {
      labels: {
        show: true,
        style: {
          fontFamily: "Inter, sans-serif",
          cssClass: 'text-xs font-normal fill-gray-300 dark:fill-gray-400'
        }
      }
    },
    grid: {
      show: true,
      strokeDashArray: 4,
      padding: {
        left: 2,
        right: 2,
        top: -20
      },
    },
    fill: {
      opacity: 1,
    }
  }
  
  if(document.getElementById("bar-chart") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("bar-chart"), barOptions);
    chart.render();
  }

  
const getChartOptions = () => {
    return {
      series: [52.8, 26.8, 20.4],
      colors: ["#1C64F2", "#16BDCA", "#9061F9"],
      chart: {
        height: 420,
        width: "100%",
        type: "pie",
      },
      stroke: {
        colors: ["white"],
        lineCap: "",
      },
      plotOptions: {
        pie: {
          labels: {
            show: true,
          },
          size: "100%",
          dataLabels: {
            offset: -25
          }
        },
      },
      labels: ["Direct", "Organic search", "Referrals"],
      dataLabels: {
        enabled: true,
        style: {
          fontFamily: "Inter, sans-serif",
        },
      },
      legend: {
        position: "bottom",
        fontFamily: "Inter, sans-serif",
      },
      yaxis: {
        labels: {
          formatter: function (value) {
            return value + "%"
          },
        },
      },
      xaxis: {
        labels: {
          formatter: function (value) {
            return value  + "%"
          },
        },
        axisTicks: {
          show: false,
        },
        axisBorder: {
          show: false,
        },
      },
    }
  }
  
  if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("pie-chart"), getChartOptions());
    chart.render();
  }
  
  