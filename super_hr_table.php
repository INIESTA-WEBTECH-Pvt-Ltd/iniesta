<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <!--boostrap css-->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>

<body>
    <!--header section starts-->

  <div class="container-fluid shadow px-4 py-2" >
    <div class="row">
        <div class="col-sm p-1 ">
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
  <!--header section ends-->
    <div class="container-fluid  pr-4 pr-md-5 pl-0  bg-light">
        <div class="row  d-flex justify-content-between">
            <div   class ="col_sec_1">
                <div class="main" id="main">
                    <div class="icon" onclick="clicked()">
                        <i class="fa fa-bars" aria-hidden="true" id="clicked_btn"></i>
                    </div>
                </div>


                <div class="sidebar" id="sidebar">
                    <h3 class="header">My App</h3>
                    <div class="icon1" onclick="clicked()">
                        <i class="fa fa-times" aria-hidden="true" id="clicked_btn"></i>
                    </div>
                    <ul>
                        <li><a href=""><i class="fa fa-th-large" aria-hidden="true"></i>Dashboard</a></li>
                        <li><a href=""><i class="fa fa-link" aria-hidden="true"></i>New Application</a></li>
                        <li><a href=""><i class="fa fa-align-left" aria-hidden="true"></i>Approve</a></li>
                        <li><a href=""><i class="fa fa-calendar" aria-hidden="true"></i>Download</a></li>
                        <li><a href=""><i class="fa fa-question-circle" aria-hidden="true"></i>Attendence</a></li>
                        <li><a href=""><i class="fa fa-th-list" aria-hidden="true"></i>Approve</a></li>
                       

                    </ul>
                    <button class="btn btn-danger mx-5">
                        Log Out
                    </button>
                </div>
            </div>

       
    <div class=" my-4  width bg-light shadow col_sec_2" id='width'>
     <!--table code-->
     <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>
     <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">NUMBER</th>
                    <th scope="col">DEPARTMENT</th>
                    <th scope="col">RECRUITER ID</th>
                    <th scope="col">STATUS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Ravikant</td>
                    <td>abc123@email.com</td>
                    <td>7894561230</td>
                    <td>Developer</td>
                    <td>Simran</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Ravikant</td>
                    <td>abc123@email.com</td>
                    <td>7894561230</td>
                    <td>Developer</td>
                    <td>Simran</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Ravikant</td>
                    <td>abc123@email.com</td>
                    <td>7894561230</td>
                    <td>Developer</td>
                    <td>Simran</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Ravikant</td>
                    <td>abc123@email.com</td>
                    <td>7894561230</td>
                    <td>Developer</td>
                    <td>Simran</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Ravikant</td>
                    <td>abc123@email.com</td>
                    <td>7894561230</td>
                    <td>Developer</td>
                    <td>Simran</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Ravikant</td>
                    <td>abc123@email.com</td>
                    <td>7894561230</td>
                    <td>Developer</td>
                    <td>Simran</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Ravikant</td>
                    <td>abc123@email.com</td>
                    <td>7894561230</td>
                    <td>Developer</td>
                    <td>Simran</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Ravikant</td>
                    <td>abc123@email.com</td>
                    <td>7894561230</td>
                    <td>Developer</td>
                    <td>Simran</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Ravikant</td>
                    <td>abc123@email.com</td>
                    <td>7894561230</td>
                    <td>Developer</td>
                    <td>Simran</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>Ravikant</td>
                    <td>abc123@email.com</td>
                    <td>7894561230</td>
                    <td>Developer</td>
                    <td>Simran</td>
                    <td>Pending</td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
    


   
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
        const toggle = document.getElementById('clicked_btn');
        const sidebar = document.getElementById('sidebar');
        const main = document.getElementById('main');
        const width=document.getElementById('width');
        

        function clicked() {
            if (sidebar.style.display == 'none') {
                sidebar.style.display = 'block';
                main.style.display = 'none';
                sidebar.style.width='280%';
                width.style.width='60%';
               
            }
            else {
                sidebar.style.display = "none";
                main.style.display = 'block';
                sidebar.style.width='70%';
                width.style.width='90%';
            }
        }

    </script>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>