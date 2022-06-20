// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var hadir = document.getElementById("hadir").innerHTML;
var tidakhadir = document.getElementById("tidakhadir").innerHTML;
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Tidak Mengikuti Apel","Mengikuti Apel"],
    datasets: [{
      data: [tidakhadir, hadir],
      backgroundColor: ['#c8271c','#1cc88a'],
      hoverBackgroundColor: ['#17a673','#d9534f'],
      hoverBorderColor: "rgba(236, 234)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
