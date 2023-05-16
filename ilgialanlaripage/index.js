const url = "https://api.openweathermap.org/data/2.5/weather?q=";
const key = "1f02d327e5a7418ce7bd3087aef97337";
var cityName = "Berlin";
const searchBar = document.querySelector(".searchBar input");
const searchBtn = document.querySelector(".searchBar button");

searchBtn.addEventListener("click", () => {
  checkWeather(searchBar.value);
});

async function checkWeather(city) {
  const response = await fetch(url + city + "&appid=" + key);
  var data = await response.json();
  console.log(data);
  document.querySelector(".city").innerHTML = data.name;
  document.querySelector(".temp").innerHTML = data.main.temp + " K";
  document.querySelector(".minmax").innerHTML =
    data.main.temp_min + " K / " + data.main.temp_min + " K";
  document.querySelector(".desc").innerHTML = data.weather[0].description;
}

checkWeather(cityName);
