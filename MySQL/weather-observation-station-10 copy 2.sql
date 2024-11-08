/*
Query all columns for every row in the city table 
The City table described ad follows: 


+-------------+--------------+
| Field       | Type         |
+-------------+--------------+
| ID          | NUMBER       |
| NAME        | VARCHAR2(17) |
| COUNTRYCODE | VARCHAR2(3)  |
| DISTRICT    | VARCHAR2(20) |
| POPULATION  | NUMBER       |
+-------------+--------------+
Query the list of CITY names from STATION that do not end with vowels. Your result cannot contain duplicates.
*/

SELECT  DISTINCT(CITY)
FROM STATION 
WHERE CITY NOT REGEXP '[aeiouAEIOU]$';