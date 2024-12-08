<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mysql </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


  CREATE TABLE address(
   id int(100) PRIMARY KEY AUTO_INCREMENT,
   location varchar (255) NOT NULL
)

CREATE TABLE studnts(
   id int(100) PRIMARY KEY AUTO_INCREMENT,
   name varchar (255) NOT NULL,
   age int (100)  NOT NULL,
   email varchar (255) NOT NULL,
   address_id int (100) NOT NULL,
   FOREIGN KEY (a_id) REFERENCES address(id)
    )
/** sql add query address table location*/
    INSERT INTO address(location)VALUES("BADDA")

/** sql add query students table*/
    INSERT INTO studnts( name, age, email, address_id) VALUES
    ('robin',11,'robin@gmail.com',4)

/**select table  */
SELECT * FROM studnts;

/**select table  */
     SELECT name, age, email, address_id FROM studnts;

/**select speafice 1 id */
     SELECT * FROM studnts WHERE id=1;

/**select speafice 1 name*/
     SELECT * FROM studnts WHERE name="faran";

/**change all name,id email*/
     UPDATE studnts SET name="kabir", email="kabir@gmail.com" WHERE id=2;

 /**delete all name,id email*/
     DELETE FROM address WHERE id=6;


///all table add korar janno
    SELECT * FROM
    address,studnts;

/// clear output dejhar janno
    SELECT * FROM 
    address,studnts
    WHERE address.id = studnts.id;

///serialize kore dekeher janno
    SELECT studnts.name studnts.age,studnts.email,studnts.address_id
     FROM 
     address,studnts
     WHERE address.id = studnts.id;

// or operator

SELECT * FORM student WHERE name="robin" or age=11;

// and operator
SELECT * FORM student WHERE name="robin" and age=11;


/serch form find anyone like namer first a k or laste k stream_set_chunk_size

/namer sese jar r ache take khujbe
SELECT * FROM  studnts WHERE name LIKE "%k";

/namer sese/suru/medel jar r ache take khujbe
SELECT * FROM  studnts WHERE name LIKE "%k%";

/asc dekhonor janno
SELECT * FROM studnts
ORDER BY name ASC;

/show different different 
SELECT studnts.name,studnts.email FROM
studnts
ORDER BY name ASC;




























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>