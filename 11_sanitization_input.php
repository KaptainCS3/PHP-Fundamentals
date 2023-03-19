<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if (isset($_POST['submit'])) {
    //! sanitize input alternative 1
    $name = '<h3>' . htmlspecialchars($_POST['name']) . '</h3>';
    $password = '<h3>' . ($_POST['password']) . '</h3>';
    echo $name;
    echo $password;
    //! sanitize input alternative 2
    $name = '<h3>' . filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS) . '</h3>';
    $password = '<h3>' . ($_POST['password']) . '</h3>';
    echo $name;
    echo $password;
} 
?>

<!-- Pass data through a link -->

<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?name=Brad">Link</a> 
<br><br>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>