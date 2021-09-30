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
                    <div class="title">INIESTA  <span>WEBTECH</span></div>
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
                            <i class="fas fa-desktop"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li class="item" id="profile">
                        <a href="#profile" class="menu-btn">
                            <i class="fas fa-user-circle"></i><span>Profile <i class="fas fa-chevron-left drop-down"></i></span>
                        </a>
                       
                    </li>
                    <li class="item" id="messages">
                        <a href="#messages" class="menu-btn">
                            <i class="fas fa-envelope"></i><span>Messages <i class="fas fa-chevron-left drop-down"></i></span>
                        </a>
                       
                    </li>
                    <li class="item" id="settings">
                        <a href="#settings" class="menu-btn">
                            <i class="fas fa-cog"></i><span>Settings <i class="fas fa-chevron-left drop-down"></i></span>
                        </a>
                       
                    </li>
                    <li class="item">
                        <a href="#" class="menu-btn">
                            <i class="fas fa-info-circle"></i><span>About</span>
                        </a>
                    </li>
                </div>
            </div>
            <!--sidebar end-->
            <!--main container start-->
            <div class="main-container">
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
            <!--main container end-->
        </div>
        <!--wrapper end-->

        <script type="text/javascript">
        $(document).ready(function(){
            $(".sidebar-btn").click(function(){
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

        </script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    </body>
</html>
      