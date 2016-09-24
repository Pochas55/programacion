# Bases de Datos

## Índice
1. [Conceptos Básicos](#conceptos-básicos)
1. [Sistemas Gestores de Bases de Datos](#sistemas-gestores-de-bases-de-datos)
1. [MySQL](#mysql)
1. [Modelo Entidad-Relación](#modelo-entidad-relación)
1. [Normalización de Bases de Datos](#normalización-de-bases-de-datos)
1. [Sintaxis SQL](#sintaxis-sql)
1. [Sentencias de Objetos](#sentencias-de-objetos)
1. [Sentencias de Datos](#sentencias-de-datos)


## Conceptos Básicos

### Dato
Mínima unidad de Información
Es un valor (numérico, alfabético, algorítmico, espacial, etc)  que por sí sólo no dice mucho

### Información
Conjunto organizado de datos procesados, que constituyen un mensaje que cambia el estado de conocimiento del sujeto o sistema que recibe dicho mensaje

### Base de Datos
Son bancos de información que contienen datos relativos a diversas temáticas y categorizados de distinta manera, pero que comparten entre sí algún tipo de vínculo o relación que busca ordenarlos y clasificarlos en conjunto

### Lógica de Negocio
Es la parte de un sistema que se encarga de codificar las reglas de funcionamiento del mundo real que determinan como la información puede ser creada, mostrada, cambiada y eliminada. 
Son rutinas que realizan entradas de datos, consultas a los datos, generación de informes y más específicamente todo el procesamiento que se realiza detrás de la aplicación visible para el usuario (Backend)

**[⬆ regresar al índice](#Índice)**


## Sistemas Gestores de Bases de Datos

### Ejemplos

* La agenda de la Abuela
* Excel
* Access
* SQL Lite
* MySQL
* MariaDB
* Oracle
* MS SQL Server
* PostgreSQL
* Informix
* MongoDB
* RethinkDB
* Redis
* Cassandra
* Neo4j
* GraphDB

### Tipos de SGBD

* SQL (Structured Query Languaje)
	* Transaccionales: Access, MySQL, MariaDB, Oracle, MS SQL Server, PostgreSQL, Informix
* NoSQL (Not only SQL)
	* Documentales (BSON): MongoDB, RethinkDB
	* Clave-Valor: Redis, Cassandra
	* De Grafos: Neo4j, GraphDB

**[⬆ regresar al índice](#Índice)**


## MySQL

### Conceptos de BDs SQL

* Una BD tiene Tablas
* Una Tabla tiene Campos(columnas) y Registros(filas)
	* El conjunto de campos genera un Registro
	* Campo - un dato que no dice mucho
	* Registro - conjunto de campos que genera información

### Herramientas de Gestión

#### Terminal
```SQL
windows: cd c:/xampp/mysql/bin
mac: cd /Applications/XAMPP/bin
mysql -u root -p
ENTER PASSWORD: 
SHOW DATABASES;
USE nombre_bd;
SHOW TABLES;
DESCRIBE nombre_tabla
SHOW COLUMNS FROM nombre_tabla
SELECT campos_tabla FROM nombre_tabla;
SELECT * FROM nombre_tabla;
```

#### WebApp
* [phpMyAdmin](https://www.phpmyadmin.net/) teniendo [XAMPP](http://localhost/phpmyadmin)

#### Software
* [MySQL WorkBench](https://www.mysql.com/products/workbench/) (libre)
* [Navicat](http://www.navicat.com/es) (pago)

### Documentación
* [Documentación Oficial de MySQL](http://dev.mysql.com/doc/)
* [MySQL con Clase](http://mysql.conclase.net/curso/index.php)

**[⬆ regresar al índice](#Índice)**


## Modelo Entidad-Relación

Es un diagrama que permite representar las entidades relevantes de un sistema de información así como sus interrelaciones y propiedades

Formalmente, los diagramas ER son un lenguaje gráfico para describir conceptos. Informalmente, son simples dibujos o gráficos que describen información que trata un sistema de información y el software que lo automatiza

Elementos del Modelo Entidad-Relación
* **Entidades**
	Son objetos distinguible del resto; pe en un sistema bancario, las personas y las cuentas son entidades. Éstas pueden ser entes concretos, como una persona o un avión, o abstractas, como un préstamo o una reserva. Se representan por medio de un rectángulo

* **Atributos**
	Con propiedades de las entidades. Se representan mediante un círculo o elipse, cuando un atributo es identificativo de la entidad se subraya

* **Relación**
	Describe la dependencia entre entidades o permite la asociación de las mismas; pe tenemos 2 entidades CLIENTE y HABITACIÓN, una relación sería que el cliente 'Pepito' tiene 'ocupada' la habitación '519'. Se representan por medio de un verbo de acción dentro de un rombo que une entidades

### Tipos de Relaciones:

* **1 a 1**
	Un esposo(e) está casado(r) con una única esposa(e) y viceversa
* **1 a M**
	Una factura(e) se emite (r) a una persona(e) y sólo a una, pero una persona(e) puede tener(r) varias facturas(e) emitidas a su nombre. Todas las facturas(e) se emiten(r) a nombre de alguien(e)
* **M a M**
	Un cliente(e) puede comprar(r) varios productos(e) y un producto(e) puede ser comprado(r) por varios clientes(e)

### Herramientas para modelar:

* Cuaderno y Lápiz
* Microsoft Visio
* Cualquier Software de Diseño
* [Gliffy](https://www.gliffy.com/)
* [Lucidchart](https://www.lucidchart.com/)
* [Cacoo](https://cacoo.com/)

**[⬆ regresar al índice](#Índice)**


## Normalización de Bases de Datos

El proceso de normalización de bases de datos consiste en designar y aplicar una serie de reglas a las relaciones obtenidas tras el modelo entidad-relación

Las bases de datos relacionales se normalizan para:
* Evitar la redundancia de los datos
* Disminuir problemas de actualización de los datos en las tablas
* Proteger la integridad de los datos
		
Para que las tablas de nuestra BD estén normalizadas deben cumplir las siguientes reglas:
* Cada tabla debe tener su nombre único
* No puede haber dos filas iguales
* No se permiten los duplicados
* Todos los datos en una columna deben ser del mismo tipo

Existen 3 niveles de normalización que deben respetarse para poder decir que nuestra BDs, se encuentra NORMALIZADA, es decir, que cumple con los requisitos naturales para funcionar optimamente y no perjudicar el rendimiento por mala arquitectura

Estas 3 reglas de Normalización se les conoce como las 3 FORMAS NORMALES:

### Sin Normalizar:

**ALUMNOS**

 -------------------------------------------------------------------- 
| alumno  |	estudio_nivel |	estudio_nombre	 | materia_1 | materia_2 |
| ------- | ------------- | ---------------- | --------- | --------- |
| Juanito |	Maestría	  | Medios Virtuales | MySQL	 | PHP       |
| Pepito  |	Licenciatura  |	Diseño Digital	 | MySQL	 | PHP       |
 -------------------------------------------------------------------- 

### Primera Forma Normal:
* NO repetir campos en las tablas (atributos atómicos)

**ALUMNOS**

 ------------------------------------------------------------------------
| alumno_id	| alumno_nombre | estudio_nivel | estudio_nombre   | materia |
| --------- | ------------- | ------------- | ---------------- | ------- |
| 1			| Juanito		| Maestría		| Medios Virtuales | MySQL   |
| 1			| Juanito		| Maestría		| Medios Virtuales | PHP     |
| 2			| Pepito		| Licenciatura	| Diseño Digital   | MySQL   |
| 2			| Pepito		| Licenciatura	| Diseño Digital   | PHP     |
 ------------------------------------------------------------------------

### Segunda Forma Normal:

* Se debe aplicar la 1FN
* Cada campo de la tabla debe depender de una clave única, si tuvieramos alguna columna que se repite a lo largo de todos los registros, dichos datos deberian atomizarse en una nueva tabla

**ALUMNOS**

 --------------------------------------------------------------
| alumno_id	| alumno_nombre | estudio_nivel | estudio_nombre   |
| --------- | ------------- | ------------- | ---------------- |
| 1			| Juanito		| Maestría		| Medios Virtuales |
| 2			| Pepito		| Licenciatura	| Diseño Digital   |
 --------------------------------------------------------------

**MATERIAS**

 -----------------------------------------
| materia_id | alumno_id | materia_nombre |
| ---------- | --------- | -------------- |
| 1			 | 1	     | MySQL          |
| 2			 | 1	     | PHP            |
| 3			 | 2	     | MySQL          |
| 4			 | 2	     | PHP            |
 -----------------------------------------

### Tercera Forma Normal:

* Se debe aplicar la 1FN y 2FN
* Los campos que NO son clave NO deben tener dependencias

### Forma Normal Boyce-Codd (FNBC)

* Se debe aplicar la 1FN, 2FN y 3FN
* Es una versión mejorada de la 3FN
* Los campos que NO son clave NO deben tener dependencias
* Los campos que NO dependan de la clave se deben eliminar

**ALUMNOS**

 ----------------------------------------
| alumno_id	| alumno_nombre | estudio_id |
| --------- | ------------- | ---------- |
| 1			| Juanito		| 1     	 |
| 2			| Pepito		| 2		 	 |
 ----------------------------------------

**ESTUDIOS**

 -----------------------------------------------
| estudio_id | estudio_nivel | estudio_nombre   |
| ---------- | ------------- | ---------------- |
| 1			 | Maestría		 | Medios Virtuales |
| 2			 | Licenciatura	 | Diseño Digital   |
 -----------------------------------------------

**MATERIAS**

 -----------------------------------------
| materia_id | alumno_id | materia_nombre |
| ---------- | --------- | -------------- |
| 1			 | 1	     | MySQL          |
| 2			 | 1	     | PHP            |
| 3			 | 2	     | MySQL          |
| 4			 | 2	     | PHP            |
 -----------------------------------------

### Cuarta Forma Normal:

* Se debe aplicar la FNBC
* La 4FN aplica únicamente para relaciones M a M, y nos ayuda a eliminar la redundancia de información generada por dicho tipo de relación

**ALUMNOS**

 ----------------------------------------
| alumno_id	| alumno_nombre | estudio_id |
| --------- | ------------- | ---------- |
| 1			| Juanito		| 1     	 |
| 2			| Pepito		| 2		 	 |
 ----------------------------------------

**ESTUDIOS**

 -----------------------------------------------
| estudio_id | estudio_nivel | estudio_nombre   |
| ---------- | ------------- | ---------------- |
| 1			 | Maestría		 | Medios Virtuales |
| 2			 | Licenciatura	 | Diseño Digital   |
 -----------------------------------------------

**MATERIAS**

 -----------------------------
| materia_id | materia_nombre |
| ---------- | -------------- |
| 1			 | MySQL          |
| 2			 | PHP            |
 -----------------------------

**MATERIAS X ALUMNO**

 ---------------------------------
| mxa_id | alumno_id | materia_id |
| ------ | --------- | ---------- |
| 1		 | 1		 | 1		  |
| 2		 | 1		 | 2		  |
| 3		 | 2		 | 1		  |
| 4		 | 2		 | 2		  |
 ---------------------------------

### Quinta Forma Normal:

* Se debe aplicar la 1FN, 2FN, 3FN y 4FN
* Existe otro nivel de normalización que se aplica con poca frecuencia y en la mayoria de los casos no es necesario para obtener la mejor funcionalidad de nuestra estructura de datos. Su principio sugiere:

La tabla original debe ser reconstruida desde las tablas resultantes en las cuales ha sido partida

Los beneficios de aplicar la 5FN asegura que no se haya creado ninguna columna extraña en las tablas y que su estructura sea del tamaño justo que tiene que ser

Es una buena práctica aplicar la 5FN, cuando tenemos una extensa y compleja estructura de datos, en modelos pequeños no se recomienda usar

**[⬆ regresar al índice](#Índice)**


## Sintaxis SQL

### Tipos de Sentencias
* De Objetos
* De Datos

### Concepto CRUD
* Create
* Read
* Update
* Delete

![CRUD](http://bextlan.com/img/para-cursos/crud.png)

**[⬆ regresar al índice](#Índice)**

## Sentencias de Objetos
Objetos básicos en SQL: Bases de Datos, Tablas y Usuarios (y sus Privilegios)
		
### Bases de Datos
```SQL
CREATE DATABASE
DROP DATABASE
SHOW DATABASES
USE
```
		
### Tablas
```SQL
CREATE TABLE
DROP TABLE
ALTER TABLE [ADD COLUMN || DROP COLUMN || MODIFY]
DESCRIBE
```

### Usuarios
```SQL
CREATE USER my_user IDENTIFIED BY 'my_password';
SELECT PASSWORD('my_password'); //contraseña en hash
CREATE USER my_user IDENTIFIED BY PASSWORD 'clave hash';
DROP USER my_user;
```

### Privilegios
```SQL
GRANT ALL PRIVILEGES ON data_base.table TO 'my_user'@'my_host' -> IDENTIFIED BY 'my_password' WITH GRANT OPTION;
SHOW GRANTS for 'my_user'@'my_host';
REVOKE [PRIVILEGES], GRANT OPTION FROM 'my_user'@'my_host';
FLUSH PRIVILEGES;
```

### Más info interesante sobre objetos
* Motores de Tablas
	* [MyISAM vs InnoDB](http://www.webreunidos.es/blog/myisam-vs-innodb/)
	* [¿Qué motor elegir?](http://blog.arsys.es/myisam-o-innodb-elige-tu-motor-de-almacenamiento-mysql/)
	* [Diferencias](http://blog.openalfa.com/diferencias-entre-innodb-y-myisam-en-mysql)
* [Usuarios y Privilegios](http://rm-rf.es/usuario-mysql-como-crear-borrar-y-asignar-privilegios/)
* [Tipos de Datos en MySQL](http://mysql.conclase.net/curso/index.php?cap=005#)
* [Búsquedas FULLTEXT](http://dev.mysql.com/doc/internals/en/full-text-search.html)
* [Restricciones](http://blog.openalfa.com/como-trabajar-con-restricciones-de-clave-externa-en-mysql)
	* ON DELETE y ON UPDATE
		* RESTRICT
		* CASCADE
		* SET NULL
		* NO ACTION
* [Encriptación](http://dev.mysql.com/doc/refman/5.7/en/encryption-functions.html)

**[⬆ regresar al índice](#Índice)**

## Sentencias de Datos

* Create - **`INSERT`**
* Read   - **`SELECT`**
* Update - **`UPDATE`**
* Delete - **`DELETE`**

### CREATE
Insertar un registro
```SQL
INSERT INTO table (field_1, field_2, ..., field_n) 
	VALUES (value_1, value2, ..., value_n);

INSERT INTO table 
	SET field_1 = 'value_1', field_2 = 'value_2', ..., field_n = value_n;
```

Insertar varios registros:
```SQL
INSERT INTO table (field_1, field_2, ..., field_n) VALUES
	(value_1, value2, ..., value_n),
	(value_1, value2, ..., value_n),
	...,
	(value_1, value2, ..., value_n);
```

### READ
Leer todos los campos de la tabla:
```SQL
SELECT * FROM table;
```

Leer algunos campos de la tabla:
```SQL
SELECT field_1, field_2, field_n FROM table
```

Leer un registro en particular buscando el valor de un campo
```SQL
SELECT * FROM table WHERE field_1 = 'valor_1'
```

Leer un registro en particular buscando el valor de más de 2 campos con operadores lógicos
```SQL
SELECT * FROM table WHERE field_1 = 'valor_1' AND field_2 = 'valor_2'
SELECT * FROM table WHERE field_1 = 'valor_1' OR field_2 = 'valor_2'
```

Leer un registro en particular buscando el valor similar de un campo
```SQL
SELECT * FROM table WHERE field_1 LIKE '%valor_1'
SELECT * FROM table WHERE field_1 LIKE 'valor_1%'
SELECT * FROM table WHERE field_1 LIKE '%valor_1%'
```

Saber cuantos registros tiene mi tabla:
```SQL
SELECT COUNT(*) FROM table;
```

### UPDATE
Siempre agregar la clausula WHERE para evitar actualizar toda la tabla
```SQL
UPDATE table 
	SET field_1 = 'value_1', field_2 = 'value_2', ..., field_n = value_n  
	WHERE field = value
```

### DELETE
Siempre agregar la clausula WHERE para evitar eliminar toda la tabla

**[NO TE OLVIDES DEL WHERE EN EL DELETE FROM](https://www.youtube.com/watch?v=i_cVJgIz_Cs)**

```SQL
DELETE FROM table WHERE field = value
```

### CONSULTAS MÚLTIPLES
Datos de 2 o más tablas
```SQL
SELECT * FROM table1 AS t1 
	INNER JOIN table2 AS t2

SELECT * FROM table1 AS t1 
	INNER JOIN table2 AS t2
	ON t1.a_field = t2.a_field

SELECT t1.field1, t1.field2, t1.field3, t2.field1, t2.field5
	FROM table1 AS t1 
	INNER JOIN table2 AS t2
	ON t1.field1 = t2.field5

	WHERE t1.field1 = 'a_value'
	ORDER BY t1.field3 DESC
```

* [Definición de Join](https://es.wikipedia.org/wiki/Join)
* [Tipos de Joins](http://www.nebaris.com/post/77/tipos-de-join-en-sql)
* [Joins de Manera Gráfica](http://www.genbetadev.com/bases-de-datos/explicacion-grafica-de-los-join-en-sql-y-sus-resultados)

### CONSULTAS FULLTEXT KEY

```SQL
SELECT * FROM table
	WHERE MATCH(field1, field2, field3, field4)
	AGAINST('a_search' IN BOOLEAN MODE);

SELECT t1.field1, t1.field2, t2.field1, t2.field4
	FROM table1 AS t1
	INNER JOIN table2 AS t2
	ON t1.field1 = t2.field4
	WHERE MATCH(t1.field1, t1.field2, t2.field1, t2.field4)
	AGAINST('a_search' IN BOOLEAN MODE);
```

**[⬆ regresar al índice](#Índice)**