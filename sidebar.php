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

 <?php include 'header.php';?>
  <!--header section ends-->
  <div class="container-fluid  pr-4 pr-md-5 pl-0  bg-light">
    <div class="row  d-flex justify-content-between ">
    <!--sidemenu-->
    <?php include 'sidemenu.php';?>

      <div class=" my-4 col_sec_2 width bg-light shadow" id="width">
        <form class="needs-validation width mx-auto bg-light  p-2 p-md-4" novalidate>

          <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <div class="mb-3 row">
                <label for="validationCustom02" class="col-sm-3 col-md-4 col-form-label col-form-label-sm">Name</label>
                <div class="col-sm-9 col-md-8">
                  <input type="text" class="form-control form-control-sm" id="validationCustom02" required
                    placeholder="Enter Name:">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="validationCustom02" class="col-sm-3 col-md-4 col-form-label col-form-label-sm">Email
                </label>
                <div class="col-sm-9 col-md-8">
                  <input type="email" class="form-control form-control-sm" id="validationCustom02" required
                    placeholder="Enter Email">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="validationCustom02" class="col-sm-3 col-md-4 col-form-label col-form-label-sm">Mobile
                </label>
                <div class="col-sm-9 col-md-8">
                  <input type="text" class="form-control form-control-sm" id="validationCustom02" required
                    placeholder="Mobile">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="validationCustom02"
                  class="col-sm-3 col-md-4 col-form-label col-form-label-sm">Password</label>
                <div class="col-sm-9 col-md-8">
                  <input type="password" class="form-control form-control-sm" id="validationCustom02" required
                    placeholder="Enter Password ">
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <div class="mb-3 row">
                <label for="validationCustom02"
                  class="col-sm-3 col-md-4 col-form-label col-form-label-sm">Education</label>
                <div class="col-sm-9 col-md-8">
                  <input type="text" class="form-control form-control-sm" id="validationCustom02" required
                    placeholder="Enter Education">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="validationCustom02" class="col-sm-3 col-md-4 col-form-label col-form-label-sm">Skills
                </label>
                <div class="col-sm-9 col-md-8">
                  <input type="email" class="form-control form-control-sm" id="validationCustom02" required
                    placeholder="Enter Skills">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="validationCustom02" class="col-sm-3 col-md-4 col-form-label col-form-label-sm">Address
                </label>
                <div class="col-sm-9 col-md-8">
                  <input type="text" class="form-control form-control-sm" id="validationCustom02" required
                    placeholder="Address">
                </div>
              </div>

            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <div class="mb-2 row">
                <label for="validationCustom02" class="col-sm-3 col-md-4 col-form-label col-form-label-sm">Joining
                  Date</label>
                <div class="col-sm-9 col-md-8">
                  <input type="text" class="form-control form-control-sm" id="validationCustom02" required
                    placeholder="Enter Joining Date:">
                </div>
              </div>
              <div class="mb-2 row">
                <label for="validationCustom02" class="col-sm-3 col-md-4 col-form-label col-form-label-sm">Completion
                  date </label>
                <div class="col-sm-9 col-md-8">
                  <input type="email" class="form-control form-control-sm" id="validationCustom02" required
                    placeholder="Enter Completion date">
                </div>
              </div>
              <div class="mb-2 row">
                <label for="validationCustom02" class="col-sm-3 col-md-4 col-form-label col-form-label-sm"
                  aria-labelledby="dropdownMenu2">Department </label>
                <div class="dropdown">
                  <button class="px-2  py-1 ml-3 rounded  dropdown-toggle" type="button" id="dropdownMenu2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select Department
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">Web development</button>
                    <button class="dropdown-item" type="button">Web designing</button>
                    <button class="dropdown-item" type="button">App development</button>
                    <button class="dropdown-item" type="button">Data analysis</button>
                    <button class="dropdown-item" type="button">Digital Marketing</button>
                  </div>
                </div>
              </div>
              <div class="mb-2 row">
                <label for="validationCustom02" class="col-sm- col-md-4 col-form-label col-form-label-sm">Reporting
                  Manager</label>
                <div class="col-sm-9 col-md-8">
                  <input type="text" class="form-control form-control-sm" id="validationCustom02" required
                    placeholder="Enter Reporting Manager name ">
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">


            </div>
          </div>

          <button class="btn btn-primary" type="submit">edit and update</button>
      </div>
    </div>
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