<?php
include 'db.php';
include 'functions.php';

addBooks();

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book.css">
    <title>Add Book</title>
</head>

<body>
    <div>
        <h1>ADD BOOKS</h1>
        <form action="addbook.php" method="post">
            <label>
                Title:<input type="text" name="title"><br>
                Author:<input type="text" name="author"><br>
                Year:<input type="number" name="publishing_year"><br>
                Genre:<input type="text" name="genre"><br>
                Description:<textarea name="description" id="" cols="30" rows="5"></textarea><br>
            </label>
            <input type="submit" name="submit" value="CREATE">
        </form>
    </div>
</body>

</html>