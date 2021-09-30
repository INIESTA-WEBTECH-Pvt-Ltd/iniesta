<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
<div class="container-fluid shadow">
    <div class="row">
        <div class="col-sm p-1 m-1">
            <a class="btn btn-primary"  href="#!" role="button"><i class="fa fa-facebook"></i></a>
            <a class="btn btn-primary"  href="#!" role="button"><i class="fa fa-twitter"></i></a>
            <a class="btn btn-primary"  href="#!" role="button"><i class="fa fa-linkedin"></i></a>
            <a class="btn btn-primary"  href="#!" role="button"><i class="fa fa-github"></i></a>
        </div>
        <div class="col-sm text-center pt-1">
            <h3>Welcome Back!</h3>
        </div>
        <div class="col-sm text-right">
            <span id="date"></span>
            <span id='time'></span><br>
            <span id="InternName">Vaishali Limje</span>
        </div>
    </div>
</div>

<!-- Script for Showing date and time -->
<script>
    var today = new Date();
    var date = +today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear();
    document.getElementById('date').innerHTML = date;

    setInterval(showTime, 1000);
    function showTime() {
	let time = new Date();
	let hour = time.getHours();
	let min = time.getMinutes();
	let sec = time.getSeconds();
	am_pm = "AM";

	if (hour > 12) {
		hour -= 12;
		am_pm = "PM";
	}
	if (hour == 0) {
		hr = 12;
		am_pm = "AM";
	}

	hour = hour < 10 ? "0" + hour : hour;
	min = min < 10 ? "0" + min : min;
	sec = sec < 10 ? "0" + sec : sec;

	let currentTime = hour + ":"
			+ min + ":" + sec +" " +  am_pm;

	document.getElementById("time")
			.innerHTML = currentTime;
    }
    showTime();
</script>

