CREATE TABLE IF NOT EXISTS insurance.address
(
    id      serial primary key,
    subject integer     not null,
    CONSTRAINT fk_subject
        FOREIGN KEY (subject)
            REFERENCES insurance.subject (id)
            ON UPDATE CASCADE ON DELETE CASCADE,
    country char(3)     not null,
    city    varchar(30) not null,
    street  varchar(60) not null,
    house   varchar(60)
);