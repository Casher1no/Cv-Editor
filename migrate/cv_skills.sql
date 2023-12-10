create table cv_skills
(
    id          int auto_increment
        primary key,
    cv_id       int          not null,
    name        varchar(255) null,
    description longtext     null,
    constraint cv_skills_cv_id_fk
        foreign key (cv_id) references cv (id)
            on update cascade on delete cascade
);