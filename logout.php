<?php

session_start();

session_destroy();

header("Location:initial.php?success=".urlencode("Logged Out Successfully!"));
exit();


?>