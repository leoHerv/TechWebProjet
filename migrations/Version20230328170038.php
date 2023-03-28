<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230328170038 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__i23_produits AS SELECT id_produit, nom, prix, categorie, quantity, img FROM i23_produits');
        $this->addSql('DROP TABLE i23_produits');
        $this->addSql('CREATE TABLE i23_produits (id_produit INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(70) NOT NULL, prix DOUBLE PRECISION NOT NULL, categorie VARCHAR(60) DEFAULT NULL, quantity INTEGER NOT NULL, img VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO i23_produits (id_produit, nom, prix, categorie, quantity, img) SELECT id_produit, nom, prix, categorie, quantity, img FROM __temp__i23_produits');
        $this->addSql('DROP TABLE __temp__i23_produits');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__i23_produits AS SELECT id_produit, nom, prix, categorie, quantity, img FROM i23_produits');
        $this->addSql('DROP TABLE i23_produits');
        $this->addSql('CREATE TABLE i23_produits (id_produit INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(70) NOT NULL, prix DOUBLE PRECISION NOT NULL, categorie VARCHAR(60) NOT NULL, quantity INTEGER NOT NULL, img VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO i23_produits (id_produit, nom, prix, categorie, quantity, img) SELECT id_produit, nom, prix, categorie, quantity, img FROM __temp__i23_produits');
        $this->addSql('DROP TABLE __temp__i23_produits');
    }
}
