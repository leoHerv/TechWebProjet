<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230322175302 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, login VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL, name VARCHAR(200) NOT NULL, first_name VARCHAR(200) NOT NULL, mail VARCHAR(255) NOT NULL, birth_date DATE NOT NULL, status BOOLEAN NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649AA08CB10 ON user (login)');
        $this->addSql('DROP TABLE i23_paniers');
        $this->addSql('DROP TABLE i23_users');
        $this->addSql('CREATE TEMPORARY TABLE __temp__i23_produits AS SELECT id_produit, nom, prix, categorie, quantité, img FROM i23_produits');
        $this->addSql('DROP TABLE i23_produits');
        $this->addSql('CREATE TABLE i23_produits (id_produit INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(70) NOT NULL, prix DOUBLE PRECISION NOT NULL, categorie VARCHAR(60) NOT NULL, quantity INTEGER NOT NULL, img VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO i23_produits (id_produit, nom, prix, categorie, quantity, img) SELECT id_produit, nom, prix, categorie, quantité, img FROM __temp__i23_produits');
        $this->addSql('DROP TABLE __temp__i23_produits');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE i23_paniers (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_produit VARCHAR(255) NOT NULL COLLATE "BINARY", id_client VARCHAR(255) NOT NULL COLLATE "BINARY", quantité INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE i23_users (id_user INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) NOT NULL COLLATE "BINARY", prenom VARCHAR(255) NOT NULL COLLATE "BINARY", date_naissance DATE DEFAULT NULL, login VARCHAR(255) NOT NULL COLLATE "BINARY", password VARCHAR(255) NOT NULL COLLATE "BINARY", admin BOOLEAN NOT NULL, super_admin BOOLEAN NOT NULL)');
        $this->addSql('DROP TABLE user');
        $this->addSql('CREATE TEMPORARY TABLE __temp__i23_produits AS SELECT id_produit, nom, prix, categorie, quantity, img FROM i23_produits');
        $this->addSql('DROP TABLE i23_produits');
        $this->addSql('CREATE TABLE i23_produits (id_produit INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(70) NOT NULL, prix DOUBLE PRECISION NOT NULL, categorie VARCHAR(60) NOT NULL, quantité INTEGER NOT NULL, img VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO i23_produits (id_produit, nom, prix, categorie, quantité, img) SELECT id_produit, nom, prix, categorie, quantity, img FROM __temp__i23_produits');
        $this->addSql('DROP TABLE __temp__i23_produits');
    }
}
