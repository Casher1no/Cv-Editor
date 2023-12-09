create table cv_main
(
    id           int auto_increment
        primary key,
    name         varchar(255) null,
    surname      varchar(255) null,
    phone_number varchar(30)  null,
    email        varchar(255) null
);