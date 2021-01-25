CREATE TABLE IF NOT EXISTS insurance.payment
(
    id         serial primary key,
    cost       float   not null,
    status     payment_status default 'OPENED',
    policy     integer not null,
    created_at timestamp      default now(),
    updated_at timestamp      default now()
);