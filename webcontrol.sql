create table flowers
(
    id          int          not null
        primary key,
    description varchar(120) not null,
    photo       varchar(20)  not null,
    price       int          not null
)
    charset = utf8mb3;

create table count
(
    id              int          not null
        primary key,
    quantity        int          null,
    characteristics varchar(200) null,
    constraint count_flowers_id_fk
        foreign key (id) references flowers (id)
);

create table users
(
    id       int auto_increment
        primary key,
    username varchar(50)  not null,
    password varchar(255) not null
);

