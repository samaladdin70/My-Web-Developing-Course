/*
 SELECT 
    *
FROM
    employees.employees
WHERE
    first_name NOT IN ('Cathie' , 'Mark', 'Nathan');
    
SELECT 
    *
FROM
    employees.employees
WHERE
-- % match all char
    first_name LIKE ('Mar%');
SELECT 
    *
FROM
    employees.employees
WHERE
-- _ match one char
    first_name LIKE ('Mar_');
 SELECT 
    *
FROM
    employees.employees
WHERE
    first_name NOT LIKE ('%Mar%');
*/
/*
SELECT 
    *
FROM
    employees.employees
WHERE
    hire_date BETWEEN '1990-1-1' AND '2000-1-1';
*/
/*
SELECT 
    *
FROM
    employees.employees
WHERE
    hire_date NOT BETWEEN '1990-1-1' AND '2000-1-1';
*/
# BETWEEN ... AND 
-- not used only for date values
-- could also be applied to strings and numbers

# IS NOT NULL / IS NULL
# IS NOT NULL
-- used to extract values that are not null
/*
SELECT 
    *
FROM
    employees.employees
WHERE
    first_name IS NOT NULL;
*/
/*
SELECT 
    *
FROM
    employees.employees
WHERE
    first_name IS NULL;
*/
# Other Comparison Operators
# so far:
-- BETWEEN .. AND       NOT BETWEEN ... AND
-- LIKE                 NOT LIKE
-- IS NULL              IS NOT NULL
# the other comparison operators are:
# -------------------------------------------------------|
# SQL                 |      meaning                     |
# --------------------|----------------------------------|
#  =                  |      equal to                    |
#  >                  |      greater than                |
#  >=                 |      greater than or equal       |
#  <                  |      less than                   |
#  <=                 |      less than or equal          |
#  <> , !=            |      not equal or different from |
# -------------------------------------------------------|
/*
SELECT 
    *
FROM
    employees.employees
WHERE
    first_name != 'mark';
*/
/*
SELECT 
    *
FROM
    employees.employees
WHERE
    hire_date > '2000-01-01';
*/
/*
SELECT 
    *
FROM
    employees.employees
WHERE
    hire_date >= '2000-01-01';
*/
/*
SELECT 
    *
FROM
    employees.employees
WHERE
    hire_date < '1985-02-01';
*/
/*
SELECT 
    *
FROM
    employees.employees
WHERE
    hire_date <= '1985-02-01';
*/
# SELECT DISTINCT
/*
SELECT 
    gender
FROM
    employees.employees;
*/
-- the above returns all rows for gender field
-- but
/*
SELECT DISTINCT
    gender
FROM
    employees.employees;
*/
-- the above here returns 2 rows only for values M or F and not repeated
# ----------------------------------------------------------------

# ORDER BY
SELECT 
    *
FROM
    employees.employees
ORDER BY first_name;
--  the above re-arrange the output alphabiticaly by first_name in ascending ASC order by default


