<?php
include "../connection.php";

$editdata = null; // Initialize $editdata variable

if(isset($_GET['eg_id'])) {
$editid = isset($_GET['eg_id']) ? mysqli_real_escape_string($conn, $_GET['eg_id']) : null;
    
    $sql = "SELECT * FROM e_gallery WHERE eg_id='$editid'"; 
    $result = mysqli_query($conn, $sql);
    
    if($result && mysqli_num_rows($result) > 0) {
        $editdata = mysqli_fetch_assoc($result);
    } else {
        echo "No data found for eg_id = $editid";
        exit; // Exit if no data found
    }
}

if(isset($_POST['btn-update'])) {

    if($_FILES['fileimage']['name'] != "") {
        $filename = $_FILES['fileimage']['name'];
        $tempname = $_FILES['fileimage']['tmp_name'];
        move_uploaded_file($tempname, '../../images/Event Images/' .$filename);
    }
    else {
        $filename = $_POST['oldimage'];
    }

    $img_id = mysqli_real_escape_string($conn, $_POST['eg_id']);
    $img_name = mysqli_real_escape_string($conn, $_POST['eg_name']);

    $sql = "UPDATE e_gallery SET eg_img='$filename', eg_name='$img_name' WHERE eg_id='$img_id'";
    $result = mysqli_query($conn,$sql);

    if($result) {
        echo "Data Updated Successfully";
        header('location: ../client-gallery-update.php');
        exit(); // Add exit after header to prevent further execution
    }
    else {
        echo "Error updating data: " . mysqli_error($conn);
    }
} 

if(isset($_POST['btn-reset'])) {
    header('location: ../client-gallery-update.php');
    exit(); // Add exit after header to prevent further execution
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login Update Information</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .custom-heading {
            background-color: #343a40;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 2rem; /* Increase font size of the heading */
        }
        .form-control,
        .btn {
            font-size: 1.5rem; /* Increase font size of form inputs and buttons */
        }
        .form-group label {
            font-size: 1.5rem; /* Increase font size of form labels */
        }
        .uploaded-image {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
        }

        img {
  margin: 20px auto 10px auto;

  border-radius: 8px;

  max-width: 100%;
}

input[type=file]::file-selector-button {
  margin-right: 20px;
  border: 2px solid black;
  background: white;
  padding: 10px 20px;
  border-radius: 10px;
  font-weight: bold;
  color: black;
  cursor: pointer;
  transition: background .2s ease-in-out;
}

input[type=file]::file-selector-button:hover {
  background: #ebe1ff;
}
    </style>
</head>
<body>

    <br><br><br>

    <h1 class="custom-heading">User Register Update Information</h1>

    <br>

    <div class="container">
        <div class="container border rounded p-4">
    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="eg_id" value="<?php echo isset($editdata['eg_id']) ? $editdata['eg_id'] : ''; ?>">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="eg_id"><strong>ID :</strong></label>
                    <input type="text" class="form-control" id="eg_id" name="eg_id" value="<?php echo isset($editdata['eg_id']) ? $editdata['eg_id'] : ''; ?>" readonly>
                </div>
                    <br><br>
                <div class="form-group">
                    <label for="eg_name"><strong>Name :</strong></label>
                    <input type="text" class="form-control" id="eg_name" name="eg_name" value="<?php echo isset($editdata['eg_name']) ? $editdata['eg_name'] : ''; ?>">
                </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label><strong>Old Image :</strong></label><br>
                    <?php if(isset($editdata['eg_img'])): ?>
                        <br><br>
                    <img src="../../images/Event Images/<?php echo $editdata['eg_img']; ?>" class="img-fluid" style="border: 2px solid #ccc; width: 100%; max-height: 20vh;">
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fileimage"><strong>Exchange Image:</strong></label>
                    <input type="hidden" name="oldimage" value="<?php echo isset($editdata['eg_img']) ? $editdata['eg_img'] : ''; ?>">
                    <input type="file" name="fileimage" id="readUrl" class="form-control-file" onchange="showSelectedImage(this)">
                    <img id="uploadedImage" src="#" alt="Uploaded Image" accept="image/png, image/jpeg" style="display: none; border: 2px solid #ccc; width: 100%; max-height: 20vh;">
                </div>
            </div>
        </div>
    </div>
    <br><br>
        <div class="row">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success" name="btn-update">Update</button>&nbsp;&nbsp;&nbsp;
                <button type="reset" class="btn btn-warning" name="btn-reset" onclick="clearFileInput()">Reset</button>&nbsp;&nbsp;&nbsp;
                <a href="../client-gallery-update.php" class="btn btn-danger">Cancel</a> 
            </div>
        </div>
    </form>
</div>

    </div>

    <!-- Image will be display after choosen file -->

    <script>
        document.getElementById('readUrl').addEventListener('change', function(){

        if (this.files[0] ) {

        var picture = new FileReader();

        picture.readAsDataURL(this.files[0]);

        picture.addEventListener('load', function(event) {

        document.getElementById('uploadedImage').setAttribute('src', event.target.result);

        document.getElementById('uploadedImage').style.display = 'block';

        });

        }

    });
  </script>

  <!--When chosen file will be display ... And after when i click on reset then chosen file will be make in hidden-->

  <script>
    function showSelectedImage(input) {
        var uploadedImage = document.getElementById('uploadedImage');
        var file = input.files[0];
        var reader = new FileReader();
        
        reader.onload = function(e) {
            uploadedImage.src = e.target.result;
            uploadedImage.style.display = 'block';
        }
        
        reader.readAsDataURL(file);
    }

    function clearFileInput() {
        var uploadedImage = document.getElementById('uploadedImage');
        var fileInput = document.getElementById('readUrl');
        uploadedImage.style.display = 'none';
        fileInput.value = ''; // Clear the value of the file input
    }
</script>


</body>
</html>
