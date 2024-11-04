<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categoryContents = Category::pluck('content')->toArray();


        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['男', '女', 'その他']),
            'email' => $this->faker->safeEmail, 
            'tel' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'building' => $this->faker->optional()->secondaryAddress, // Optional field, could be null 
            'select' => $this->faker->randomElement($categoryContents),
            'detail' => $this->faker->text(100),
            'uuid' => $this->faker->uuid,
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
