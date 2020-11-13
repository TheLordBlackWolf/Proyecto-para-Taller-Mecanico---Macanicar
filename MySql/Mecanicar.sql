CREATE DATABASE Mecanicar;
USE Mecanicar;

CREATE TABLE IF NOT EXISTS Usuario(
	Id_Us INT(255) AUTO_INCREMENT,
    Nombre CHAR(255),
    Apellido CHAR(255),
    Rut VARCHAR(14) NOT NULL,
    Correo VARCHAR(255) NOT NULL,
    Clave VARCHAR(30) NOT NULL,
    Direccion VARCHAR(300),
    Celular INT(11),
    Propietario VARCHAR(255),
    CREATED_AT DATETIME,
    UPDATE_AT DATETIME,
    PRIMARY KEY(Id_Us)
)ENGINE=INNODB;


CREATE TABLE IF NOT EXISTS JefeTaller(
	Id_Jt INT(255) AUTO_INCREMENT,
    Nombre CHAR(255),
    Apellido CHAR(255),
    Rut VARCHAR(14) NOT NULL,
    Correo VARCHAR(255) NOT NULL,
    Clave VARCHAR(30) NOT NULL,
    ClaveUnica VARCHAR(8) NOT NULL,
    Direccion VARCHAR(300),
    Celular INT(11),
    Cargo VARCHAR(255),
    CREATED_AT DATETIME,
    UPDATE_AT DATETIME,
    PRIMARY KEY(Id_Jt)
)ENGINE=INNODB;

-- -- CREADA POR EL CLIENTE O USUARIO -- --
CREATE TABLE IF NOT EXISTS FichaTec(
	Id_Ft INT(255) AUTO_INCREMENT,
    FechaIngreso DATETIME,
    Patente VARCHAR(7),
    Marca VARCHAR(100),
    Modelo VARCHAR(200),
    Ano INT(4),
    TipoCombustible VARCHAR(100),
    NumMotor INT(100),
    CompaniaSeguro VARCHAR(255),
    Color VARCHAR(255),
    Kilometraje INT(100),
    NivelCombustible VARCHAR(100),
    CREATED_AT DATETIME,
    UPDATE_AT DATETIME,
    IdUser INT(255),
    FOREIGN KEY(IdUser) REFERENCES Usuario(Id_Us),
    PRIMARY KEY(Id_Ft)
)ENGINE=INNODB;

-- -- CREADA POR EL JEFE DE TALLER O SUPERVISOR DE TURNO -- --
CREATE TABLE IF NOT EXISTS OrdenTrabajo(
	Id_Ot INT(255) AUTO_INCREMENT,
    NumOrden INT(100),
    Nombre_Sucursal VARCHAR(255),
    Estado VARCHAR(200),
    Detalles VARCHAR(600),
    Detalles_repuestos VARCHAR(255),
    IdUser INT(255),
    IdJefe INT(255),
    CONSTRAINT FOREIGN KEY(IdUser) REFERENCES Usuario(Id_Us),
    CONSTRAINT FOREIGN KEY(IdJefe) REFERENCES JefeTaller(Id_Jt),
    PRIMARY KEY(Id_Ot)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS Proveedor(
	Id_P INT(255) AUTO_INCREMENT,
    nombre_Proveedor CHAR(255),
    nombre_Empresa VARCHAR(12),
    rut_Empresa VARCHAR(255),
    Telefono INT(15),
    Correo VARCHAR(255),
    Direccion VARCHAR(255),
    PRIMARY KEY(Id_P)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS Factura(
	Id_F INT AUTO_INCREMENT,
    NumFactura INT(255),
    FechaFacturacion DATETIME,
    ValorNeto INT(8),
    Iva 	  INT(8),
    ValorTotal INT(8),
    Descripcion VARCHAR(600),
    IdUser INT(255),
    IdOrdenTrabajo INT(255),
    CONSTRAINT FOREIGN KEY(IdUser) REFERENCES Usuario(Id_Us),
    CONSTRAINT FOREIGN KEY(IdOrdenTrabajo) REFERENCES OrdenTrabajo(Id_Ot),
    PRIMARY KEY(Id_F)
)ENGINE=INNODB;

