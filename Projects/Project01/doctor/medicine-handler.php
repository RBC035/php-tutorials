<?php 
    require_once "../inc/connection.php" ;

    if (isset($_POST['addMedicine']))
    {
        $targetDir = "../inc/medicine/";
        $fileName = basename($_FILES["img"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        if(!empty($_FILES["img"]["name"])) 
        {
            $name = $_POST['mName'];
            $type = $_POST['mType'];
            $manufactured = $_POST['manufactured']; 
            $expired = $_POST['expired'];
            $img = $_FILES["img"]["name"];

            $allowTypes = array('png','PNG', 'jpg','JPG', 'JPEG', 'jpeg');
            if(in_array($fileType, $allowTypes))
            {
                //upload file to server
                if(move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath))
                {
                    $insert = "insert into  medicine (Name, Type, ManufacturedDate, ExpiredDate, image) values ('$name', '$type', '$manufactured', ' $expired', '$img') ";
                    $query = mysqli_query($con, $insert);

                    if ($query)
                    {
                        echo "<script> alert('Sucesfull  medicine registered '); </script> .<script>window.location='manage-medicine.php'</script>";
                    }
                    else 
                    {
                        echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='register-medicine.php'</script>";
                    }
                }
                else
                {
                   echo "Sorry, there was an error uploading your file.";
                }
            }
            else
            {
                echo "<script> alert('Sorry, only  png or PNG or jpg or JPG or JPEG & jpeg files are allowed to upload.'); </script> .<script>window.location='register-medicine.php'</script>";
            }
        }else{
            echo "<script> alert('Please upload medicine image'); </script> .<script>window.location='register-medicine.php'</script>";
        }
    }
    else  if (isset($_POST['changeMedicine']))
    {
        $name = $_POST['mName'];
        $type = $_POST['mType'];
        $manufactured = $_POST['manufactured']; 
        $expired = $_POST['expired'];
        $mid =  $_POST['id'];                   

        $update = "update medicine set Name = '$name',  Type = '$type', ManufacturedDate  = '$manufactured', ExpiredDate = '$expired' where MedicineID = '$mid' ";
        $query = mysqli_query($con, $update);

        if($query)
        {
            echo '<script> alert("Successufly medicine  changed")</script>.<script>window.location="manage-medicine.php"</script>';
        }
        else 
        {
            echo '<script> alert("Something wrong please try again")</script>.<script>window.location="medicine-edit.php?id=$mid"</script>'; 
        }
    }
    else 
    {
        header('location:index.php');
    }
?>