<?php

namespace Database\Factories;

use App\Models\Document;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Document::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'path' => $this->faker->url,
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'views' => $this->faker->randomDigit,
            'download' => $this->faker->randomDigit
        ];
    }
}
