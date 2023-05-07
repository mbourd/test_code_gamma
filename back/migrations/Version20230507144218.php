<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230507144218 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE musicien (id INT AUTO_INCREMENT NOT NULL, pays_origine_id INT NOT NULL, ville_id INT NOT NULL, genre_id INT DEFAULT NULL, label VARCHAR(255) NOT NULL, date_debut DATETIME NOT NULL, date_separation DATETIME DEFAULT NULL, fondateur VARCHAR(255) NOT NULL, nombre_membre INT DEFAULT NULL, presentation VARCHAR(255) DEFAULT NULL, INDEX IDX_551D8423A6A34A66 (pays_origine_id), INDEX IDX_551D8423A73F0036 (ville_id), INDEX IDX_551D84234296D31F (genre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE musicien ADD CONSTRAINT FK_551D8423A6A34A66 FOREIGN KEY (pays_origine_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE musicien ADD CONSTRAINT FK_551D8423A73F0036 FOREIGN KEY (ville_id) REFERENCES ville (id)');
        $this->addSql('ALTER TABLE musicien ADD CONSTRAINT FK_551D84234296D31F FOREIGN KEY (genre_id) REFERENCES genre (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE musicien DROP FOREIGN KEY FK_551D8423A6A34A66');
        $this->addSql('ALTER TABLE musicien DROP FOREIGN KEY FK_551D8423A73F0036');
        $this->addSql('ALTER TABLE musicien DROP FOREIGN KEY FK_551D84234296D31F');
        $this->addSql('DROP TABLE musicien');
    }
}
