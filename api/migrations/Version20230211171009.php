<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230211171009 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE "user" ADD email VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE "user" ADD password VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE "user" DROP lastname');
        $this->addSql('ALTER TABLE "user" DROP firstname');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE "user" ADD lastname VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE "user" ADD firstname VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE "user" DROP email');
        $this->addSql('ALTER TABLE "user" DROP password');
    }
}