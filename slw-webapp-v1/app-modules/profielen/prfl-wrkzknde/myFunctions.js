function startTime() {
	
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('current_time').innerHTML = "De tijd is: <b>" +
  h + ":" + m + ":" + s + "</b>";
  var t = setTimeout(startTime, 500);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
  
};// End of 'startTime()' function

startTime();