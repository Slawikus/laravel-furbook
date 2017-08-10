<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CatTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomePageRedirection()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
        $response->assertRedirect('cat');
    }

    public function testCanAddCat()
    {
        $response = $this->post('cat',
            ['name' => 'test', 'date_of_birth' => '2016-08-27', 'breed_id' => 1]
        );
        $this->assertDatabaseHas('cats', ['name' => 'test']);
    }

    public function testCanAddCatWithFactory()
    {
        $cat = factory(\Furbook\Cat::class)->create();
        $this->assertDatabaseHas('cats', ['name' => $cat->name]);
        $this->assertDatabaseHas('breeds', ['name' => $cat->breed->name]);

    }
}
