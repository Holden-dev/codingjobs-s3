<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php require_once 'nav.php' ?>

    <h1>Movies list</h1>

    <form id="movies-search" method="POST">
        <input type="text" name="searchBox" placeholder="Type title of a movie...">
        <input type="submit" name="searchBtn" value="Search">
    </form>

    <div id="movies-filter">
        <form>
            <label for="filter_title">Sort by title</label>

            <select name="filter_title" id="filter_title">
                <option value="asc">ASC</option>
                <option value="desc">DESC</option>
            </select>

            <input type="submit" name="sortBtn" value="Sort">
        </form>

        <form>
            <label for="filter_date">Sort by date</label>

            <select name="filter_date" id="filter_date">
                <option value="asc">ASC</option>
                <option value="desc">DESC</option>
            </select>

            <input type="submit" name="sortBtn" value="Sort">
        </form>
    </div>

    <div id="movies-list">
    </div>

    <script>
        fetch('get-movies.php', {
                method: 'get'
            }).then(res => res.text())
            .then(function(result) {
                document.getElementById('movies-list').innerHTML = result;
                console.log(result);
            });
    </script>
</body>

</html>