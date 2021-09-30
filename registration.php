
    <div class="container mx-auto">
        
    <form class="needs-validation width mx-auto bg-light shadow p-4" novalidate>
        <h5>PERSONAL DETAILS :</h5>
        <div class="form-row d-flex justify-content-between">
          <div class="col-md-4 mb-1 ">
            <label for="validationCustom01">Name :</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Enter  Name" value="" required>
            <div class="valid-feedback">
              This field is required
            </div>
          </div>
          <div class="col-md-4 mb-1">
            <label for="validationCustom02">Address :</label>
            <input type="address" class="form-control" id="validationCustom02" placeholder="Enter Address" value="" required>
            <div class="valid-feedback">
              This field is required
            </div>
          </div>
          </div>
          <div class="form-row  justify-content-between d-flex">
            <div class="col-md-4  mb-1">
              <label for="validationCustom01">Number :</label>
              <input type="number" class="form-control" id="validationCustom01" placeholder=" Enter Number" value="" required>
              <div class="valid-feedback">
                This field is required
              </div>
            </div>
            <div class="col-md-4  mb-1">
              <label for="validationCustom02">Email :</label>
              <input type="email" class="form-control" id="validationCustom02" placeholder="Enter Email" value="" required>
              <div class="valid-feedback">
                This field is required
              </div>
            </div>
          </div>
            <div class="form-row justify-content-between d-flex">
                <div class="col-md-4 mb-1">
                  <label for="validationCustom01">Password :</label>
                  <input type="password" class="form-control" id="validationCustom01" placeholder=" Password" value="" required>
                  <div class="valid-feedback">
                    This field is required.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom02">Confirm Password :</label>
                  <input type="password" class="form-control" id="validationCustom02" placeholder="Confirm passsword" value="" required>
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
                  <!-- <input type="text" class="form-control" id="validationCustom01" placeholder="" value="" required> -->
                  <div class="valid-feedback">
                    This field is required.
                  </div>
                </div>
                <div class="col-md-4 mb-1">
                  <label for="validationCustom02">Graduation Passing year :</label>
                  <select class="form-control" id="ddlYears1"></select>
                  <!-- <input type="text" class="form-control" id="validationCustom02" placeholder="" value="" required> -->
                  <div class="valid-feedback">
                    This field is required.
                  </div>
                </div>
            </div>
            <div class="form-row justify-content-between d-flex">
                <div class="col-md-4 mb-1">
                  <label for="validationCustom01">Skills : </label>
                  <input type="text" class="form-control" id="validationCustom01" placeholder="" value="" required>
                  <div class="valid-feedback">
                    This field is required.
                  </div>
                </div>
                <div class="col-md-4 mb-1">
                  <label for="validationCustom02">College name :</label>
                  <input type="text" class="form-control" id="validationCustom02" placeholder="" value="" required>
                  <div class="valid-feedback">
                    This field is required.
                  </div>
                </div>
            </div>
            <h5>INTERNSHIP DETAILS :</h5>
       
            <div class="mb-1 row">
                <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Joining Date :</label>
                <div class="col-sm-10">
                  <input type="datetime-local" class="form-control form-control-sm" id="validationCustom02" required>
                </div>
              </div>
              <div class="mb-1 row">
                <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Department :</label>
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
        <option value="4">6  months</option>
       
      </select>
</div>
              </div>
              <div class="mb-1 row">
                <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Reporting Manager</label>
                <div class="col-sm-9 col-md-8">
                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="1">HR</option>
        <option value="2">Linkedin</option>
        
       
      </select>
</div>
                </div>
              </div>
              <div class="mb-1 row">
                <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Hr Reference Number</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="validationCustom02" required  placeholder="Enter Hr Reference Manager name">
                </div>
              </div>
    
              <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
        
      </form>
      
      <script>

      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>

<script type="text/javascript">
    window.onload = function () {
        //Reference the DropDownList.
        var ddlYears = document.getElementById("ddlYears");
        var ddlYears1 = document.getElementById("ddlYears1");
 
        //Determine the Current Year.
        var currentYear = (new Date()).getFullYear();
 
        //Loop and add the Year values to DropDownList.
        for (var i = currentYear; i >= 1990; i--){
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            ddlYears.appendChild(option);
        }
        for (var i = currentYear; i <= 2025; i++){
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            ddlYears1.appendChild(option);
        }
    };
</script>

 