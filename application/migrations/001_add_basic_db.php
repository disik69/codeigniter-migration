<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_basic_db extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field('id INT (11) UNSIGNED NOT NULL AUTO_INCREMENT');
        $this->dbforge->add_field('email VARCHAR (255) NOT NULL');
        $this->dbforge->add_field('password VARCHAR (255) NOT NULL');
        $this->dbforge->add_field('PRIMARY KEY (id)');
        $this->dbforge->add_field('UNIQUE KEY (email)');
        $this->dbforge->create_table('users', true);
        
        $this->dbforge->add_field('id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT');
        $this->dbforge->add_field('user_id INT (11) UNSIGNED NOT NULL');
        $this->dbforge->add_field('name VARCHAR (255) NOT NULL');
        $this->dbforge->add_field('PRIMARY KEY (id)');
        $this->dbforge->add_field('FOREIGN KEY (user_id) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->dbforge->create_table('lessons', true);
        
        $this->dbforge->add_field('id INT (11) UNSIGNED NOT NULL AUTO_INCREMENT');
        $this->dbforge->add_field('eng VARCHAR (255) NOT NULL');
        $this->dbforge->add_field('ts VARCHAR (255) NULL DEFAULT NULL');
        $this->dbforge->add_field('rus VARCHAR (255) NOT NULL');
        $this->dbforge->add_field('PRIMARY KEY (id)');
        $this->dbforge->create_table('collocations', true);
        
        $this->dbforge->add_field('id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT');
        $this->dbforge->add_field('lesson_id INT (11) UNSIGNED NOT NULL');
        $this->dbforge->add_field('collocation_id INT (11) UNSIGNED NOT NULL');
        $this->dbforge->add_field('alt_rus VARCHAR (255) NOT NULL');
        $this->dbforge->add_field('PRIMARY KEY (id)');
        $this->dbforge->add_field('FOREIGN KEY (lesson_id) REFERENCES lesson (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->dbforge->add_field('FOREIGN KEY (collocation_id) REFERENCES collocations (id) ON UPDATE CASCADE');
        $this->dbforge->create_table('collocation_lesson', true);
        
        $this->db->insert('users', array('email' => 'disik69@rambler.ru', 'password' => sha1('qwerty')));
    }
    
    public function down()
    {
        $this->dbforge->drop_table('users');
        $this->dbforge->drop_table('lessons');
        $this->dbforge->drop_table('collocations');
        $this->dbforge->drop_table('collocation_lesson');
    }
}



