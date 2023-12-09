create table cv_address
(
    id         int auto_increment
        primary key,
    cv_main_id int          not null,
    country    varchar(255) null,
    `index`    varchar(255) null,
    city       varchar(255) null,
    street     varchar(255) null,
    number     varchar(255) null,
    constraint cv_address_cv_main_id_fk
        foreign key (cv_main_id) references cv_main (id)
            on delete cascade
);