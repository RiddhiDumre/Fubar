<?php
    session_start();

    if($_SERVER['QUERY_STRING'] == 'noname')
    {
        unset($_SESSION['name']);
    }
    $name=$_SESSION['name'] ?? 'Guest';
    // getcookie();
    $gender=$_COOKIE['gender'] ?? 'unknown';
    $drama=unserialize($_COOKIE['drama']);
?>
<html>
    Hello <?php echo htmlspecialchars($name) ?>
    <?php echo htmlspecialchars($gender);
    print_r ($drama);?> 
</html>