<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240821143209 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fish_stock (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, year INTEGER NOT NULL, sustainable_percent DOUBLE PRECISION DEFAULT NULL, sustainable_count INTEGER DEFAULT NULL, total_count INTEGER DEFAULT NULL)');
        $this->addSql('CREATE TABLE marine_protection (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, year INTEGER NOT NULL, nationwide_percent DOUBLE PRECISION DEFAULT NULL, västerhavet_percent DOUBLE PRECISION DEFAULT NULL, östersjön_percent DOUBLE PRECISION DEFAULT NULL, bottniska_viken_percent DOUBLE PRECISION DEFAULT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE fish_stock');
        $this->addSql('DROP TABLE marine_protection');
    }
}
