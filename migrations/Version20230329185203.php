<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230329185203 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__i23_users AS SELECT id, id_bag, login, roles, password, name, first_name, mail FROM i23_users');
        $this->addSql('DROP TABLE i23_users');
        $this->addSql('CREATE TABLE i23_users (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_bag INTEGER DEFAULT NULL, login VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL, name VARCHAR(200) NOT NULL, first_name VARCHAR(200) NOT NULL, mail VARCHAR(255) NOT NULL, CONSTRAINT FK_67D320488586801B FOREIGN KEY (id_bag) REFERENCES i23_bag (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO i23_users (id, id_bag, login, roles, password, name, first_name, mail) SELECT id, id_bag, login, roles, password, name, first_name, mail FROM __temp__i23_users');
        $this->addSql('DROP TABLE __temp__i23_users');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_67D320488586801B ON i23_users (id_bag)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_67D32048AA08CB10 ON i23_users (login)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE i23_users ADD COLUMN birth_date DATE NOT NULL');
    }
}
