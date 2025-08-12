
<?php 

    session_start();

    if (isset($_SESSION['username'])) {
        // destroy session first

        session_destroy();

        header("location:../");
    } else {
        // already destroyed .. 

        header("location:../");
    }

?>