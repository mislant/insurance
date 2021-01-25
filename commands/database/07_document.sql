CREATE TABLE IF NOT EXISTS insurance.document
(
    id         serial primary key,
    subject    integer       not null,
    CONSTRAINT fk_subject
        FOREIGN KEY (subject)
            REFERENCES insurance.subject (id)
            ON UPDATE CASCADE ON DELETE CASCADE,
    type       document_type not null,
    issue_date date          not null CHECK ( issue_date > current_date ),
    end_date   date,
    issue_org  varchar(120)  not null,
    scan       varchar       not null
);