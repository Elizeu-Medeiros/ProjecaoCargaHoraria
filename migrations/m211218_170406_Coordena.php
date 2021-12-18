<?php

use yii\db\Migration;

/**
 * Class m211218_170406_Coordena
 */
class m211218_170406_Coordena extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('coordena',[
            'usuario_id' => $this->integer(),
            'curso_id' => $this->integer(),
            'inicio' => $this->date(),
            'fim' => $this->date()
        ]);
        $this->addPrimaryKey('pk_coordena', 'coordena', ['usuario_id', 'curso_id']);
        $this->addForeignKey('coordena_usuario_fk', 'coordena', 'usuario_id', 'usuario', 'id', 'restrict');
        $this->addPrimaryKey('coordena_curso_fk', 'coordena', 'curso_id', 'curso', 'id', 'restrict');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('coordena_usuario_fk', 'coordena');
        $this->dropForeignKey('coordena_curso_fk' ,'coordena');
        $this->dropTable('coordena');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211218_170406_Coordena cannot be reverted.\n";

        return false;
    }
    */
}
