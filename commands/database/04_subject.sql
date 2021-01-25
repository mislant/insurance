CREATE TABLE IF NOT EXISTS insurance.subject
(
    id             serial primary key,
    name           varchar(60) not null,
    surname        varchar(60) not null,
    identification char(12)    not null,
    experience     smallint default 0
);