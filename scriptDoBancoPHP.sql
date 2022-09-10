create database login;

use login;

create table usuario(
cd_usuario int(5) auto_increment,
nm_usuario varchar (100),
nm_login varchar (15),
nm_senha varchar (15),
constraint primary key(cd_usuario))

select * from usuario;