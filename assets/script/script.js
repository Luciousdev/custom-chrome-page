let currentDate = new Date();

let day = currentDate.getDate();
let month = currentDate.getMonth() + 1;
let year = currentDate.getFullYear();

let hours = currentDate.getHours();
let minutes = currentDate.getMinutes();

let formattedDate = day + '/' + month + '/' + year;
let formattedTime = hours + ':' + minutes;

finalTime = formattedDate + ' ' + formattedTime;
document.getElementById('time').innerHTML = finalTime;