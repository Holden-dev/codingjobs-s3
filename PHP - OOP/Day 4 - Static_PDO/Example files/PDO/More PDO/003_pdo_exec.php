<?php
	/*
		It is possible to perform query, thanks to PDO, like this :
	 */
	
	$sql = 'INSERT INTO bugs (user_id, label, date) ' .
			 'VALUES(14, "Description", "2015-11-08");';

	$pdo->exec($sql);

	/*

		UPDATE QUERY :
	*/

	$bugId = 5;
	$sql = 	'UPDATE FROM bugs ' .
			 	'SET status = "resolved" ' .
			 	'WHERE bug_id = ' . $bugId;

	$pdo->exec($sql);

	/*
		Concatenation, in this case, is easier than prepared statement.

		Variables are not escaped with PDO::exec()
		It is dev duty to deal with it.

		PDO::exec() return affected number of rows
		Example : 
	 */

	$sql = 	'UPDATE FROM users ' .
			 	'SET login = "nono452" ' .
			 	'WHERE users.id = 42';

	$nbRows = $pdo->exec($sql);

	echo 'Update number of rows : ' . $nbRows;

	/*
		Example
	 */
	
	if($nbRows > 0) {
		echo 'User updated';
	} else {
		echo 'No user found with this ID';
	}
