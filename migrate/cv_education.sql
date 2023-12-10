create table cv_education
(
    id                    int auto_increment
        primary key,
    cv_id                 int          not null,
    name                  varchar(255) null,
    faculty               varchar(255) null,
    study_program         varchar(255) null,
    education_level       varchar(255) null,
    time_spend_in_studies varchar(255) null,
    status                varchar(255) null,
    constraint cv_education_cv_id_fk
        foreign key (cv_id) references cv (id)
            on update cascade on delete cascade
);