<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230106190015 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE artist (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, archived TINYINT(1) NOT NULL, suspended TINYINT(1) NOT NULL, cover VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE file (id INT AUTO_INCREMENT NOT NULL, path VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, mime_type VARCHAR(255) NOT NULL, size NUMERIC(10, 0) NOT NULL, public_path VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE genre (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE label (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, suspended TINYINT(1) NOT NULL, archived TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE review (id INT AUTO_INCREMENT NOT NULL, tape_id INT DEFAULT NULL, author_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, score INT NOT NULL, INDEX IDX_794381C62AC90C65 (tape_id), INDEX IDX_794381C6F675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tape (id INT AUTO_INCREMENT NOT NULL, author_id INT DEFAULT NULL, label_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, release_year INT NOT NULL, suspended TINYINT(1) NOT NULL, archived TINYINT(1) NOT NULL, cover VARCHAR(255) DEFAULT NULL, description TEXT DEFAULT NULL, format VARCHAR(255) DEFAULT NULL, release_date DATE DEFAULT NULL, audio_file VARCHAR(255) DEFAULT NULL, INDEX IDX_9EEBA5E1F675F31B (author_id), INDEX IDX_9EEBA5E133B92F39 (label_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tape_artist (tape_id INT NOT NULL, artist_id INT NOT NULL, INDEX IDX_16F73CA32AC90C65 (tape_id), INDEX IDX_16F73CA3B7970CF8 (artist_id), PRIMARY KEY(tape_id, artist_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tape_genre (tape_id INT NOT NULL, genre_id INT NOT NULL, INDEX IDX_9A4454662AC90C65 (tape_id), INDEX IDX_9A4454664296D31F (genre_id), PRIMARY KEY(tape_id, genre_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tape_tag (tape_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_55AF83CB2AC90C65 (tape_id), INDEX IDX_55AF83CBBAD26311 (tag_id), PRIMARY KEY(tape_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tape_tape (tape_source INT NOT NULL, tape_target INT NOT NULL, INDEX IDX_E6BA4A774824D557 (tape_source), INDEX IDX_E6BA4A7751C185D8 (tape_target), PRIMARY KEY(tape_source, tape_target)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, first_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, archived TINYINT(1) NOT NULL, suspended TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C62AC90C65 FOREIGN KEY (tape_id) REFERENCES tape (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6F675F31B FOREIGN KEY (author_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE tape ADD CONSTRAINT FK_9EEBA5E1F675F31B FOREIGN KEY (author_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE tape ADD CONSTRAINT FK_9EEBA5E133B92F39 FOREIGN KEY (label_id) REFERENCES label (id)');
        $this->addSql('ALTER TABLE tape_artist ADD CONSTRAINT FK_16F73CA32AC90C65 FOREIGN KEY (tape_id) REFERENCES tape (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tape_artist ADD CONSTRAINT FK_16F73CA3B7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tape_genre ADD CONSTRAINT FK_9A4454662AC90C65 FOREIGN KEY (tape_id) REFERENCES tape (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tape_genre ADD CONSTRAINT FK_9A4454664296D31F FOREIGN KEY (genre_id) REFERENCES genre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tape_tag ADD CONSTRAINT FK_55AF83CB2AC90C65 FOREIGN KEY (tape_id) REFERENCES tape (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tape_tag ADD CONSTRAINT FK_55AF83CBBAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tape_tape ADD CONSTRAINT FK_E6BA4A774824D557 FOREIGN KEY (tape_source) REFERENCES tape (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tape_tape ADD CONSTRAINT FK_E6BA4A7751C185D8 FOREIGN KEY (tape_target) REFERENCES tape (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C62AC90C65');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6F675F31B');
        $this->addSql('ALTER TABLE tape DROP FOREIGN KEY FK_9EEBA5E1F675F31B');
        $this->addSql('ALTER TABLE tape DROP FOREIGN KEY FK_9EEBA5E133B92F39');
        $this->addSql('ALTER TABLE tape_artist DROP FOREIGN KEY FK_16F73CA32AC90C65');
        $this->addSql('ALTER TABLE tape_artist DROP FOREIGN KEY FK_16F73CA3B7970CF8');
        $this->addSql('ALTER TABLE tape_genre DROP FOREIGN KEY FK_9A4454662AC90C65');
        $this->addSql('ALTER TABLE tape_genre DROP FOREIGN KEY FK_9A4454664296D31F');
        $this->addSql('ALTER TABLE tape_tag DROP FOREIGN KEY FK_55AF83CB2AC90C65');
        $this->addSql('ALTER TABLE tape_tag DROP FOREIGN KEY FK_55AF83CBBAD26311');
        $this->addSql('ALTER TABLE tape_tape DROP FOREIGN KEY FK_E6BA4A774824D557');
        $this->addSql('ALTER TABLE tape_tape DROP FOREIGN KEY FK_E6BA4A7751C185D8');
        $this->addSql('DROP TABLE artist');
        $this->addSql('DROP TABLE file');
        $this->addSql('DROP TABLE genre');
        $this->addSql('DROP TABLE label');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE review');
        $this->addSql('DROP TABLE tag');
        $this->addSql('DROP TABLE tape');
        $this->addSql('DROP TABLE tape_artist');
        $this->addSql('DROP TABLE tape_genre');
        $this->addSql('DROP TABLE tape_tag');
        $this->addSql('DROP TABLE tape_tape');
        $this->addSql('DROP TABLE `user`');
    }
}
