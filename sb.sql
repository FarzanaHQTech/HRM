-- 1.	Organizers
-- o	id (PK, INT, Auto Increment)
-- o	organizer_name (VARCHAR)
-- o	address (TEXT)
-- o	contact_number (VARCHAR)

create table if not exists organizer(
    id int auto_increment primary key,
    organizer_name varchar(50),
    address varchar(100),
    contact_number varchar(100)
);

INSERT into organizer(organizer_name,address,contact_number) VALUES ("FarzTechnology","Gulshan",+9875432);


-- 2.	Person
-- o	id (PK, INT, Auto Increment)
-- o	first_name (VARCHAR)
-- o	last_name (VARCHAR)
-- o	contact_number (VARCHAR)
-- o	email (VARCHAR, unique)
-- o	address (TEXT)
-- o	created_at (TIMESTAMP)
-- o	updated_at (TIMESTAMP)

create table if not exists person(
    id int auto_increment primary key,
    first_name varchar(50),
    last_name varchar(50),
    contact_number varchar(50),
    email varchar(50),
    address varchar(50),
    position_id int,
    created_at timestamp NOT naymur datetime DEFAULT on UPDATE current_timestamp(),
    `updated_at` datetime DEFAULT NULL
);



create table if not exists users(
    id int auto_increment primary key,
    -- user varchar(50),
    username varchar(50),
    mobile varchar(50),
    email varchar(50),
    password varchar(50),
    image varchar(50),
    role_id int,
    person_id int,
    organizer_id int,
     `updated_at` datetime DEFAULT NULL
);

INSERT INTO users (username, mobile, email, password, role_id, person_id, organizer_id) VALUES 
("Farzana", "017899832", "admin@gmail.com", "admin1234", 1, 1, 1),
("Mehedy", "017899832", "admin@gmail.com", "admin1234", 2, 2, 1),
("Farzana", "017899832", "admin@gmail.com", "admin1234", 1, 1, 1),
("Hasan", "017899832", "admin@gmail.com", "admin1234", 3, 3, 1);



create table if not exists roles(
    id int auto_increment primary key,
    role_name varchar(50)
);
INSERT INTO roles(role_name) values
("Admin"),
("Superadmin"),
("HR"),
("Manager");

-- 2.	Users
-- o	id (PK, INT, Auto Increment)
-- o	username (VARCHAR)
-- o	password (VARCHAR, hashed)
-- o	role_id (FK to roles table)
-- o	email (VARCHAR)
-- o	organizer_id (Foreign Key to Organizers.id)


-- 3.	Roles
-- o	id (PK, INT, Auto Increment)
-- o	role_name (VARCHAR)




-- 4.	Departments (Linked to an organizer for organizational-level management)
-- o	id (PK, INT, Auto Increment)
-- o	department_name (VARCHAR)
-- o	description (TEXT)
-- o	organizer_id (Foreign Key to Organizers.id)
-- o	created_at (TIMESTAMP)
-- o	updated_at (TIMESTAMP)
