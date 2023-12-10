create table cv_main
(
    id           int auto_increment
        primary key,
    cv_id        int          not null,
    name         varchar(255) null,
    surname      varchar(255) null,
    phone_number varchar(30)  null,
    email        varchar(255) null,
    constraint cv_main_cv_id_fk
        foreign key (cv_id) references cv (id)
            on update cascade on delete cascade
);