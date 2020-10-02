# scriptlanguage



//insert query

insert into persons(LastName, FirstName) VALUES ('Poudel', 'Ashish', 'He is space engineer');


//select query   *->all 

SELECT * from persons where PersonId = '2' or Address='Thankot';

SELECT * from persons where PersonId = '3' and Address='Thankot';

//update query
update persons set FirstName = 'Darth Vader', Details ='He is father of Luke Skywalker.' where PersonID = '2';

//delete query

delete from persons where FirstName = 'Darth Vader';