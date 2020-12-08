<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201208081343 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE logo ADD created_by_id INT DEFAULT NULL, ADD modified_by_id INT DEFAULT NULL, ADD creation_date DATE DEFAULT NULL, ADD modification_date DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE logo ADD CONSTRAINT FK_E48E9A13B03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE logo ADD CONSTRAINT FK_E48E9A1399049ECE FOREIGN KEY (modified_by_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_E48E9A13B03A8386 ON logo (created_by_id)');
        $this->addSql('CREATE INDEX IDX_E48E9A1399049ECE ON logo (modified_by_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE logo DROP FOREIGN KEY FK_E48E9A13B03A8386');
        $this->addSql('ALTER TABLE logo DROP FOREIGN KEY FK_E48E9A1399049ECE');
        $this->addSql('DROP INDEX IDX_E48E9A13B03A8386 ON logo');
        $this->addSql('DROP INDEX IDX_E48E9A1399049ECE ON logo');
        $this->addSql('ALTER TABLE logo DROP created_by_id, DROP modified_by_id, DROP creation_date, DROP modification_date');
    }
}
