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
                        <i class="fa fa-plus" aria-hidden="true"></i><span>New Application</span>
                        </a>
                    </li>
                    <li class="item" id="profile">
                        <a href="#profile" class="menu-btn">
                        <i class="fa fa-users" aria-hidden="true"></i><span>Scedule Interviw<i class="fas fa-chevron-left drop-down"></i></span>
                        </a>
                       
                    </li>
                    <li class="item" id="messages">
                        <a href="#messages" class="menu-btn">
                            <i class="fas fa-envelope"></i><span>Send Offer Letter<i class="fas fa-chevron-left drop-down"></i></span>
                        </a>
                       
                    </li>
                    <li class="item" id="settings">
                        <a href="#settings" class="menu-btn">
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Leave<i class="fas fa-chevron-left drop-down"></i></span>
                        </a>
                       
                    </li>
                    <li class="item">
                        <a href="#" class="menu-btn">
                            <i class="fas fa-info-circle"></i><span>Attendance</span>
                        </a>
                    </li>
                </div>
            </div>
            <!--sidebar end-->
            <!--main container start-->
            <div class="main-container">
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
            <nav aria-label="Page navigation example mr-0">
          <ul class="pagination ">
            <li class="page-item "><a class="page-link bg-primary text-light" href="#">Previous</a></li>
            <li class="page-item "><a class="page-link bg-primary text-light acti" href="#">1</a></li>
            <li class="page-item "><a class="page-link bg-primary text-light" href="#">2</a></li>
            <li class="page-item "><a class="page-link bg-primary text-light" href="#">3</a></li>
            <li class="page-item "><a class="page-link bg-primary text-light" href="#">Next</a></li>
          </ul>
        </nav>
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
      