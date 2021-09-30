<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sidebar Dashboard Template With Sub Menu</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <!--boostrap css-->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>

<body>

    <!--wrapper start-->
    <div class="wrapper">
        <!--header menu start-->
        <div class="header">
            <div class="header-menu">
                <div class="title">INIESTA <span>WEBTECH</span></div>
                <div class="sidebar-btn">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="date">
                    <span id="date"></span>
                    <span id='time'></span><br>
                    <span id="InternName">Vaishali Limje</span>
                </div>
            </div>
        </div>
        <!--header menu end-->
        <!--sidebar start-->
        <div class="sidebar">
            <div class="sidebar-menu">

                <li class="item">
                    <a href="#" class="menu-btn">
                    <i class="fa fa-tasks" aria-hidden="true"></i><span>Today's Task</span>
                    </a>
                </li>
                <li class="item" id="profile">
                    <a href="#profile" class="menu-btn">
                        <i class="fas fa-user-circle"></i><span>Profile <i
                                class="fas fa-chevron-left drop-down"></i></span>
                    </a>

                </li>
                <li class="item" id="messages">
                    <a href="#messages" class="menu-btn">
                    <i class="fa fa-download" aria-hidden="true"></i><span>Download<i
                                class="fas fa-chevron-left drop-down"></i></span>
                    </a>

                </li>
                <li class="item" id="settings">
                    <a href="#settings" class="menu-btn">
                        <i class="fas fa-info-circle"></i><span>Attendance<i class="fas fa-chevron-left drop-down"></i></span>
                    </a>

                </li>
                <li class="item">
                    <a href="#" class="menu-btn">
                    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Leave</span>
                    </a>
                </li>
            </div>
        </div>
        <!--sidebar end-->
        <!--main container start-->
        <div class="main-container">
            <form class="needs-validation width mx-auto bg-light shadow p-4" novalidate>
                <h5>PERSONAL DETAILS :</h5>
                <div class="form-row d-flex justify-content-between">
                    <div class="col-md-4 mb-1 ">
                        <label for="validationCustom01">Name :</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Enter  Name"
                            value="" required>
                        <div class="valid-feedback">
                            This field is required
                        </div>
                    </div>
                    <div class="col-md-4 mb-1">
                        <label for="validationCustom02">Address :</label>
                        <input type="address" class="form-control" id="validationCustom02" placeholder="Enter Address"
                            value="" required>
                        <div class="valid-feedback">
                            This field is required
                        </div>
                    </div>
                </div>
                <div class="form-row  justify-content-between d-flex">
                    <div class="col-md-4  mb-1">
                        <label for="validationCustom01">Number :</label>
                        <input type="number" class="form-control" id="validationCustom01" placeholder=" Enter Number"
                            value="" required>
                        <div class="valid-feedback">
                            This field is required
                        </div>
                    </div>
                    <div class="col-md-4  mb-1">
                        <label for="validationCustom02">Email :</label>
                        <input type="email" class="form-control" id="validationCustom02" placeholder="Enter Email"
                            value="" required>
                        <div class="valid-feedback">
                            This field is required
                        </div>
                    </div>
                </div>
                <div class="form-row justify-content-between d-flex">
                    <div class="col-md-4 mb-1">
                        <label for="validationCustom01">Password :</label>
                        <input type="password" class="form-control" id="validationCustom01" placeholder=" Password"
                            value="" required>
                        <div class="valid-feedback">
                            This field is required.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Confirm Password :</label>
                        <input type="password" class="form-control" id="validationCustom02"
                            placeholder="Confirm passsword" value="" required>
                        <div class="valid-feedback">
                            This field is required.
                        </div>
                    </div>
                </div>
                <h5>EDUCATION / SKILLS :</h5>
                <div class="form-row justify-content-between d-flex">
                    <div class="col-md-4 mb-1">
                        <label for="validationCustom01">12th Passing year :</label>
                        <select class="form-control" id="ddlYears"></select>
                        <div class="valid-feedback">
                            This field is required.
                        </div>
                    </div>
                    <div class="col-md-4 mb-1">
                        <label for="validationCustom02">Graduation Passing year :</label>
                        <select class="form-control" id="ddlYears1"></select>
                        <div class="valid-feedback">
                            This field is required.
                        </div>
                    </div>
                </div>
                <div class="form-row justify-content-between d-flex">
                    <div class="col-md-4 mb-1">
                        <label for="validationCustom01">Skills : </label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="" value=""
                            required>
                        <div class="valid-feedback">
                            This field is required.
                        </div>
                    </div>
                    <div class="col-md-4 mb-1">
                        <label for="validationCustom02">College name :</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="" value=""
                            required>
                        <div class="valid-feedback">
                            This field is required.
                        </div>
                    </div>
                </div>
                <h5>INTERNSHIP DETAILS :</h5>

                <div class="mb-1 row">
                    <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Joining Date
                        :</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control form-control-sm" id="validationCustom02"
                            required>
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Department
                        :</label>
                    <div class="col-sm-9 col-md-8">
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Choose...</option>
                            <option value="1">Web development</option>
                            <option value="2">Graphic designer</option>
                            <option value="3">digital marketing</option>
                            <option value="4">Data analysis</option>
                            <option value="5">App development</option>
                        </select>
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Duration :</label>
                    <div class="col-sm-9 col-md-8">
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Choose...</option>
                            <option value="1">1 months</option>
                            <option value="2">2 months</option>
                            <option value="3">3 months</option>
                            <option value="4">6 months</option>

                        </select>
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Reporting
                        Manager</label>
                    <div class="col-sm-9 col-md-8">
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Choose...</option>
                            <option value="1">HR</option>
                            <option value="2">Linkedin</option>


                        </select>
                    </div>
                </div>
        </div>
        <!--main container end-->
    </div>
    <!--wrapper end-->

    <script type="text/javascript">
        $(document).ready(function () {
            $(".sidebar-btn").click(function () {
                $(".wrapper").toggleClass("collapsed");
            });
        });

        


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

        //  Drop Dwon Menu Script for Passing And Joining Year -->
    window.onload = function() {
        var ddlYears = document.getElementById("ddlYears");
        var ddlYears1 = document.getElementById("ddlYears1");
    
        var currentYear = (new Date()).getFullYear();
    
        for (var i = currentYear; i >= 1990; i--) {
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            ddlYears.appendChild(option);
        }
        for (var i = currentYear; i <= 2025; i++) {
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            ddlYears1.appendChild(option);
        }
        };

    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>

</html>