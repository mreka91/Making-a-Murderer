<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Solution</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22256%22 height=%22256%22 viewBox=%220 0 100 100%22><text x=%2250%%22 y=%2250%%22 dominant-baseline=%22central%22 text-anchor=%22middle%22 font-size=%2290%22>💰</text></svg>" />
</head>

<body>
    <form action="/" method="post">
        <label for="name">Who do you think the robber is?</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Submit</button>
    </form>
    <div class="solution">
        <?php
        if (isset($_POST['name'])) {

            $name = $_POST['name'];

            if ($name === 'Anders Page') {
                echo '✨YAY! You got it!✨';
            } else {
                echo '🙅NAY! Try again.🙅';
            }
        }
        ?>
    </div>
</body>

</html>