<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'title' => $this->faker->company(),
      'tags' => 'Rock, Pop, Techno',
      'location' => $this->faker->city(),
      'description' => $this->faker->paragraph(5),
      'date' => $this->faker->date(),
      'image' => './images/crowd.jpg',
      'price' => $this->faker->numberBetween(20, 100),
      'pool' => $this->faker->numberBetween(0, 500)
    ];
  }
}
