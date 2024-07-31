<?php
if (isset($_POST['btnbook'])) {

    $ufname = $_POST['fname'];
    $ulname = $_POST['lname'];
    $uemail = $_POST['email'];
    $ucontact = $_POST['contact'];
    $uaddress = $_POST['address'];
    $ustate = $_POST['state'];
    $ucity = $_POST['city'];
    $uarea = $_POST['area'];
    $uplace = $_POST['place'];
    $udate = $_POST['udate'];
    $utime = $_POST['time'];
    $urprice = $_POST['rprice'];
    $udectype = $_POST['decoration'];
    $umemnum = $_POST['memnum'];
    $udprice = $_POST['dprice'];
    $uevent = $_POST['event'];
    $ufood = $_POST['food'];

    $mname = $_POST['mname'];
    $memail = $_POST['memail'];
    $mcontact = $_POST['mcontact'];
    $mplocation = $_POST['mplace'];
    $utprice = $_POST['tprice'];

?>
    <!DOCTYPE html>
    <html>
    <head>
        <style>
          .neon-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            margin: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.7), 0 0 40px rgba(255, 255, 255, 0.7);
            color: #fff;
            text-shadow: 0 0 10px rgba(255, 255, 255, 1);
            background: linear-gradient(45deg, #ff6, #f06);
            transition: transform 0.2s;
        }

        #paymentForm {
            display: none;
            max-width: 400px;
            margin: 50px auto;
        }

        .form-group {
            display: inline-block;
            margin-right: 10px;
        }

        .form-group input {
            width: 40px;
            height: 40px;
            text-align: center;
        }

            table {
                border-collapse: collapse;
                width: 50%;
                margin-top: 20px;
            }

            table, th, td {
                border: 1px solid black;
            }

            th, td {
                padding: 8px;
                text-align: left;
            }
        </style>
    </head>
    <body background="images/bg1.jpg" style="background-size: cover;">
        <center>
            <!-- Your existing payment details -->
            <h1>Payment</h1>
            <br><br>
            <h3>You Have To Pay 50% Advance</h3>

            <h2> Your Rent Price Is : <?php echo $utprice; ?>/- </h2>
            <br>

            <h2> Your Decoration Price Is : <?php echo $utprice; ?>/- </h2>
            <br>

            <h2> Your Total Price Is : <?php echo $utprice; ?>/- </h2>
            <h2> Pay : <?php echo $utprice/2; ?>/- </h2>
            <br>

            <button type="reset" class="neon-button" style="background: red">
                <a href="index.php" style="text-decoration: none; color: #fff;">Cancel</a>
            </button>
            &nbsp;&nbsp;&nbsp;
            <button onclick="showPaymentForm()" class="neon-button" style="background: green">Payment</button>
            <!-- ... (Your existing payment details) -->

            <div id="paymentForm">
                <h1>Enter PIN:</h1>
                <form action="bill.php" method="POST" id="pinForm" onsubmit="return showResult()">
                    <div class="form-group">
                        <input type="text" class="form-control" id="digit1" maxlength="1" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="digit2" maxlength="1" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="digit3" maxlength="1" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="digit4" maxlength="1" required>
                    </div>
                    <br><br>
                    <button type="submit" class="neon-button" style="background: green">Submit</button>

                    <input type="hidden" name="utprice" value="<?php echo $utprice; ?>">
                    <input type="hidden" name="urprice" value="<?php echo $urprice; ?>">
                    <input type="hidden" name="udprice" value="<?php echo $udprice; ?>">


                    <input type="hidden" name="ufname" value="<?php echo $ufname ; ?>">
                    <input type="hidden" name="ulname" value="<?php echo $ulname ; ?>">
                    <input type="hidden" name="uemail" value="<?php echo $uemail ; ?>">
                    <input type="hidden" name="ucontact" value="<?php echo $ucontact ; ?>">
                    <input type="hidden" name="uaddress" value="<?php echo $uaddress ; ?>">
                    <input type="hidden" name="ustate" value="<?php echo $ustate ; ?>">
                    <input type="hidden" name="ucity" value="<?php echo $ucity ; ?>">
                    <input type="hidden" name="uarea" value="<?php echo $uarea ; ?>">
                    <input type="hidden" name="uplace" value="<?php echo $uplace ; ?>">
                    <input type="hidden" name="udate" value="<?php echo $udate ; ?>">
                    <input type="hidden" name="utime" value="<?php echo $utime ; ?>">
                    <input type="hidden" name="urprice" value="<?php echo $urprice ; ?>">
                    <input type="hidden" name="udectype" value="<?php echo $udectype ; ?>">
                    <input type="hidden" name="umemnum" value="<?php echo $umemnum ; ?>">
                    <input type="hidden" name="udprice" value="<?php echo $udprice ; ?>">
                    <input type="hidden" name="uevent" value="<?php echo $uevent ; ?>">
                    <input type="hidden" name="ufood" value="<?php echo $ufood ; ?>">
                    <input type="hidden" name="mname" value="<?php echo $mname ; ?>">
                    <input type="hidden" name="memail" value="<?php echo $memail ; ?>">
                    <input type="hidden" name="mcontact" value="<?php echo $mcontact ; ?>">
                    <input type="hidden" name="mplace" value="<?php echo $mplocation ; ?>">
                    <input type="hidden" name="utprice" value="<?php echo $utprice ; ?>">
                </form>
            </div>

            <script>
                function showResult() {
                    var digit1 = document.getElementById('digit1').value;
                    var digit2 = document.getElementById('digit2').value;
                    var digit3 = document.getElementById('digit3').value;
                    var digit4 = document.getElementById('digit4').value;

                    var enteredPIN = digit1 + digit2 + digit3 + digit4;

                    if (enteredPIN === '6317') {
                         header("location: bill.php");
                         // displaySummary();
                    } else {
                        alert('Error! Wrong PIN.');
                    }

                    // Prevent the form from submitting
                    return false;
                }

                /*function displaySummary() {
                    var utprice = <?php echo json_encode($utprice); ?>;
                    var urprice = <?php echo json_encode($urprice); ?>;
                    var udprice = <?php echo json_encode($udprice); ?>;

                    var table = '<table>';
                    table += '<tr><th>UT Price</th><td>' + utprice + '</td></tr>';
                    table += '<tr><th>UR Price</th><td>' + urprice + '</td></tr>';
                    table += '<tr><th>UD Price</th><td>' + udprice + '</td></tr>';
                    table += '</table>';

                    document.body.innerHTML += table;
                }*/
            </script>
        </center>
          <script>
            function showPaymentForm() {
                document.getElementById('paymentForm').style.display = 'block';
            }

            function showSuccess() {
                var upin = document.getElementsByName('upin')[0].value;
                if (upin == 6317) {
                    alert("Success");
                    return true;
                } else {
                    alert("Error");
                    return false;
                }
            }
        </script>
    </body>
    </html>

    <?php
}
?>
