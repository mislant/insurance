CREATE TABLE IF NOT EXISTS insurance.checkpoint
(
    id          serial primary key,
    name        varchar(45) not null,
    description varchar(150)
);