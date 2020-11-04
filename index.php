<?php
if (isset($_POST['name'])) {

    $name = $_POST['name'];

    if ($name === 'Anders Page') {
        echo 'YAY! You got it!';
    } else {
        echo 'NAY! Try again.';
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution</title>

</head>

<body>

    <form action="/" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Submit</button>
    </form>
</body>

</html>