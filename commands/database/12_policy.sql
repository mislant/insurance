CREATE TABLE IF NOT EXISTS policy
(
    id                serial primary key,
    operator          integer  not null,
    CONSTRAINT fk_operator
        FOREIGN KEY (operator)
            REFERENCES insurance.user (id)
            ON UPDATE CASCADE ON DELETE CASCADE,
    insurance_company smallint not null,
    begin_date        date          default current_date,
    end_date          date     not null,
    status            policy_status default 'OPENED',
    cost              float    not null,
    payment           integer  not null,
    CONSTRAINT fk_payment
        FOREIGN KEY (payment)
            REFERENCES insurance.payment (id)
            ON UPDATE CASCADE ON DELETE CASCADE
);