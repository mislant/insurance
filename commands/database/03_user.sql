CREATE TABLE IF NOT EXISTS insurance.user
(
    id         serial primary key,
    username   varchar(50) not null UNIQUE,
    password   char(60)    not null,
    email      varchar(60) not null UNIQUE,
    status     user_status default 'active',
    checkpoint integer,
    CONSTRAINT fk_checkpoint
        FOREIGN KEY (checkpoint)
            REFERENCES insurance.checkpoint (id)
            ON UPDATE CASCADE ON DELETE CASCADE,
    created_at timestamp   default now(),
    updated_at timestamp   default now()
);