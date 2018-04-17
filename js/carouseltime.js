var today = new Date();
var day   = today.getDate();
var month = today.getMonth()+1;
var year  = today.getFullYear();
var hour  = today.getHours();
var min  = today.getMinutes();

if (day < 10) {
  day = '0' + day;
}
if (month < 10) {
  month = '0' + month;
}
if (hour < 10 ) {
  hour = '0' + hour;
}
if (min < 10) {
  min = '0' + min;
}

today = year + '' + month + '' + day + '' + hour + '' + min;
