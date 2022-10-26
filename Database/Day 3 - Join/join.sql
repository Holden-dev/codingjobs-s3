/*
    JOIN

    Joining allows you to associates/links different tables in the same query.
    It will allows you to grab informations from both table at the same time.

    You are doing the 'relation' between primary key / foreign key.

*/

SELECT title, name
FROM authors a
INNER JOIN books b ON a.id = b.author_id