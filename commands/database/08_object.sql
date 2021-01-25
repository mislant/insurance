CREATE TABLE IF NOT EXISTS insurance.object
(
    id                  serial primary key,
    model               varchar not null,
    mark                varchar not null,
    chassis             varchar not null,
    engine              varchar,
    passport_number     varchar not null,
    passport_issue_date date not null CHECK ( passport_issue_date > current_date )
);