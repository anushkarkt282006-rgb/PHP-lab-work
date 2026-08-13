<?php

if (isset($_COOKIE['username'])) {

    setcookie("username", "", time() - 3600, "/");

    echo "Cookie has been deleted successfully.";

} else {

    echo "Cookie does not exist.";

}
?>