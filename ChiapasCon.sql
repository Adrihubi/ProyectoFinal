Drop database Chiapascon;
CREATE DATABASE ChiapasCon;
USE ChiapasCon;

-- Tabla Empleado
CREATE TABLE Empleado (
    idEmpleado INT auto_increment primary KEY,
    Nombre VARCHAR(60),
    Apellido VARCHAR(60),
    Tipo VARCHAR(45),
    Fecha_Nacimiento date,
    CURP VARCHAR(18),
    Genero VARCHAR(9),
    Telefono VARCHAR(10),
    Correo VARCHAR(60),
    Password Varchar(100)
);

INSERT INTO Empleado
VALUES (1, 'César Adrián', 'Zavala Pérez', 'Gerente', '2004-10-26', 'ZAPC041026HCSVRSA5', 'Masculino', '9617080407', 'cesar.zavala75@unach.mx', 'empleadouno'),
	   (2, 'Daniela', 'Vera Cruz', 'Empleada', '2004-06-19', 'DBVC240619AKSAKAM4', 'Femenino', '9681258987', 'daniela.vera74@unach.mx', 'empleadodos');

-- Tabla Cliente
CREATE TABLE Cliente (
    idCliente INT auto_increment PRIMARY KEY,
    Nombre VARCHAR(60),
    Apellido VARCHAR(60),
    Telefono VARCHAR(10),
    Correo VARCHAR(60),
    CURP VARCHAR(18),
    Password Varchar(100)
);

INSERT INTO Cliente
VALUES (1, 'César Adrián', 'Zavala Pérez', '961708407', 'cesar.zavala75@unach.mx', 'ZAPC041026HCSVRSA5', 'clienteuno'),
	   (2, 'Eloisa Guillermina', 'Gómez Lóez', '9611847909', 'eloisa.gomez05@unach.mx', 'EGGL2003SSLAJ', 'clientedos');

-- Tabla TipoServicios
CREATE TABLE TipoServicios (
    idTipoServicios INT auto_increment PRIMARY KEY,
    Nombre VARCHAR(60)
);

INSERT INTO TipoServicios(Nombre)
VALUES ('Personal'),
	   ('Pareja'),
       ('Familiar'),
       ('Premium'),
       ('VIP'),
       ('Palenque'),
	   ('Palenque'),
       ('Tonala'),
       ('Tonala'),
       ('Sancris'),
       ('Sancris'),
       ('Selva'),
       ('Selva'),
       ('Lagunas'),
       ('Lagunas'),
       ('Chiapas'),
       ('Chiapas'),
       ('Especial Sancris'),
       ('Especial Tonala'),
       ('Especial Chiapas');

-- Tabla Paquete
CREATE TABLE Paquete (
    idPaquete INT auto_increment PRIMARY KEY,
    Nombre VARCHAR(60),
    Contenido VARCHAR(300),
    Costo DECIMAL(10,2)
);

INSERT INTO Paquete(Nombre, Contenido, Costo)
VALUES ('Paquete Personal','Una habitación. Traslado salida/llegada. Seguro de viajero. Comida. Guía turistico.','3250.00'),
       ('Paquete Pareja','Habitación doble. Traslado salida/llegada. Seguro de viajero. Todos los servicios son compartidos. Comida. Guía turistico.','6370.00'),
       ('Paquete Pareja','Habitación triple. Traslado salida/llegada. Todos los servicios son compartidos. Comida. Guía turistico.','9450.00'),
       ('Paquete Pareja','Habitación para 7 personas. Traslado salida/llegada. Seguro de viajero. Todos los servicios son compartidos. Comida. Dos guías turisticos. Repetir comidas.','17800.00'),
       ('Paquete Pareja','Habitación para 10 personas. Habitaciónes de lujo. Traslado salida/llegada. Viajes con chofer. Seguro de viajero. Todos los servicios son compartidos. Chef personal. Comida. Cuatro guías turisticos.','28950.00');

-- Tabla Chat
CREATE TABLE Chat (
    idChat INT auto_increment PRIMARY KEY,
    idCliente INT,
    idEmpleado INT,
    Id_Mensaje INT,
    Mensaje VARCHAR(45),
    Contenido VARCHAR(45),
    Fecha_Hora DATETIME,
    FOREIGN KEY (idCliente) REFERENCES Cliente(idCliente),
    FOREIGN KEY (idEmpleado) REFERENCES Empleado(idEmpleado)
);

-- Tabla Servicios
CREATE TABLE Servicios (
    idServicios INT auto_increment PRIMARY KEY,
    Nombre VARCHAR(45),
    Descripcion VARCHAR(45),
    idTipoServicios INT,
    Costo DECIMAL,
    FOREIGN KEY (idTipoServicios) REFERENCES TipoServicios(idTipoServicios)
);

INSERT INTO Servicios(Nombre, Descripcion, idTipoServicios, Costo)
VALUES ('Personal', 'Para una persona', 1, '3250.00'),
	   ('Pareja', 'Para dos personas', 2, '6370.00'),
       ('Familiar', 'Para cinco personas', 3, '9450.00'),
       ('Premium', 'Para siete personas', 4, '17800.00'),
       ('VIP', 'Para diez personas', 5, '28950.00'),
       ('Palenque', 'Para una persona', 6, '2500.00'),
	   ('Palenque', 'Para una persona', 7, '4500.00'),
       ('Tonala', 'Para una persona', 8, '2000.00'),
       ('Tonala', 'Para una persona', 9, '3800.00'),
       ('Sancris', 'Para una persona', 10, '3200.00'),
       ('Sancris', 'Para una persona', 11, '4500.00'),
       ('Selva', 'Para una persona', 12, '4200.00'),
       ('Selva', 'Para una persona', 13, '6500.00'),
       ('Lagunas', 'Para una persona', 14, '2800.00'),
       ('Lagunas', 'Para una persona', 15, '5000.00'),
       ('Chiapas', 'Para una persona', 16, '1200.00'),
       ('Chiapas', 'Para una persona', 17, '2800.00'),
       ('Especial Sancris', 'Para varias personas', 18, '60000.00'),
       ('Especial Tonala', 'Para varias personas', 19, '50000.00'),
       ('Especial Chiapas', 'Para varias personas', 20, '40000.00');

-- Tabla DetallePaquete
CREATE TABLE DetallePaquete (
    idDetallePaquete INT auto_increment PRIMARY KEY,
    idServicios INT,
    idTipoServicios INT,
    idPaquete INT,
    Hora_Salida TIME,
    Hora_Llegada TIME,
    Fecha DATE,
    Cupo INT,
    FOREIGN KEY (idServicios) REFERENCES Servicios(idServicios),
    FOREIGN KEY (idTipoServicios) REFERENCES TipoServicios(idTipoServicios),
    FOREIGN KEY (idPaquete) REFERENCES Paquete(idPaquete)
);

-- Tabla Notificaciones
CREATE TABLE Notificaciones (
    idNotificaciones INT auto_increment PRIMARY KEY,
    Aviso VARCHAR(145),
    idCliente INT,
    idDetallePaquete INT,
    IdPaquete INT,
    IdServicios INT,
    IdTipoServicios INT,
    FOREIGN KEY (idCliente) REFERENCES Cliente(idCliente),
	FOREIGN KEY (idDetallePaquete) REFERENCES DetallePaquete(idDetallePaquete),
    FOREIGN KEY (idPaquete) REFERENCES Paquete(idPaquete),
    FOREIGN KEY (idServicios) REFERENCES Servicios(idServicios),
    FOREIGN KEY (idTipoServicios) REFERENCES TipoServicios(idTipoServicios)
);

-- Tabla Reserva
CREATE TABLE Reserva (
    idReserva INT auto_increment PRIMARY KEY,
    idTipoServicios INT,
    Fecha DATETIME,
    Pasajeros INT,
    Estatus VARCHAR(45),
    Precio DECIMAL(10,2),
    idCliente INT,
    idPaquete INT,
    idServicios INT,
    FOREIGN KEY (idCliente) REFERENCES Cliente(idCliente),
    FOREIGN KEY (idPaquete) REFERENCES Paquete(idPaquete),
    FOREIGN KEY (idServicios) REFERENCES Servicios(idServicios),
    FOREIGN KEY (idTipoServicios) REFERENCES TipoServicios(idTipoServicios)
);

INSERT INTO Reserva(idTipoServicios, Fecha, Pasajeros, Estatus, Precio, idCliente, idPaquete, idServicios)
VALUES (2, '2024-11-16 04:30:00', 2, 'Activo', '6370.00', 2, 2, 2);
