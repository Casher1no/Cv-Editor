create table cv_educations
(
    id                    int auto_increment
        primary key,
    cv_main_id            int          not null,
    name                  varchar(255) null,
    faculty               varchar(255) null,
    study_program         varchar(255) null,
    education_level       varchar(255) null,
    time_spend_in_studies varchar(255) null,
    status                varchar(255) null,
    constraint cv_educations_cv_main_id_fk
        foreign key (cv_main_id) references cv_main (id)
            on delete cascade
);