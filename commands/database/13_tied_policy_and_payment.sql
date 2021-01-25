ALTER TABLE insurance.payment
    ADD CONSTRAINT fk_policy
        FOREIGN KEY (policy)
            REFERENCES insurance.policy (id)
            ON UPDATE CASCADE ON DELETE CASCADE;