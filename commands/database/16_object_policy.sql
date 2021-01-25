CREATE TABLE IF NOT EXISTS insurance.object_policy
(
    policy integer not null,
    CONSTRAINT fk_insurance
        FOREIGN KEY (policy)
            REFERENCES insurance.policy (id)
            ON UPDATE CASCADE ON DELETE CASCADE,
    object integer not null,
    CONSTRAINT fk_subject
        FOREIGN KEY (object)
            REFERENCES insurance.object (id)
            ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (policy, object)
);