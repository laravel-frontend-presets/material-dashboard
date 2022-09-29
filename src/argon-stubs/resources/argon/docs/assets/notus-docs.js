// function for init Tailwind ChartJS
(function () {
  let lineConfig = {
    type: "line",
    data: {
      labels: [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
      ],
      datasets: [
        {
          label: new Date().getFullYear(),
          backgroundColor: "#4c51bf",
          borderColor: "#4c51bf",
          data: [65, 78, 66, 44, 56, 67, 75],
          fill: false,
        },
        {
          label: new Date().getFullYear() - 1,
          fill: false,
          backgroundColor: "#fff",
          borderColor: "#fff",
          data: [40, 68, 86, 74, 56, 60, 87],
        },
      ],
    },
    options: {
      maintainAspectRatio: false,
      responsive: true,
      title: {
        display: false,
        text: "Sales Charts",
        fontColor: "white",
      },
      legend: {
        labels: {
          fontColor: "white",
        },
        align: "end",
        position: "bottom",
      },
      tooltips: {
        mode: "index",
        intersect: false,
      },
      hover: {
        mode: "nearest",
        intersect: true,
      },
      scales: {
        xAxes: [
          {
            ticks: {
              fontColor: "rgba(255,255,255,.7)",
            },
            display: true,
            scaleLabel: {
              display: false,
              labelString: "Month",
              fontColor: "white",
            },
            gridLines: {
              display: false,
              borderDash: [2],
              borderDashOffset: [2],
              color: "rgba(33, 37, 41, 0.3)",
              zeroLineColor: "rgba(0, 0, 0, 0)",
              zeroLineBorderDash: [2],
              zeroLineBorderDashOffset: [2],
            },
          },
        ],
        yAxes: [
          {
            ticks: {
              fontColor: "rgba(255,255,255,.7)",
            },
            display: true,
            scaleLabel: {
              display: false,
              labelString: "Value",
              fontColor: "white",
            },
            gridLines: {
              borderDash: [3],
              borderDashOffset: [3],
              drawBorder: false,
              color: "rgba(255, 255, 255, 0.15)",
              zeroLineColor: "rgba(33, 37, 41, 0)",
              zeroLineBorderDash: [2],
              zeroLineBorderDashOffset: [2],
            },
          },
        ],
      },
    },
  };
  let barConfig = {
    type: "bar",
    data: {
      labels: [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
      ],
      datasets: [
        {
          label: new Date().getFullYear(),
          backgroundColor: "#ed64a6",
          borderColor: "#ed64a6",
          data: [30, 78, 56, 34, 100, 45, 13],
          fill: false,
          barThickness: 8,
        },
        {
          label: new Date().getFullYear() - 1,
          fill: false,
          backgroundColor: "#4c51bf",
          borderColor: "#4c51bf",
          data: [27, 68, 86, 74, 10, 4, 87],
          barThickness: 8,
        },
      ],
    },
    options: {
      maintainAspectRatio: false,
      responsive: true,
      title: {
        display: false,
        text: "Orders Chart",
      },
      tooltips: {
        mode: "index",
        intersect: false,
      },
      hover: {
        mode: "nearest",
        intersect: true,
      },
      legend: {
        labels: {
          fontColor: "rgba(0,0,0,.4)",
        },
        align: "end",
        position: "bottom",
      },
      scales: {
        xAxes: [
          {
            display: false,
            scaleLabel: {
              display: true,
              labelString: "Month",
            },
            gridLines: {
              borderDash: [2],
              borderDashOffset: [2],
              color: "rgba(33, 37, 41, 0.3)",
              zeroLineColor: "rgba(33, 37, 41, 0.3)",
              zeroLineBorderDash: [2],
              zeroLineBorderDashOffset: [2],
            },
          },
        ],
        yAxes: [
          {
            display: true,
            scaleLabel: {
              display: false,
              labelString: "Value",
            },
            gridLines: {
              borderDash: [2],
              drawBorder: false,
              borderDashOffset: [2],
              color: "rgba(33, 37, 41, 0.2)",
              zeroLineColor: "rgba(33, 37, 41, 0.15)",
              zeroLineBorderDash: [2],
              zeroLineBorderDashOffset: [2],
            },
          },
        ],
      },
    },
  };
  // we are personalizing the charts a bit for each framework
  // lines
  let lineAngularChart = document.getElementById("line-chart-angular");
  let lineJSChart = document.getElementById("line-chart-javascript");
  let lineNextJSChart = document.getElementById("line-chart-nextjs");
  let lineReactChart = document.getElementById("line-chart-react");
  let lineSvelteChart = document.getElementById("line-chart-svelte");
  let lineVueChart = document.getElementById("line-chart-vue");
  if (lineAngularChart) {
    ctx = lineAngularChart.getContext("2d");
    window.myBar = new Chart(ctx, lineConfig);
  }
  if (lineJSChart) {
    var ctx = lineJSChart.getContext("2d");
    window.myLine = new Chart(ctx, lineConfig);
  }
  if (lineNextJSChart) {
    ctx = lineNextJSChart.getContext("2d");
    window.myBar = new Chart(ctx, lineConfig);
  }
  if (lineReactChart) {
    ctx = lineReactChart.getContext("2d");
    window.myBar = new Chart(ctx, lineConfig);
  }
  if (lineSvelteChart) {
    ctx = lineSvelteChart.getContext("2d");
    window.myBar = new Chart(ctx, lineConfig);
  }
  if (lineVueChart) {
    ctx = lineVueChart.getContext("2d");
    window.myBar = new Chart(ctx, lineConfig);
  }
  // bars
  let barAngularChart = document.getElementById("bar-chart-angular");
  let barJSChart = document.getElementById("bar-chart-javascript");
  let barNextJSChart = document.getElementById("bar-chart-nextjs");
  let barReactChart = document.getElementById("bar-chart-react");
  let barSvelteChart = document.getElementById("bar-chart-svelte");
  let barVueChart = document.getElementById("bar-chart-vue");
  if (barAngularChart) {
    ctx = barAngularChart.getContext("2d");
    window.myBar = new Chart(ctx, barConfig);
  }
  if (barJSChart) {
    ctx = barJSChart.getContext("2d");
    window.myBar = new Chart(ctx, barConfig);
  }
  if (barNextJSChart) {
    ctx = barNextJSChart.getContext("2d");
    window.myBar = new Chart(ctx, barConfig);
  }
  if (barReactChart) {
    ctx = barReactChart.getContext("2d");
    window.myBar = new Chart(ctx, barConfig);
  }
  if (barSvelteChart) {
    ctx = barSvelteChart.getContext("2d");
    window.myBar = new Chart(ctx, barConfig);
  }
  if (barVueChart) {
    ctx = barVueChart.getContext("2d");
    window.myBar = new Chart(ctx, barConfig);
  }
})();

// function for init tailwind google maps
(function () {
  /* Map initialisation */
  let google = window.google;
  let map;
  let color = "#DDD";
  if(document.getElementById("map-canvas-angular")){
    color = "#feb2b2";
    map = document.getElementById("map-canvas-angular");
  } else if(document.getElementById("map-canvas-javascript")){
    color = "#fbb6ce";
    map = document.getElementById("map-canvas-javascript");
  } else if(document.getElementById("map-canvas-nextjs")){
    color = "#cbd5e0";
    map = document.getElementById("map-canvas-nextjs");
  } else if(document.getElementById("map-canvas-react")){
    color = "#4299e1";
    map = document.getElementById("map-canvas-react");
  } else if(document.getElementById("map-canvas-svelte")){
    color = "#ed8936";
    map = document.getElementById("map-canvas-svelte");
  } else if(document.getElementById("map-canvas-vue")){
    color = "#5e72e4";
    map = document.getElementById("map-canvas-vue");
  }

  if(map){
    let lat = map.getAttribute("data-lat");
    let lng = map.getAttribute("data-lng");

    const myLatlng = new google.maps.LatLng(lat, lng);
    const mapOptions = {
      zoom: 12,
      scrollwheel: false,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: [
        {
          featureType: "administrative",
          elementType: "labels.text.fill",
          stylers: [{ color: "#444444" }],
        },
        {
          featureType: "landscape",
          elementType: "all",
          stylers: [{ color: "#f2f2f2" }],
        },
        {
          featureType: "poi",
          elementType: "all",
          stylers: [{ visibility: "off" }],
        },
        {
          featureType: "road",
          elementType: "all",
          stylers: [{ saturation: -100 }, { lightness: 45 }],
        },
        {
          featureType: "road.highway",
          elementType: "all",
          stylers: [{ visibility: "simplified" }],
        },
        {
          featureType: "road.arterial",
          elementType: "labels.icon",
          stylers: [{ visibility: "off" }],
        },
        {
          featureType: "transit",
          elementType: "all",
          stylers: [{ visibility: "off" }],
        },
        {
          featureType: "water",
          elementType: "all",
          stylers: [{ color: color }, { visibility: "on" }],
        },
      ],
    };

    map = new google.maps.Map(map, mapOptions);

    const marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      animation: google.maps.Animation.DROP,
      title: "Hello World!",
    });

    const contentString =
      '<div class="info-window-content"><h2>Notus</h2>' +
      "<p>A beautiful UI Kit and Admin for Tailwind CSS. It is Free and Open Source.</p></div>";

    const infowindow = new google.maps.InfoWindow({
      content: contentString,
    });

    google.maps.event.addListener(marker, "click", function () {
      infowindow.open(map, marker);
    });
  }
})();
