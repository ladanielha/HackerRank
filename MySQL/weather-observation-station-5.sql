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

where LAT_N is the northern latitude and LONG_W is the western longitude.

Sample Input

For example, CITY has four entries: DEF, ABC, PQRS and WXY.

Sample Output

ABC 3
PQRS 4
Explanation

When ordered alphabetically, the CITY names are listed as ABC, DEF, PQRS, and WXY, with lengths  and . The longest name is PQRS, but there are  options for shortest named city. Choose ABC, because it comes first alphabetically.
 */


(SELECT city , LENGTH(city) AS city_len FROM station ORDER BY city_len ASC, city  LIMIT 1)
union 
(SELECT city , LENGTH(city) AS city_len FROM station ORDER BY city_len DESC, city LIMIT  1);