<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('capitulos');
        $table
            ->addColumn('resumo', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('novela_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('dia_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'dia_id',
                ]
            )
            ->addIndex(
                [
                    'novela_id',
                ]
            )
            ->create();

        $table = $this->table('dias');
        $table
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => false,
            ])
            ->create();

        $table = $this->table('novelas');
        $table
            ->addColumn('titulo', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => false,
            ])
            ->addColumn('ativo', 'boolean', [
                'default' => false,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('capitulos')
            ->addForeignKey(
                'dia_id',
                'dias',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'novela_id',
                'novelas',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

    }

    public function down()
    {
        $this->table('capitulos')
            ->dropForeignKey(
                'dia_id'
            )
            ->dropForeignKey(
                'novela_id'
            );

        $this->dropTable('capitulos');
        $this->dropTable('dias');
        $this->dropTable('novelas');
    }
}
