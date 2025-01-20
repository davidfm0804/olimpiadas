CREATE TABLE pruebas(
    idPrueba smallint unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(50) NOT NULL
);
CREATE TABLE alumnos(
    idAlumnos int unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(50) NOT NULL,
    CodClase char(5) NOT NULL
);
CREATE TABLE inscripciones(
    idInscripcion smallint unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    idAlumnos int unsigned NOT NULL UNIQUE, 
    idPrueba smallint unsigned NOT NULL,
    FOREIGN KEY (idAlumnos) REFERENCES alumnos(idAlumnos) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idPrueba) REFERENCES pruebas(idPrueba) ON DELETE CASCADE ON UPDATE CASCADE
);


-- Inserción de datos en la tabla pruebas
INSERT INTO pruebas (nombre) VALUES
('Salto de longitud'),
('Lanzamiento de jabalina'),
('Carrera de 100 metros'),
('Salto de altura'),
('Relevo 4x100');

-- Inserción de datos en la tabla alumnos
INSERT INTO alumnos (nombre, CodClase) VALUES
('Juan Pérez', '1ESOA'),
('María López', '1ESOB'),
('Carlos Gómez', '1ESOC'),
('Lucía Fernández', '1ESOD');

-- Inserción de datos en la tabla inscripciones
INSERT INTO inscripciones (idAlumnos, idPrueba) VALUES
(1, 1), -- Juan Pérez inscrito en Salto de longitud
(2, 2), -- María López inscrita en Lanzamiento de jabalina
(3, 3), -- Carlos Gómez inscrito en Carrera de 100 metros
(4, 4); -- Lucía Fernández inscrita en Salto de altura

