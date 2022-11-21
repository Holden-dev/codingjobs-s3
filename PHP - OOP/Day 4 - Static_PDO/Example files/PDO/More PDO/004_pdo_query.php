<?php

/*
  PDO::query() looks like PDO::exec(),
  but

  - PDO::exec() only return number of rows 
  affected by our SQL query ne retournera que le nombre
  de lignes affectées par notre requete SQL.

  - PDO::query() return a rowset
  
  We can loop this rowset and do operations, 
  like display...

 */

$movieId = 85;
$sql = 'SELECT title, year FROM movies WHERE id = ' . $movieId;
$result = $pdo->query($sql);

/*
  Query is now executed, PDO will now return results.

  For now, results are here, but we need to use
  PDO_Statement::fetch() to use them.
 */

$row = $result->fetch(PDO::FETCH_ASSOC);
echo $row['title'];
echo $row['year'];

/*
  PDO::fetch() only get the first record returned by MYSQL.
  We need to specify fetch mode : 

  PDO::FETCH_ASSOC return associative arrays.
  
  Cursor is now on the first record.
  We can call method a second time to move 
  the cursor on to the next record.

 */

$nextRow = $stmt->fetch(PDO::FETCH_ASSOC);

echo $row['title'];
// Display title of second recor

$pdo = null;
