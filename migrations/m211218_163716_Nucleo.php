<?php

use yii\db\Migration;

/**
 * Class m211218_163716_Nucleo
 */
class m211218_163716_Nucleo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('nucleo', [
            'id'=> $this->primaryKey(),
            'nome' => $this->string(100)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dopTable('nucleo');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211218_163716_Nucleo cannot be reverted.\n";

        return false;
    }
    */
}
