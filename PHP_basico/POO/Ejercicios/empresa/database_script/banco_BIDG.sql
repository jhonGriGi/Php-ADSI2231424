create table usuarios (
  numero_cuenta int primary key,
  nombre_titular varchar(40),
  tipo_cuenta varchar(40),
  saldo int
);

create table factura (
  numero_factura varchar(100) primary key,
  nombre_factura varchar(70),
  coste_factura varchar(100),
  numero_cuenta int,
  foreign key (numero_cuenta) references usuarios(numero_cuenta)
);
