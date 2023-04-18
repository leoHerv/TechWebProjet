<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230330075058 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE i23_LineProducts (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_bag_id INTEGER NOT NULL, id_products_id INTEGER NOT NULL, price DOUBLE PRECISION NOT NULL, quantity INTEGER NOT NULL, CONSTRAINT FK_7D291EE6496A377A FOREIGN KEY (id_bag_id) REFERENCES i23_bags (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_7D291EE674984C5E FOREIGN KEY (id_products_id) REFERENCES i23_produits (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_7D291EE6496A377A ON i23_LineProducts (id_bag_id)');
        $this->addSql('CREATE INDEX IDX_7D291EE674984C5E ON i23_LineProducts (id_products_id)');
        $this->addSql('CREATE TABLE i23_bags (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, quantity INTEGER NOT NULL, price INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE i23_produits (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(70) NOT NULL, prix DOUBLE PRECISION NOT NULL, categorie VARCHAR(60) DEFAULT NULL, quantity INTEGER NOT NULL, img VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE TABLE i23_users (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_bag INTEGER DEFAULT NULL, login VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL, name VARCHAR(200) NOT NULL, first_name VARCHAR(200) NOT NULL, mail VARCHAR(255) NOT NULL, birth_date DATE NOT NULL, CONSTRAINT FK_67D320488586801B FOREIGN KEY (id_bag) REFERENCES i23_bags (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_67D32048AA08CB10 ON i23_users (login)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_67D320488586801B ON i23_users (id_bag)');
        $this->addSql('DROP TABLE i23_paniers');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE i23_paniers (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_produit VARCHAR(255) NOT NULL COLLATE "BINARY", quantity INTEGER NOT NULL)');
        $this->addSql('DROP TABLE i23_LineProducts');
        $this->addSql('DROP TABLE i23_bags');
        $this->addSql('DROP TABLE i23_produits');
        $this->addSql('DROP TABLE i23_users');
    }
}
