console.log("loaded")

new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["Individal Agent", "Young Team"],
      datasets: [
        {
          label: "Average Sales Price",
          backgroundColor: ["#292c2f", "#751212"],
          data: [125400, 256000, 0]
        }
      ]
    },
    options: {
      
      legend: { display: false },
      title: {
        display: true,
        text: 'Average Sales Price'
      }
    }
});