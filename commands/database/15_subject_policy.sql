CREATE TABLE IF NOT EXISTS insurance.subject_policy
(
    policy   integer      not null,
    CONSTRAINT fk_insurance
        FOREIGN KEY (policy)
            REFERENCES insurance.policy (id)
            ON UPDATE CASCADE ON DELETE CASCADE,
    relation subject_type not null,
    subject  integer      not null,
    CONSTRAINT fk_subject
        FOREIGN KEY (subject)
            REFERENCES insurance.subject (id)
            ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (policy, subject)
);