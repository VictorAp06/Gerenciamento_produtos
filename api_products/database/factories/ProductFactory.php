<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    //protected $model = Model::class;
    protected $model = \App\Models\Product::class;
    
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cod_produto' => $this->faker->randomDigit(4),
            'nome' => $this->faker->name(),
            'valor' => $this->faker->randomFloat(2, 0, 8),
            'estoque' => $this->faker->randomDigit(10),
            'cidade_id' => $this->faker->numberBetween(1,4),
        ];
    }
}
