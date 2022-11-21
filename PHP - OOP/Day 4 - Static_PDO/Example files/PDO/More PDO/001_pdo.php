<?php
	/*
		PDO : PHP Data Object

		We're connecting using a DSN

		http://php.net/manual/fr/ref.pdo-mysql.connection.php

		Data Source Name
		It summarize informations regarding database connection.
		
		We'll use PDO & PDOStatement classes to access database.

		PDO  			: Access our DB
		PDOStatement 	: Query we'll send
	 */
	
	$strConnection = 'mysql:host=localhost;dbname=devis';

	$pdo = new PDO($strConnection, 'root', 'root');

	/*
		We can now query this object :
	 */
	$query = 'DELETE FROM ma_table WHERE id=12;';
	$pdo->exec($query);

	/*
		
	 */
	// Prepare query
	$query = 'SELECT * FROM ma_table WHERE id=? AND cat=?';
	$prep = $pdo->prepare($query);	// Return a PDOStatement
	 
	// Associate values to placeholder
	$prep->bindValue(1, 47, PDO::PARAM_INT);
	$prep->bindValue(2, 'categorie_1');
	 
	// Compile et execute query
	$prep->execute();

	/*
		Pros of prepared statement :
			- safer
			- better performances
		
		Usefull if we want to insert multiple line.
		In this case, instead of doing multiple insert query, 
		we'll reuse prepared statement in a loop.

	 */
        
	$strConnection = 'mysql:host=localhost;dbname=devis';

	$dbh = new PDO($strConnection, 'root', 'root');
        
	$stmt = $dbh->prepare("INSERT INTO REGISTRY (name, value) VALUES (?, ?)");

	
	$stmt->bindParam(1, $name);
	$stmt->bindParam(2, $value);

	// insert one record
	$name = 'one';
	$value = 1;
	$stmt->execute();

	// insert another record
	$name = 'two';
	$value = 2;
	$stmt->execute();

	
