<?php

/*
  Once the PDO :: query () method
  called, a cursor is placed on the first
  record of the rowset.

  The PDO :: fetch () function returns a
  recording under the cursor, and
  if we got to the end of the table, returns
  false.

  So we can test if we arrived at the end of
  rowset.

  We will have to loop on this rowset
  to display all the results, for example:

 */

$sql = 'SELECT title, year FROM movies;';
$stmt = $pdo->query($sql);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['title'] . '<br>';
    echo $row['year'];
}

/*
  You can also get all records in one line :
  PDO_Statement::fetchAll()
 */

$sql = 'SELECT * FROM clients';
$stmt = $pdo->query($sql);

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($results);

/*
  Array $results will contain a multidimensionnal array

  On peut donc l'utiliser comme un autre tableau:
 */

echo $results[0]['firstname'];
