

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Image & Details</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    /* Custom styles can be added here */
</style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="text-center mb-4">Add Image & Details</h2>
                    <form action="client-gallery-data-add.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="image"><strong>Select Image:</strong></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="readUrl" name="image" accept="image/*" required>
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                            <center><img id="uploadedImage" src="#" alt="Uploaded Image" accept="image/png, image/jpeg" class="mt-3 img-thumbnail" style="display: none; max-width: 250px; max-height: 250px;"></center>
                        </div>
                        <div class="form-group">
                            <label for="details"><strong>Image Name:</strong></label>
                            <textarea class="form-control" id="details" name="details" rows="3" required></textarea>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <button type="submit" name="btnsubmit" class="btn btn-success btn-block" name="btn-update">Update</button>
                            </div>
                            <div class="col-md-4">
                                <button type="reset" class="btn btn-warning btn-block" name="btn-reset" onclick="clearFileInput()">Reset</button>
                            </div>
                            <div class="col-md-4">
                                <a href="../client-gallery-update.php" class="btn btn-danger btn-block">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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



<?php
    include "../connection.php";

    if(isset($_POST['btnsubmit']))
    {
        $filename = $_FILES['image']['name'];
        $filedesc = $_POST['details'];

        // Temporary file name
        $tempname = $_FILES['image']['tmp_name'];

        // Move the uploaded file to the desired location
        move_uploaded_file($tempname, '../../images/Event Images/' . $filename);

        // Escape special characters to prevent SQL injection
        $filename = mysqli_real_escape_string($conn, $filename);
        $filedesc = mysqli_real_escape_string($conn, $filedesc);

        // SQL query to insert data into the database
        $sql = "INSERT INTO e_gallery (eg_img, eg_name) VALUES ('$filename', '$filedesc')";

        // Execute the SQL query
        $result = mysqli_query($conn, $sql);

        if($result)
        {
            // echo "Data inserted successfully";
            echo "<script>window.location.href='../client-gallery-update.php';</script>";          
        }
        else
        {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>
