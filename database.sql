drop database if exists lista;
create database lista;
use lista;

create table tarefas(
    id int primary key auto_increment,
    task varchar(100) not null,
    done_date timestamp default null,
    insert_date timestamp not null,
    delete_date timestamp default
);


