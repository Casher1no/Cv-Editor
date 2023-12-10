create table cv_address
(
    id            int auto_increment
        primary key,
    cv_id         int          not null,
    country       varchar(255) null,
    address_index varchar(255) null,
    city          varchar(255) null,
    street        varchar(255) null,
    number        varchar(255) null,
    constraint cv_address_cv_id_fk
        foreign key (cv_id) references cv (id)
            on update cascade on delete cascade
);