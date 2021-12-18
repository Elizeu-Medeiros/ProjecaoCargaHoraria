<?php

use yii\db\Migration;

/**
 * Class m211218_165655_Curso
 */
class m211218_165655_Curso extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('curso', [
            'id' => $this->primaryKey(),
            'curso' => $this->string(100)->notNull(),
            'ch_total' => $this->integer(),
            'q_periodos' => $this->smallInteger(),
            'sigla' => $this->string(10)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('curso');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211218_165655_Curso cannot be reverted.\n";

        return false;
    }
    */
}
