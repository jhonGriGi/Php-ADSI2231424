create table usuarios (
id_cuenta int primary key,
nombre_titular varchar(40),
tipo_cuenta varchar(40)
);

create table factura (
id_factura int primary key,
nombre_factura varchar(40),
coste_factura int,
id_cuenta int,
foreign key (id_cuenta)
references usuarios(id_cuenta)
);

create table tarjeta_credito (
id_tarjeta varchar(10) primary key,
saldo int,
id_cuenta int,
foreign key (id_cuenta)
references usuarios(id_cuenta)
);

create table compras(
id_compra int primary key auto_increment,
id_cuenta int,
foreign key (id_cuenta)
references usuarios(id_cuenta)
);

create table productos (
id_producto int primary key auto_increment,
nombre_producto varchar(40),
cantidad_restante int
);

create table compras_productos (
id_compra_producto int primary key auto_increment,
fecha_compra date,
cantidad_compra int,
id_compra int,
id_producto int,
foreign key (id_compra)
references compras(id_compra),
foreign key (id_producto)
references productos(id_producto)
);