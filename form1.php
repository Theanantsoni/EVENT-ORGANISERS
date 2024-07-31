<?php
   include("header.php");

   //Alert ...In this code ... I make an only javascript for all form fields and bill will be generated....
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

  <style>
    body {
      /*background: linear-gradient(135deg, #1b4de2, #3dff41, #1b4de2, #3dff41, #1b4de2, #1b4de2, #3dff41, #1b4de2, #1b4de2, #3dff41);*/
      background: #957fe6;
/*      padding-bottom: 55.5px;*/
    }

    .container {
      border-radius: 10px;
    }

    .form-container{
      box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
      background: #111;
      padding-top: 52px;
      padding-bottom: 26px;
      border-radius: 10px;
    }

    .form-container form .form-row {
      display: flex;
    }

    .form-container form .form-row .form-group {
      margin-right: 5px;
      margin-bottom: 20px;
    }

    .form-group {
      position: relative;
    }

    .glow-effect {
      width: 100%;
      padding: 15px;
      background: transparent;
      color: #fff;
      border: 2px solid #00f;
      border-radius: 5px;
    }

    .glow-effect:focus {
      outline: none;
      box-shadow: 0 0 10px #00f, 0 0 20px #00f, 0 0 30px #00f;
    }

    .neon-effect {
      text-align: left;
      font-size: 25px;
      color: #fff;
      text-shadow: 0 0 5px #00f, 0 0 10px #00f, 0 0 15px #00f;
    }

    .btn-register {
      background: green;
      color: #fff;  
      margin-bottom: 10px;
    }

    .btn-home {
      background: red;
      color: #fff;
      margin-bottom: 10px;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var today = new Date();
    var dd = today.getDate() + 1; //Today date Not Selected
    var mm = today.getMonth() + 1; // January is 0!
    var yyyy = today.getFullYear();

    if (dd < 10) {
      dd = '0' + dd;
    }

    if (mm < 10) {
      mm = '0' + mm;
    }

    today = yyyy + '-' + mm + '-' + dd;

    document.getElementById('datepicker').setAttribute('min', today);

    document.getElementById('datepicker').addEventListener('change', function() {
      var selectedDate = this.value;
    });
  });
</script>

<script>

              function form()
                {
                  //First Name javascript Code ...

                      var fname = document.getElementById("ufname").value;

                      var pattern = /^[a-zA-Z]*$|^\d*$/;

                      if(fname == "")
                      {
                        document.getElementById("ufirstname").innerHTML="*Please Enter Your Full Name*";
                        return false;
                      }

                      if (!pattern.test(fname)) 
                      {
                          document.getElementById("ufirstname").innerHTML="Numbers Or Symbols Are Not Allowed*";
                          return false;
                      }

                      else
                      {
                        document.getElementById("ufirstname").innerHTML="";
                      }

                  //Last Name javascript Code ...

                      var lname = document.getElementById("ulname").value;

                      var pattern = /^[a-zA-Z]*$|^\d*$/;

                      if(lname == "")
                      {
                        document.getElementById("ulastname").innerHTML="*Please Enter Your Full Name*";
                        return false;
                      }

                      if (!pattern.test(lname)) 
                      {
                          document.getElementById("ulastname").innerHTML="Numbers Or Symbols Are Not Allowed*";
                          return false;
                      }

                      else
                      {
                        document.getElementById("ulastname").innerHTML="";
                      }

                  //Email Javascript Code ...

                      var email = document.getElementById("useremail").value;
                      var emailpattern = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/; // Regular expression for email validation

                      if(email == "")
                      {
                        document.getElementById("uemail").innerHTML="*Please Enter Your Email Address*";
                        return false;
                      }

                      if(emailpattern.test(email))
                      {
                        document.getElementById("uemail").innerHTML="";
                      }  

                      else
                      {
                        document.getElementById("uemail").innerHTML="*Invalid Email Address. Please Enter Valid Email Address*";
                        return false;
                      }

                  //Phone Number Javascript Code ...

                      var contact = document.getElementById("usercontact").value;

                      if(contact == "")
                      {
                        document.getElementById("ucontact").innerHTML="*Please Enter Your Contact Number*";
                        return false;
                      }

                      if(isNaN(contact))
                      {
                        document.getElementById("ucontact").innerHTML="*Characters & Symbols Are Not Allowed*";
                        return false;
                      }

                      if(contact.length>10 || contact.length<10)
                      {
                        document.getElementById("ucontact").innerHTML="*Enter Contact Number Must Be 10 Digits*";
                        return false;
                      }

                  //Address javascript ...

                      var address = document.getElementById("uadd").value;

                      if(address == "")
                      {
                        document.getElementById("useraddress").innerHTML="*Enter Your Address*";
                        return false;
                      }

                  //State javascript ...

                      var state = document.getElementById("stateid").value;

                      if (state === "") {
                          document.getElementById("userstate").innerHTML="*Select State*";
                          return false;
                      }
                  //City javascript ...

                      var city = document.getElementById("cityid").value;

                      if (city === "") {
                          document.getElementById("usercity").innerHTML="*Select City*";
                          return false;
                      }
                  //Area javascript ...

                      var area = document.getElementById("areaid").value;

                      if (area === "") {
                          document.getElementById("userarea").innerHTML="*Select Area*";
                          return false;
                      }

                  //Place javascript ...

                      var place = document.getElementById("placeid").value;

                      if (place === "") {
                          document.getElementById("userplace").innerHTML="*Select Place*";
                          return false;
                      }

                  //Date javascript ...

                      var date = document.getElementById("datepicker").value;
                      var dateError = document.getElementById("dateError");
                      
                      dateError.innerHTML = "";

                      if (date === "") {
                          dateError.innerHTML = "Please select a date";
                          return false; // Prevent form submission
                      }

                  //Time javascript ...

                      var time = document.getElementById("time").value;
                      var timeError = document.getElementById("timeError");
                      
                      timeError.innerHTML = "";

                      if (time === "") {
                          timeError.innerHTML = "Please select a time";
                          return false; // Prevent form submission
                      }

                  //Decoration Type javascript ...

                      var decoration = document.getElementById("dectypeid").value;
                      var decorationError = document.getElementById("decorationError");
                      
                      decorationError.innerHTML = "";

                      if (decoration === "") {
                          decorationError.innerHTML = "Please select a decoration type";
                          return false; // Prevent form submission
                      }

                  //Member Number javascript ...

                      var memnum = document.getElementById("memnum").value;
                      var memnumError = document.getElementById("memnumError");
                      
                      memnumError.innerHTML = "";

                      if (memnum === "") {
                          memnumError.innerHTML = "Please select Member Numbers";
                          return false; // Prevent form submission
                      }

                  //Event Plan javascript ...

                      var event = document.getElementById("event").value;
                      var eventError = document.getElementById("eventError");

                      eventError.innerHTML = "";

                      if (event === "") {
                          eventError.innerHTML = "Please select your event";
                          return false; // Prevent form submission
                      }

                  //Food javascript ...

                      var food = document.getElementById("food").value;
                      var foodError = document.getElementById("foodError");
                      
                      foodError.innerHTML = "";

                      if (food === "") {
                          foodError.innerHTML = "Please select your food";
                          return false; // Prevent form submission
                      }
                }

          </script>



</head>
<body>
  <div class="container form-container mt-5">
    <h1 class="neon-effect">------------------------------------------------------ Book Your Event ------------------------------------------------------</h1><br><br>
    <form action="bill1.php" method="POST" onsubmit="return form()">
      <div class="form-row">
        <div class="form-group col-xl-6">
          <label for="firstName" class="text-white">Your First Name :</label>
          <input type="text" name="fname" class="form-control glow-effect" id="ufname" placeholder="Enter First Name">
          <span id="ufirstname" style="color:red"></span>
        </div>
        <div class="form-group col-xl-6">
          <label for="lastName" class="text-white">Your Last Name :</label>
          <input type="text" name="lname" class="form-control glow-effect" id="ulname" placeholder="Enter Last Name">
          <span id="ulastname" style="color:red"></span>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="email" class="text-white">Email Id :</label>
          <input type="text" name="email" class="form-control glow-effect" id="useremail" placeholder="Enter Email Id">
          <span id="uemail" style="color: red;">
        </div>
        <div class="form-group col-md-6">
          <label for="contact" class="text-white">Contact No :</label>
          <input type="text" name="contact" class="form-control glow-effect" id="usercontact" placeholder="Enter Mobile Number">
          <span id="ucontact" style="color: red;">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
        <label for="address" class="text-white">Address : </label>
        <textarea type="text" name="address" class="form-control glow-effect" id="uadd" placeholder="Address"></textarea>
        <span id="useraddress" style="color: red;">  
        </div>
      </div>

      
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="state" class="text-white">Select State :</label>
          
          <select name="state" id="stateid" class="glow-effect" style="color:white" class="form-control">
            
            <option value="Select" onchange="getStates()">-------Select State-------</option>
            
          </select>

          <span id="userstate" style="color:red"></span>
        </div>

        <div class="form-group col-md-6">
          <label for="city" class="text-white">Select City :</label>

          <select  name="city" id="cityid" class="glow-effect" style="color:white" class="form-control" onchange="getAreas()">
            
            <option value="Select">-------Select City-------</option>
            
          </select>

          <span id="usercity" style="color:red"></span>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="area" class="text-white">Select Area :</label>
          <select class="glow-effect" id="areaid" name="area" style="color:white" class="form-control" onchange="getPlaces()">
            <option value="Select">-------Select Area-------</option>
          </select>
          <span id="userarea" style="color:red"></span>
        </div>
        <div class="form-group col-md-6">
          <label for="place" class="text-white">Select Place :</label>
          <select class="glow-effect" id="placeid" name="place" style="color:white" class="form-control" onchange="getRentPrice()">
            <option value="Select">-------Select Place-------</option>
          </select>

          <span id="userplace" style="color:red"></span>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="date" class="text-white">Select Date :</label>
          
          <input class="form-control glow-effect" type="date" name="udate" id="datepicker">
          <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>

          <span id="dateError" style="color:red"></span>
        </div>
        

          <div class="form-group col-md-6">
            <label for="time" class="text-white">Select Time :</label>
            <select id="time" name="time" class="glow-effect" style="color:white">
                <option value="" style="font-size:20px; border-radius:10px; color: red; background-color: lightgreen;">-------Select Time-------</option>
                <option value="6:00 To 12:00 AM" style="font-size:20px; border-radius:10px; color: red; background-color: yellow;">6:00 To 12:00 AM</option>
                <option value="12:00 To 6:00 PM" style="font-size:20px; border-radius:10px; color: red; background-color: lightgreen;">12:00 To 6:00 PM</option>
                <option value="6:00 To 12:00 PM" style="font-size:20px; border-radius:10px; color: red; background-color: yellow;">6:00 To 12:00 PM</option>
                <option value="12:00 To 6:00 AM" style="font-size:20px; border-radius:10px; color: red; background-color: lightgreen;">12:00 To 6:00 AM</option> 
            </select>
            <span id="timeError" style="color:red"></span>
          </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="rentprice" class="text-white">Rent Price :</label>
          
          <input class="glow-effect" type="text" name="rprice" id="rprice" readonly>
          
        </div>

        <div class="form-group col-md-6">
          <label for="decoration" class="text-white">Decoration Type:</label>

          <select class="glow-effect" id="dectypeid" name="decoration" style="color:white" class="form-control" onchange="getDecPrice()">
           
            <option value="Select" style="Font-size:20px; Border-radius:10px; color: red; background-color: lightgreen;">-------Select Decoration Type-------</option>
           
          </select>
          <span id="decorationError" style="color:red"></span>
        </div>

      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
              <label for="members" class="text-white">Member numbers</label>
              <select class="glow-effect" id="memnum" name="memnum" style="color:white">
                  <option value="" style="font-size:20px; border-radius:10px; color: red; background-color: yellow;">-------Select Member Numbers-------</option>
                  <option value="Around 100 To 250" style="font-size:20px; border-radius:10px; color: red; background-color: lightgreen;">Around 100 To 250</option>
                  <option value="Around 250 To 500" style="font-size:20px; border-radius:10px; color: red; background-color: yellow;">Around 250 To 500</option>
                  <option value="Around 500 To 750" style="font-size:20px; border-radius:10px; color: red; background-color: lightgreen;">Around 500 To 750</option>
                  <option value="Around 750 To 1000" style="font-size:20px; border-radius:10px; color: red; background-color: yellow;">Around 750 To 1000</option>
                  <option value="Above 1000" style="font-size:20px; border-radius:10px; color: red; background-color: lightgreen;">Above 1000</option>
              </select>
              <span id="memnumError" style="color:red"></span>
          </div>

        <div class="form-group col-md-6">
          <label for="decprice" class="text-white">Decoration Price :</label>
          
          <input class="glow-effect" type="text" name="dprice" id="decpriceid" readonly>
          
        </div>

      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
            <label for="event" class="text-white">Event Planning For :</label>
            <select class="glow-effect" id="event" name="event" style="color:white" class="form-control">
                <option value="" style="font-size:20px; border-radius:10px; color: red; background-color: yellow;">-------Select Event-------</option>
                <option value="Birthday Party" style="font-size:20px; border-radius:10px; color: red; background-color: lightgreen;">Birthday Party</option>
                <option value="Anniversary Party" style="font-size:20px; border-radius:10px; color: red; background-color: yellow;">Anniversary Party</option>
                <option value="Wedding" style="font-size:20px; border-radius:10px; color: red; background-color: lightgreen;">Wedding</option>
                <option value="Christmas Party" style="font-size:20px; border-radius:10px; color: red; background-color: yellow;">Christmas Party</option>
                <option value="Annual Party" style="font-size:20px; border-radius:10px; color: red; background-color: lightgreen;">Annual Party</option>
                <option value="Business Advertisement" style="font-size:20px; border-radius:10px; color: red; background-color: yellow;">Business Advertisement</option>
                <option value="Other" style="font-size:20px; border-radius:10px; color: red; background-color: lightgreen;">Other</option>
            </select>
            <span id="eventError" style="color:red"></span>
        </div>
        <div class="form-group col-md-6">
            <label for="food" class="text-white">Select Food :</label>
            <select id="food" name="food" class="glow-effect" style="color:white">
                <option value="" style="font-size:20px; border-radius:10px; color: red; background-color: yellow;">-------Select Food-------</option>
                <option value="Veg" style="font-size:20px; border-radius:10px; color: red; background-color: lightgreen;">Veg</option>
                <option value="Non-Veg" style="font-size:20px; border-radius:10px; color: red; background-color: yellow;">Non-Veg</option>
            </select>
            <span id="foodError" style="color:red"></span>
        </div>
      </div>

      <br><br>

      <h1 class="neon-effect">----------------------------------------------------- Check This Details -----------------------------------------------------</h1><br><br>

      <div class="form-row">
      <div class="form-group col-xl-12">
        <label for="name" class="text-white">Manager Name : </label>
        <input type="text" name="mname" style="background: transparent; color: #fff;" class="form-control glow-effect" id="mname" readonly>
      </div>
    </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="memail" class="text-white">Manager Email Id :</label>
          <input type="text" name="memail" style="background: transparent; color: #fff;" class="form-control glow-effect" id="memail" readonly>
        </div>
        <div class="form-group col-md-6">
          <label for="mcontact" class="text-white">Manager Contact No :</label>
          <input type="text" name="mcontact" style="background: transparent; color: #fff;" class="form-control glow-effect" id="mcontact" readonly>
        </div>
      </div>

      <div class="form-row">
      <div class="form-group col-xl-12">
        <label for="place" class="text-white">Place Location : </label>
        <input type="text" name="mplace" style="background: transparent; color: #fff;" class="form-control glow-effect" id="mplace" readonly>
      </div>
    </div>  

<div class="form-row">
  <div class="form-group col-xl-4">
    <label for="rprice" class="text-white">Rent Price:</label>
    <input type="text" name="erprice2" style="background: transparent; color: #fff;" class="form-control glow-effect rent-price" id="rprice2" oninput="calculateTotal()">
  </div>

  <div class="form-group col-xl-4">
    <label for="dprice" class="text-white">Decoration Price:</label>
    <input type="text" name="edprice2" style="background: transparent; color: #fff;" class="form-control glow-effect decoration-price" id="decpriceid2" oninput="calculateTotal()">
  </div>

  <div class="form-group col-xl-4">
    <label for="tprice" class="text-white">Total Price:</label>
    <input type="text" name="tprice" style="background: transparent; color: #fff;" class="form-control glow-effect" id="tprice" readonly>
  </div>
</div>

<script>
  function calculateTotal() {
    // Get the values of rent price and decoration price input fields
    var rentPrice = parseFloat(document.getElementById('rprice2').value) || 0;
    var decorationPrice = parseFloat(document.getElementById('decpriceid2').value) || 0;
    
    // Calculate the total price
    var totalPrice = rentPrice + decorationPrice;

    // Update the value of the total price input field
    document.getElementById('tprice').value = totalPrice.toFixed(2);
  }
</script>

      <br>

      <button type="reset" class="btn btn-home"><a href="index.php" style="text-decoration: none; color: white;">Cancel</a></button>
      &nbsp;&nbsp;&nbsp;
      <button type="submit" name="btnbook" class="btn btn-register" style="color: white;">Next</button>
      
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>

  <script>

    // -------------------------------------------- State Dropdown Box Script Code ...

  function getStates() {
    $.ajax({
      url: 'get_states.php',
      type: 'POST',
      success: function (response) {
        // Add placeholder option for state dropdown
        response = '<option value="" style="font-size:20px; border-radius:10px; color: #fff; background-color: #1100ff;">-------Select State-------</option>' + response;
        $('#stateid').html(response);
        
        // After loading states, call getCities to load cities for the default selected state (if any)
        getCities();
      }
    });
  }

    // -------------------------------------------- City Dropdown Box Script Code ...
  function getCities() {
    var stateId = $('#stateid').val();

    $.ajax({
      url: 'get_cities.php',
      type: 'POST',
      data: { state_id: stateId },
      success: function (response) {
        // Add placeholder option for city dropdown
        response = '<option value="" style="font-size:20px; border-radius:10px; color: #fff; background-color: #1100ff;">-------Select City-------</option>' + response;
        $('#cityid').html(response);
      }
    });
  }



    // -------------------------------------------- Area Dropdown Box Script Code ...
  function getAreas() {
    var cityId = $('#cityid').val();

    $.ajax({
        url: 'get_areas.php', // Replace with the actual URL to fetch areas based on the city
        type: 'POST',
        data: { city_id: cityId },
        success: function (response) {
            // Add placeholder option for area dropdown
            response = '<option value="" style="font-size:20px; border-radius:10px; color: #fff; background-color: #1100ff;">-------Select Area-------</option>' + response;
            $('#areaid').html(response);
        }
    });
}

  // -------------------------------------------- Place Dropdown Box Script Code ...
  // Existing code for getStates and getCities

function getPlaces() {
  var areaId = $('#areaid').val();

  $.ajax({
    url: 'get_places.php',
    type: 'POST',
    data: { area_id: areaId },
    success: function (response) {
      // Add placeholder option for place dropdown
      response = '<option value="" style="font-size:20px; border-radius:10px; color: #fff; background-color: #1100ff;">-------Select Place-------</option>' + response;
      $('#placeid').html(response);
    }
  });
}

  // -------------------------------------------- Rent Price Box Script Code ...

  function getRentPrice() {
    var placeId = $('#placeid').val();

    $.ajax({
      url: 'get_rent_price.php', // Replace with the actual PHP file to fetch rent price
      type: 'POST',
      data: { place_id: placeId },
      success: function (response) {
        // Update the rent price input field
        $('#rprice').val(response);
        $('#rprice2').val(response);
      }
    });

    // -------------------------------------------- Decoration Type Dropdown Box Script Code ...

    $.ajax({
    url: 'get_decoration_type.php',
    type: 'POST',
    data: { place_id: placeId },
    success: function (response) {
      // Add placeholder option for place dropdown
      response = '<option value="" style="font-size:20px; border-radius:10px; color: #fff; background-color: #1100ff;">-------Select Decoration Type-------</option>' + response;
      $('#dectypeid').html(response);
    }
  });

  }

  // -------------------------------------------- Decoration Price Dropdown Box Script Code ...

  function getDecPrice() {
        var DecType = $("#dectypeid").val();

        // Perform AJAX request to fetch decoration price
        $.ajax({
            type: "POST", // or "GET"
            data: { dec_type: DecType },
            url: "get_decoration_price.php", // replace with your backend endpoint
            
            success: function(response) {
                // Update the decoration price field with the received data
                $("#decpriceid").val(response); 
                $("#decpriceid2").val(response);
            },
            error: function(error) {
                console.error("Error fetching decoration price:", error);
            }
        });
    }

  // Call getCities when the state dropdown changes
  $('#stateid').change(function () {
    getCities();
  });

  // Call getStates when the document is ready
  $('#cityid').ready(function () {
    getStates();
  });

  // Call getPlaces when the area dropdown changes
  $('#areaid').change(function () {
    getPlaces();
  });

  // Call getRentPrice when the place dropdown changes
  $('#placeid').change(function () {
    getRentPrice();
  });


// -------------------------------------------- Rent Price Box Script Code ...

function getRentPrice() {
  var placeId = $('#placeid').val();

  $.ajax({
    url: 'get_rent_price.php', // Replace with the actual PHP file to fetch rent price
    type: 'POST',
    data: { place_id: placeId },
    success: function (response) {
      // Update the rent price input field
      $('#rprice').val(response);
      $('#rprice2').val(response);

      // After updating rent price, recalculate the total price
      calculateTotal();
    }
  });

  // Make an Ajax request to your PHP script

  var placeId = $("#placeid").val();

  // AJAX call to get details from PHP
  $.ajax({
    type: "POST",
    url: "get_manager_details.php",
    data: { place_Id: placeId },
    success: function (response) {
      // Parse the JSON response
      var details = $.parseJSON(response);

      // Update the input fields with the retrieved details
      $("#mname").val(details.em_name);
      $("#memail").val(details.em_email);
      $("#mcontact").val(details.em_contact);
      $("#mplace").val(details.em_location);
    },
    error: function () {
      console.log("Error fetching details");
    }
  });

  // -------------------------------------------- Decoration Type Dropdown Box Script Code ...

  $.ajax({
    url: 'get_decoration_type.php',
    type: 'POST',
    data: { place_id: placeId },
    success: function (response) {
      // Add placeholder option for place dropdown
      response = '<option value="" style="font-size:20px; border-radius:10px; color: #fff; background-color: #1100ff;">-------Select Decoration Type-------</option>' + response;
      $('#dectypeid').html(response);
    }
  });

  // -------------------------------------------- Decoration Price Dropdown Box Script Code ...

}
function getDecPrice() {
    var DecType = $("#dectypeid").val();

    // Perform AJAX request to fetch decoration price
    $.ajax({
      type: "POST",
      data: { dec_type: DecType },
      url: "get_decoration_price.php",
      success: function (response) {
        // Update the decoration price field with the received data
        $("#decpriceid").val(response);
        $("#decpriceid2").val(response);

        // After updating decoration price, recalculate the total price
        calculateTotal();
      },
      error: function (error) {
        console.error("Error fetching decoration price:", error);
      }
    });
  }

// -------------------------------------------- Decoration Price Dropdown Box Script Code ...
</script>

</body>
    
</html>

