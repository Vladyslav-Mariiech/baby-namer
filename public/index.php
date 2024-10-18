<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Babe Namer</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<div class="container">
    <h1>Baby Namer</h1>
    <form action="submit.php" method="post">
        <input type="text" name="name" required placeholder="Add name">
        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="">Choose gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <button type="submit">Add</button>
    </form>

    <form action="reset.php" method="post" style="margin-top: 20px;">
        <button type="submit">Reset Names</button>
    </form>

    <h2>List of Names</h2>

    <h3>Boys</h3>
    <ul>
        <?php
        include '../src/functions.php';
        list($boys, $girls) = loadNames('../names.txt');
        displayNames($boys);
        ?>
    </ul>

    <h3>Girls</h3>
    <ul>
        <?php
        displayNames($girls);
        ?>
    </ul>
</div>
</body>
<footer>
    <p>Created by © Vladyslav Mariiech, 2024</p>
</footer>
</html>