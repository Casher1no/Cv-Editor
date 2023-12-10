create table cv
(
    id         int auto_increment
        primary key,
    created_at datetime     default CURRENT_TIMESTAMP not null,
    name       varchar(255) default 'New CV'          not null
)