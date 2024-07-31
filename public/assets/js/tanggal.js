if (typeof(addtime) == "undefined")
var addtime = true;
days = new Array("<font color='red'>Minggu</font>","Senin","Selasa","Rabu","Kamis","<font color='#1f9d81'><b>Jum'at</b></font>","Sabtu");
months = new Array("Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");

function renderDate(){
var mydate = new Date();
var year;
if (mydate.getFullYear)
	year = mydate.getFullYear();
else {
	year = mydate.getYear();
	if (year < 100)
		year = parseInt(2000 + year);
	else
		year = parseInt(1900 + year);
}
var day = mydate.getDay();
var month = mydate.getMonth();
var daym = mydate.getDate();
if (daym < 10)
	daym = "0" + daym;
var hours = mydate.getHours();
var minutes = mydate.getMinutes();
var dn = "AM";
if (hours >= 12) {
	dn = "PM";
	hours = hours - 12;
}
if (hours == 0)
	hours = 12;
if (minutes <= 9)
	minutes = "0" + minutes;
document.writeln(days[day],", ",daym," ",months[month]," ",year);
}
renderDate();
