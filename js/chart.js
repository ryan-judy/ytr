console.log("loaded")

new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["Average Agent", "Young Team"],
      datasets: [
        {
          label: "Average Days on Market (2017)",
          backgroundColor: ["#292c2f", "#751212"],
          data: [82, 42, 0]
        }
      ]
    },
    options: {
      
      legend: { display: false },
      title: {
        display: true,
        text: 'Average Days on Market (2017)'
      }
    }
});



new Chart(document.getElementById("bar-chart-horizontal"), {
    type: 'horizontalBar',
    data: {
      labels: ["Average Agent", "Young Team",],
      datasets: [
        {
          label: "List vs Sold Price (percentage)",
          backgroundColor: ["#292c2f", "#751212"],
          data: [94,99,50]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Average List vs Sold Price (Percentage)'
      }
    }
});
