create table doctrine_migration_versions
(
    version        VARCHAR(191) not null
        primary key,
    executed_at    DATETIME default NULL,
    execution_time INTEGER  default NULL
);

create table i23_bags
(
    id       INTEGER          not null
        primary key autoincrement,
    quantity INTEGER          not null,
    price    DOUBLE PRECISION not null
);

create table i23_produits
(
    id        INTEGER          not null
        primary key autoincrement,
    nom       VARCHAR(70)      not null,
    prix      DOUBLE PRECISION not null,
    categorie VARCHAR(60)  default NULL,
    quantity  INTEGER          not null,
    img       VARCHAR(255) default NULL
);

create table i23_LineProducts
(
    id         INTEGER          not null
        primary key autoincrement,
    id_bag     INTEGER          not null
        constraint FK_7D291EE68586801B
            references i23_bags,
    id_product INTEGER          not null
        constraint FK_7D291EE6DD7ADDD
            references i23_produits,
    price      DOUBLE PRECISION not null,
    quantity   INTEGER          not null
);

create index IDX_7D291EE68586801B
    on i23_LineProducts (id_bag);

create index IDX_7D291EE6DD7ADDD
    on i23_LineProducts (id_product);

create table i23_users
(
    id         INTEGER      not null
        primary key autoincrement,
    id_bag     INTEGER default NULL
        constraint FK_67D320488586801B
            references i23_bags,
    login      VARCHAR(180) not null,
    roles      CLOB         not null,
    password   VARCHAR(255) not null,
    name       VARCHAR(200) not null,
    first_name VARCHAR(200) not null,
    mail       VARCHAR(255) not null,
    birth_date DATE         not null
);

create unique index UNIQ_67D320488586801B
    on i23_users (id_bag);

create unique index UNIQ_67D32048AA08CB10
    on i23_users (login);


