<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201208084242 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE logo ADD deleted_by_id INT DEFAULT NULL, ADD delete_date DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE logo ADD CONSTRAINT FK_E48E9A13C76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_E48E9A13C76F1F52 ON logo (deleted_by_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE logo DROP FOREIGN KEY FK_E48E9A13C76F1F52');
        $this->addSql('DROP INDEX IDX_E48E9A13C76F1F52 ON logo');
        $this->addSql('ALTER TABLE logo DROP deleted_by_id, DROP delete_date');
    }
}
