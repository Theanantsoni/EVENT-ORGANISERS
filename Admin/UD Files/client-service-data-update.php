<?php
    include "../connection.php";

    // Check if ID is set and numeric
    if(isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];

        // Fetch data for the selected ID
        $sql = "SELECT * FROM e_service WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            // Assign fetched data to variables for use in the form
            $title = $row['title'];
            $description = $row['description'];
            $description1 = $row['description1'];
            $description2 = $row['description2'];
            $description3 = $row['description3'];
            $description4 = $row['description4'];
            // You can add more fields as needed
            $image = $row['image']; // Assuming image file name is stored in the database
        } else {
            echo "Service not found.";
            exit(); // Stop further execution if service not found
        }
    } else {
        echo "Invalid ID.";
        exit(); // Stop further execution if invalid ID
    }

    $editdata = null; // Initialize $editdata variable

    if(isset($_GET['id'])) {
        $editid = isset($_GET['id']) ? mysqli_real_escape_string($conn, $_GET['id']) : null;

        $sql = "SELECT * FROM e_service WHERE id='$editid'";
        $result = mysqli_query($conn, $sql);

        if($result && mysqli_num_rows($result) > 0) {
            $editdata = mysqli_fetch_assoc($result);
        } else {
            echo "No data found for id = $editid";
            exit; // Exit if no data found
        }
    }

    if(isset($_POST['btn-update'])) {
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $description1 = mysqli_real_escape_string($conn, $_POST['description1']);
        $description2 = mysqli_real_escape_string($conn, $_POST['description2']);
        $description3 = mysqli_real_escape_string($conn, $_POST['description3']);
        $description4 = mysqli_real_escape_string($conn, $_POST['description4']);

        // Check if file is uploaded
        if(isset($_FILES['fileimage']) && $_FILES['fileimage']['error'] === UPLOAD_ERR_OK) {
            $filename = $_FILES['fileimage']['name'];
            $tempname = $_FILES['fileimage']['tmp_name'];
            $target_dir = '../../images/';
            $target_file = $target_dir . basename($filename);
            
            // Check file type if needed
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "Sorry, only JPG, JPEG, PNG files are allowed.";
                exit();
            }
            
            // Move uploaded file to destination directory
            if(move_uploaded_file($tempname, $target_file)) {
                // Update image field in the database
                $sql = "UPDATE e_service SET title='$title', description='$description', description1='$description1', description2='$description2', description3='$description3', description4='$description4', image='$filename' WHERE id='$id'";
                $result = mysqli_query($conn, $sql);

                if($result) {
                    echo "Data Updated Successfully";
                    header('location: ../client-service-update.php');
                    exit(); // Add exit after header to prevent further execution
                } else {
                    echo "Error updating data: " . mysqli_error($conn);
                }
            } else {
                echo "Error uploading file.";
            }
        } else {
            // If no image is uploaded, update all other fields except the image
            $sql = "UPDATE e_service SET title='$title', description='$description', description1='$description1', description2='$description2', description3='$description3', description4='$description4' WHERE id='$id'";
            $result = mysqli_query($conn, $sql);

            if($result) {
                echo "Data Updated Successfully";
                header('location: ../client-service-update.php');
                exit(); // Add exit after header to prevent further execution
            } else {
                echo "Error updating data: " . mysqli_error($conn);
            }
        }
    } 

    if(isset($_POST['btn-reset'])) {
        header('location: ../client-service-update.php');
        exit(); // Add exit after header to prevent further execution
    }
?>












<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
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
<body>
    <!-- <h1 class="custom-heading">Client Service Update Information</h1> -->

    <h1 class="custom-heading text-center mt-5 glow">Client Service Update Information</h1>

<div class="container">
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <!-- Top Left: ID -->
                <div class="form-group">
                    <label for="id"><strong>Id :</strong></label>
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $id; ?>" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Top Right: Title -->
                <div class="form-group">
                    <label for="title"><strong>Title :</strong></label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>">
                </div>
            </div>
        </div>
        <!-- Full Row: Description -->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="description"><strong>Description :</strong></label>
                    <textarea class="form-control" id="description" rows="3" name="description"><?php echo $description; ?></textarea>
                </div>
            </div>
        </div>
        <!-- Two Rows: Description1, Description2 -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description1"><strong>Description 1 :</strong></label>
                    <textarea class="form-control" id="description1" rows="3" name="description1"><?php echo $description1; ?></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description2"><strong>Description 2 :</strong></label>
                    <textarea class="form-control" id="description2" rows="3" name="description2"><?php echo $description2; ?></textarea>
                </div>
            </div>
        </div>
        <!-- Two Rows: Description3, Description4 -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description3"><strong>Description 3 :</strong></label>
                    <textarea class="form-control" id="description3" rows="3" name="description3"><?php echo $description3; ?></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description4"><strong>Description 4 :</strong></label>
                    <textarea class="form-control" id="description4" rows="3" name="description4"><?php echo $description4; ?></textarea>
                </div>
            </div>
        </div>
        <!-- Bottom Row: Old Image and Exchange Image -->
        <div class="row">
            <div class="col-md-6">
                <!-- Bottom Left: Old Image -->
                <div class="form-group">
                    <label><strong>Old Image :</strong></label>
                    <br><br><br>
                    <img src="../../images/<?php echo $image; ?>" class="img-fluid" style="width: 220px; height: 220px; margin-top: 20px;">
                </div>
            </div>
            <div class="col-md-6">
                <!-- Bottom Right: Exchange Image -->
                <div class="form-group">
                    <label for="fileimage"><strong>Exchange Image :</strong></label>
                    <input type="hidden" name="oldimage" value="<?php echo isset($editdata['image']) ? $editdata['image'] : ''; ?>">
                    <input type="file" name="fileimage" id="readUrl" class="form-control-file" onchange="showSelectedImage(this)"><br>
                    <img id="uploadedImage" src="#" alt="Uploaded Image" accept="image/png, image/jpeg" style="display: none; border: 2px solid #ccc; width: 220px; height: 220px;">
                </div>
            </div>
        </div><br>
        <!-- Buttons -->
        <div class="row">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success btn-lg glow" name="btn-update">Update</button>&nbsp;&nbsp;&nbsp;
                <button type="reset" class="btn btn-warning btn-lg glow" name="btn-reset" onclick="clearFileInput()">Reset</button>&nbsp;&nbsp;&nbsp;
                <a href="../client-service-update.php" class="btn btn-danger btn-lg glow">Cancel</a> 
            </div>
        </div><br>
    </form>
</div>


    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Image will be display after choosen file -->

<script>
    // Script for showing selected image
    function showSelectedImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#uploadedImage')
                    .attr('src', e.target.result)
                    .show();
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            // If no file is selected, hide the uploaded image
            $('#uploadedImage').hide();
        }
    }

    // Script for clearing file input
    function clearFileInput() {
        $('#readUrl').val('');
        $('#uploadedImage').hide();
    }
</script>


</body>
</html>
