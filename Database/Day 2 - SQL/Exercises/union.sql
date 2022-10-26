/*
    UNION

    Union command is merging/combining the result from two different SELECT statements.
    It is used when you have similar tables and you want to combine the results.

*/

SELECT *
FROM movies
UNION
SELECT *
FROM tvshow

/****/ 

SELECT *
FROM books
UNION
SELECT *
FROM novels