<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230717202227 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande_product (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, commande_id INT NOT NULL, quantity INT NOT NULL, INDEX IDX_25F1760D4584665A (product_id), INDEX IDX_25F1760D82EA2E54 (commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande_product ADD CONSTRAINT FK_25F1760D4584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE commande_product ADD CONSTRAINT FK_25F1760D82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande_product DROP FOREIGN KEY FK_25F1760D4584665A');
        $this->addSql('ALTER TABLE commande_product DROP FOREIGN KEY FK_25F1760D82EA2E54');
        $this->addSql('DROP TABLE commande_product');
    }
}
