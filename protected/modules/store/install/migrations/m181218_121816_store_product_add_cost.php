<?php

class m181218_121816_store_product_add_cost extends yupe\components\DbMigration
{
    public function safeUp()
    {
        $this->addColumn('{{store_product}}', 'cost', 'decimal(19,3) null');
    }

    public function safeDown()
    {
        $this->dropColumn('{{store_product}}', 'cost');
    }
}