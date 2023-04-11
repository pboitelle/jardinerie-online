<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230411085146 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE "user" DROP CONSTRAINT fk_8d93d6499eea759');
        $this->addSql('ALTER TABLE "user" DROP CONSTRAINT fk_8d93d649622f3f37');
        $this->addSql('DROP SEQUENCE blog_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE inventory_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE item_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE market_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE niveau_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE plante_id_seq CASCADE');
        $this->addSql('ALTER TABLE blog DROP CONSTRAINT fk_c01551439d86650f');
        $this->addSql('ALTER TABLE item DROP CONSTRAINT fk_1f1b251e9eea759');
        $this->addSql('ALTER TABLE item DROP CONSTRAINT fk_1f1b251e622f3f37');
        $this->addSql('ALTER TABLE niveau DROP CONSTRAINT fk_4bdff36b126f525e');
        $this->addSql('ALTER TABLE plante DROP CONSTRAINT fk_517a6947126f525e');
        $this->addSql('ALTER TABLE plante DROP CONSTRAINT fk_517a6947dae07e97');
        $this->addSql('DROP TABLE blog');
        $this->addSql('DROP TABLE inventory');
        $this->addSql('DROP TABLE item');
        $this->addSql('DROP TABLE market');
        $this->addSql('DROP TABLE niveau');
        $this->addSql('DROP TABLE plante');
        $this->addSql('DROP INDEX idx_8d93d649622f3f37');
        $this->addSql('DROP INDEX uniq_8d93d6499eea759');
        $this->addSql('ALTER TABLE "user" DROP inventory_id');
        $this->addSql('ALTER TABLE "user" DROP market_id');
        $this->addSql('ALTER TABLE "user" DROP roles');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE blog_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE inventory_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE item_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE market_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE niveau_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE plante_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE blog (id INT NOT NULL, user_id_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, update_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_c01551439d86650f ON blog (user_id_id)');
        $this->addSql('COMMENT ON COLUMN blog.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN blog.update_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE inventory (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE item (id INT NOT NULL, inventory_id INT DEFAULT NULL, market_id INT DEFAULT NULL, sterile BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_1f1b251e622f3f37 ON item (market_id)');
        $this->addSql('CREATE INDEX idx_1f1b251e9eea759 ON item (inventory_id)');
        $this->addSql('CREATE TABLE market (id INT NOT NULL, price INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE niveau (id INT NOT NULL, item_id INT DEFAULT NULL, niveau_name VARCHAR(255) NOT NULL, color VARCHAR(255) NOT NULL, taux_drop INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_4bdff36b126f525e ON niveau (item_id)');
        $this->addSql('CREATE TABLE plante (id INT NOT NULL, item_id INT DEFAULT NULL, blog_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, time_to_grow DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_517a6947dae07e97 ON plante (blog_id)');
        $this->addSql('CREATE INDEX idx_517a6947126f525e ON plante (item_id)');
        $this->addSql('ALTER TABLE blog ADD CONSTRAINT fk_c01551439d86650f FOREIGN KEY (user_id_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE item ADD CONSTRAINT fk_1f1b251e9eea759 FOREIGN KEY (inventory_id) REFERENCES inventory (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE item ADD CONSTRAINT fk_1f1b251e622f3f37 FOREIGN KEY (market_id) REFERENCES market (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE niveau ADD CONSTRAINT fk_4bdff36b126f525e FOREIGN KEY (item_id) REFERENCES item (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE plante ADD CONSTRAINT fk_517a6947126f525e FOREIGN KEY (item_id) REFERENCES item (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE plante ADD CONSTRAINT fk_517a6947dae07e97 FOREIGN KEY (blog_id) REFERENCES blog (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE "user" ADD inventory_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE "user" ADD market_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE "user" ADD roles JSON NOT NULL');
        $this->addSql('ALTER TABLE "user" ADD CONSTRAINT fk_8d93d6499eea759 FOREIGN KEY (inventory_id) REFERENCES inventory (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE "user" ADD CONSTRAINT fk_8d93d649622f3f37 FOREIGN KEY (market_id) REFERENCES market (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_8d93d649622f3f37 ON "user" (market_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_8d93d6499eea759 ON "user" (inventory_id)');
    }
}
