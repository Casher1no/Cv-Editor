create table cv_custom_field
(
    id          int auto_increment
        primary key,
    cv_main_id  int          not null,
    name        varchar(255) null,
    description longtext     null,
    constraint cv_custom_field_cv_main_id_fk
        foreign key (cv_main_id) references cv_main (id)
            on delete cascade
);