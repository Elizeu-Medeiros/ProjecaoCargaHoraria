<?php

use yii\db\Migration;

/**
 * Class m211218_165720_Disciplina
 */
class m211218_165720_Disciplina extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('disciplina', [
            'id' => $this->primaryKey(),
            'disciplina' =>$this->string()->notNull(),
            'ch' => $this->smallInteger()->notNull(),
            'periodo' => $this->smallInteger()->notNull(),
            'nucleo_id' => $this->integer(),
            'matriz_id' => $this->integer()
        ]);

        $this->addForeignKey('disciplina_nucleo_fk', 'disciplina', 'nucleo_id', 'nucleo', 'id', 'restrict');
        $this->addForeignKey('disciplina_nucleo_fk', 'disciplina', 'matriz', 'id',  'restirct');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('disciplina_nucleo_fk', 'disciplina');
        $this->dropForeignKey('disciplina_matriz_fk', 'disciplina');
        $this->dropTable('disciplina');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211218_165720_Disciplina cannot be reverted.\n";

        return false;
    }
    */
}
