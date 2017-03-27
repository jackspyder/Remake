$(document).ready(function() {


    console.log("ayy");
    var forsale = $('#forsale').val().trim();;
    var forparts = $('#forparts').val().trim();
    var storage = $('#storage').val().trim();

    var ctx = document.getElementById("mycanvas");

    var myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
      labels: [
          "For Sale",
          "For Parts",
          "Storage"
      ],
      datasets: [
          {
              data: [forsale, forparts, storage],
              backgroundColor: [
                  "#36A2EB",
                  "#FF6384",
                  "#DDDDDD"
              ],
              hoverBackgroundColor: [
                  "#36A2EB",
                  "#FF6384",
                  "#EEEEEE"
              ]
          }]
        }
    });

});
