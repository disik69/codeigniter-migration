<?php

defined('BASEPATH') || exit('No direct script access allowed');

class AddBasicDB extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(
            array(
                'id' => array(
                    'type' => 'INT',
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE,
                ),
                'email' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                ),
                'password' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                )
            )
        );
        
        $this->dbforge->add_key('id', true);
        
        $this->dbforge->create_table('users', true);
    }
    
    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}



