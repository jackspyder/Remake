$(document).ready(function() {


    console.log("ayy");
    var forsale = $('#forsale').val().trim();;
    var forparts = $('#forparts').val().trim();
    var storage = $('#storage').val().trim();
    var sold = $('#sold').val().trim();
    var refurbishment = $('#refurbishment').val().trim();

    var ctx = document.getElementById("mycanvas");

    var myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
      labels: [
          "For Sale",
          "For Parts",
          "Storage",
          'Sold',
          'For Refurbishment'
      ],
      datasets: [
          {
              data: [forsale, forparts, storage, sold, refurbishment],
              backgroundColor: [
                  "#36A2EB",
                  "#FF6384",
                  "#DDDDDD",
                  "#16A623",
                  "#E8B10C"
              ],
              hoverBackgroundColor: [
                  "#36A2EB",
                  "#FF6384",
                  "#EEEEEE",
                  "#22FF35",
                  "#FFC20D"
              ]
          }]
        }
    });

});
