<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
    // remove all session variables
    session_unset(); 

    // destroy the session 
    session_destroy(); 

    echo "<script> window.location='Login.php'; </script>";
?>

</body>
</html>