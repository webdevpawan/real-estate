const API_KEY = "5b49aeb08cdcb9d5b151ceaefb7372fa";

let inputs = document.getElementsByClassName("geolocation");
if ("geolocation" in navigator) {
  navigator.geolocation.getCurrentPosition(function (position) {
    const lat = position.coords.latitude;
    const lon = position.coords.longitude;

    fetch(
      `http://api.openweathermap.org/geo/1.0/reverse?lat=${lat}&lon=${lon}&appid=${API_KEY}`
    )
      .then((response) => response.json())
      .then((data) => {
        for (var i = 0; i < inputs.length; i++) {
          inputs[i].value = data[0].name;
        }
      });
  });
}

let ipInputs = document.getElementsByClassName("user_ip");
fetch("https://ipapi.co/json/")
  .then((response) => response.json())
  .then((data) => {
    for (var i = 0; i < ipInputs.length; i++) {
      ipInputs[i].value = data.ip;
    }
  })
  .catch((error) => console.error(error));
