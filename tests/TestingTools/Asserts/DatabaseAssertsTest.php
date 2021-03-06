<?php

namespace Illuminated\Testing\TestingTools\Tests\Asserts;

use Illuminated\Testing\TestingTools\Tests\TestCase;
use Post;

class DatabaseAssertsTest extends TestCase
{
    /** @test */
    public function it_has_see_database_table_assertion()
    {
        $this->seeDatabaseTable('posts');
    }

    /** @test */
    public function it_has_dont_see_database_table_assertion()
    {
        $this->dontSeeDatabaseTable('unicorns');
    }

    /** @test */
    public function it_has_see_in_database_many_assertion()
    {
        factory(Post::class)->create(['title' => 'First Post']);
        factory(Post::class)->create(['title' => 'Second Post']);
        factory(Post::class)->create(['title' => 'Third Post']);

        $this->seeInDatabaseMany('posts', [
            ['title' => 'First Post'],
            ['title' => 'Second Post'],
            ['title' => 'Third Post'],
        ]);
    }

    /** @test */
    public function it_has_dont_see_in_database_many_assertion()
    {
        $this->dontSeeInDatabaseMany('posts', [
            ['title' => 'Fourth Post'],
            ['title' => 'Fifth Post'],
        ]);
    }
}
