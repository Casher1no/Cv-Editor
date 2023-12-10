create table cv_experience
(
    id         int auto_increment
        primary key,
    cv_id      int          not null,
    name       varchar(255) null,
    profession varchar(255) null,
    workload   varchar(255) null,
    experience varchar(255) null,
    constraint cv_experience_cv_id_fk
        foreign key (cv_id) references cv (id)
            on update cascade on delete cascade
);