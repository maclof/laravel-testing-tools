<?php

namespace Illuminated\Testing\Asserts;

trait DatabaseAsserts
{
    protected function seeInDatabaseMany($table, $rows)
    {
        foreach ($rows as $row) {
            $this->seeInDatabase($table, $row);
        }
    }

    protected function dontSeeInDatabaseMany($table, $rows)
    {
        foreach ($rows as $row) {
            $this->dontSeeInDatabase($table, $row);
        }
    }
}
