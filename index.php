<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Solution</title>

</head>

<body>
    <form action="/" method="post">
        <label for="name">Who do you think the robber is?</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Submit</button>
    </form>

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

</body>

</html>