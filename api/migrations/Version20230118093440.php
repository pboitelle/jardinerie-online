<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230118093440 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog ADD user_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE blog ADD CONSTRAINT FK_C01551439D86650F FOREIGN KEY (user_id_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_C01551439D86650F ON blog (user_id_id)');
        $this->addSql('ALTER TABLE item ADD market_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE item ADD sterile BOOLEAN NOT NULL');
        $this->addSql('ALTER TABLE item ADD CONSTRAINT FK_1F1B251E622F3F37 FOREIGN KEY (market_id) REFERENCES market (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_1F1B251E622F3F37 ON item (market_id)');
        $this->addSql('ALTER TABLE niveau ADD item_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE niveau ADD CONSTRAINT FK_4BDFF36B126F525E FOREIGN KEY (item_id) REFERENCES item (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_4BDFF36B126F525E ON niveau (item_id)');
        $this->addSql('ALTER TABLE plante ADD item_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE plante ADD blog_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE plante ADD CONSTRAINT FK_517A6947126F525E FOREIGN KEY (item_id) REFERENCES item (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE plante ADD CONSTRAINT FK_517A6947DAE07E97 FOREIGN KEY (blog_id) REFERENCES blog (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_517A6947126F525E ON plante (item_id)');
        $this->addSql('CREATE INDEX IDX_517A6947DAE07E97 ON plante (blog_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE item DROP CONSTRAINT FK_1F1B251E622F3F37');
        $this->addSql('DROP INDEX IDX_1F1B251E622F3F37');
        $this->addSql('ALTER TABLE item DROP market_id');
        $this->addSql('ALTER TABLE item DROP sterile');
        $this->addSql('ALTER TABLE niveau DROP CONSTRAINT FK_4BDFF36B126F525E');
        $this->addSql('DROP INDEX IDX_4BDFF36B126F525E');
        $this->addSql('ALTER TABLE niveau DROP item_id');
        $this->addSql('ALTER TABLE blog DROP CONSTRAINT FK_C01551439D86650F');
        $this->addSql('DROP INDEX IDX_C01551439D86650F');
        $this->addSql('ALTER TABLE blog DROP user_id_id');
        $this->addSql('ALTER TABLE plante DROP CONSTRAINT FK_517A6947126F525E');
        $this->addSql('ALTER TABLE plante DROP CONSTRAINT FK_517A6947DAE07E97');
        $this->addSql('DROP INDEX IDX_517A6947126F525E');
        $this->addSql('DROP INDEX IDX_517A6947DAE07E97');
        $this->addSql('ALTER TABLE plante DROP item_id');
        $this->addSql('ALTER TABLE plante DROP blog_id');
    }
}
