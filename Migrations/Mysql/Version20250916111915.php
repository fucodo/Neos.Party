<?php

declare(strict_types=1);

namespace Neos\Flow\Persistence\Doctrine\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250916111915 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MariaDb1027Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MariaDb1027Platform'."
        );

        $this->addSql('CREATE INDEX idx_fucodo_neos_party_title ON neos_party_domain_model_personname (title)');
        $this->addSql('CREATE INDEX idx_fucodo_neos_party_first_name ON neos_party_domain_model_personname (firstName)');
        $this->addSql('CREATE INDEX idx_fucodo_neos_party_middle_name ON neos_party_domain_model_personname (middleName)');
        $this->addSql('CREATE INDEX idx_fucodo_neos_party_last_name ON neos_party_domain_model_personname (lastName)');
        $this->addSql('CREATE INDEX idx_fucodo_neos_party_other_name ON neos_party_domain_model_personname (otherName)');
        $this->addSql('CREATE INDEX idx_fucodo_neos_party_alias ON neos_party_domain_model_personname (alias)');
        $this->addSql('CREATE INDEX idx_fucodo_neos_party_full_name ON neos_party_domain_model_personname (fullName)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MariaDb1027Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MariaDb1027Platform'."
        );


        $this->addSql('DROP INDEX idx_fucodo_neos_party_title ON neos_party_domain_model_personname');
        $this->addSql('DROP INDEX idx_fucodo_neos_party_first_name ON neos_party_domain_model_personname');
        $this->addSql('DROP INDEX idx_fucodo_neos_party_middle_name ON neos_party_domain_model_personname');
        $this->addSql('DROP INDEX idx_fucodo_neos_party_last_name ON neos_party_domain_model_personname');
        $this->addSql('DROP INDEX idx_fucodo_neos_party_other_name ON neos_party_domain_model_personname');
        $this->addSql('DROP INDEX idx_fucodo_neos_party_alias ON neos_party_domain_model_personname');
        $this->addSql('DROP INDEX idx_fucodo_neos_party_full_name ON neos_party_domain_model_personname');
    }
}
