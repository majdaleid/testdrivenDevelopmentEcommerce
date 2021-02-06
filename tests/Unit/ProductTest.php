<?php

namespace Tests\Unit;

use App\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
  use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @test
     */
    public function it_has_a_formatted_price()
    {
        $product=Product::create([
          'name'=>'Test Product',
          'description'=>'Test product description',
'price'=>1099
        ]);
      $formattedPrice=$product->getPrice();
      $this->assertEquals('10.99',$product->getPrice());
    }
}
