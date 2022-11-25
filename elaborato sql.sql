
-- Database: GESTIONE ASL
--

DROP DATABASE IF EXISTS database_asl;
CREATE DATABASE database_asl;
USE database_asl;

--
-- Struttura utente
--
CREATE TABLE customer
(
  id int(11) NOT NULL PRIMARY KEY,
  username varchar(255) NOT NULL UNIQUE,
  name varchar(255) NOT NULL,
  surname varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  email varchar(255) DEFAULT NULL UNIQUE,
  tel varchar(255) DEFAULT NULL UNIQUE,
  is_admin tinyint(4) DEFAULT '0'
);

--
-- Dati di accesso di prova
-- Password for admin@lab.com: asdasd (dottore)
-- Password for mario2000@gmail.com: mario2000 (paziente)
--

INSERT INTO customer
  (id, username, name, surname, password, email, tel, is_admin)
VALUES
  (1, 'admin', 'admin', 'admin', 'SubFWQup0Xwc6', 'admin@lab.com', NULL, 1),
  (2, 'mario2000', 'Mario', 'Rossi', 'Su9XbbYKrGARQ', 'mario2000@gmail.com', '3659897842', 0);

-- --------------------------------------------------------

--
-- Struttura sede ASL
--

CREATE TABLE headquarter
(
  code int(11) NOT NULL PRIMARY KEY,
  phone varchar(255) NOT NULL,
  address varchar(255) NOT NULL,
  city varchar(255) NOT NULL
);

--
-- Inserimento dati sede ASL
--

INSERT INTO headquarter
  (code, phone, address, city)
VALUES
  (832075, '333333333333', 'Via da qui', 'Civitella del tronto');

-- --------------------------------------------------------

--
-- Struttura tabella prenotazioni
--

CREATE TABLE planned_drive
(
  id int(11) NOT NULL PRIMARY KEY,
  _date date NOT NULL,
  _time time NOT NULL,
  done tinyint(4) NOT NULL,
  absent tinyint(4) NOT NULL,
  accepted tinyint(4) NOT NULL,
  email varchar(255) NOT NULL,
  s_email varchar(255) NOT NULL,
  hq_code int(11) NOT NULL,
  details varchar(255) DEFAULT NULL
);

--
-- Inserimento dati per le prenotazioni
--

INSERT INTO planned_drive 
VALUES
(1, '2021-05-29', '10:30:00', 1, 0, 1, 'mario2000@gmail.com', 'admin@lab.com', 832075, 'null'),
(2, '2021-05-28', '10:30:00', 0, 0, 1, 'mario2000@gmail.com', 'admin@lab.com', 832075, NULL);

--
-- Auto incremento della tabella cliente
--
ALTER TABLE customer
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Auto incremento della tabella prenotazioni
--
ALTER TABLE planned_drive
MODIFY id int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;
