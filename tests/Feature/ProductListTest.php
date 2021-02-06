<?php

namespace Tests\Feature;

use App\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductListTest extends TestCase
{
   use RefreshDatabase;
    /**
     * @test
     */
     /*1create product model
       2gaurded
       3phpunit.xml
     <env name="DB_CONNECTION" value="sqlite"/>
     <env name="DB_DATABASE" value=":memory:"/>
4 migration php artisan make:migration create_products_table
5use Illuminate\Foundation\Testing\RefreshDatabase
6 modified the migration
     */
    public function it_can_display_the_list_of_products()
    {
      Product::create([
  'name'=>'Test Product',
  'description'=>'Test product description',
  'price'=>1099
]);
/*see the link*/
$response=$this->get('/products');
//inside the link i can see the product name , and the price
$response->assertSee('Test Product')->assertSee('10.99');

    }
}
