<?php

use yii\db\Migration;

/**
 * Class m211218_164751_Usuario
 */
class m211218_164751_Usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuario', [
            'id' => $this->primaryKey(),
            'login' => $this->string(100),
            'senha' => $this->string(50),
            'nome' => $this->string(100)->notNull(),
            'nucleo_id' => $this->integer()
        ]);
        $this->addForeignKey('usuarionucleo_fk', 'usuario', 'nucleo_id', 'nucleo', 'id', 'restrict');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropForeignKey('usuarionucleo_fk', 'usuario');
       $this->dropTable('usuario');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211218_164751_Usuario cannot be reverted.\n";

        return false;
    }
    */
}
