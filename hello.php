<!DOCTYPE html>
<html>
<body>

    <?php
        session_start();
        $session_id = session_id();
    // Constant
        
        echo "The current session ID is: " . $session_id;
        
    ?>

</body>
</html>