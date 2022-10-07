<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221007082517 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE product');
        $this->addSql('ALTER TABLE article ADD date_publication DATE NOT NULL, ADD titre VARCHAR(50) NOT NULL, ADD contenu LONGTEXT NOT NULL, DROP picture, DROP title, DROP content, DROP publication_date, DROP last_update_date, DROP is_published');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE article ADD picture VARCHAR(255) DEFAULT NULL, ADD title VARCHAR(255) NOT NULL, ADD content LONGTEXT DEFAULT NULL, ADD publication_date DATETIME DEFAULT NULL, ADD last_update_date DATETIME NOT NULL, ADD is_published TINYINT(1) NOT NULL, DROP date_publication, DROP titre, DROP contenu');
    }
}
