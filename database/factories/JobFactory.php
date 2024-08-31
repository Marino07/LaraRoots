<?
namespace Database\Factories;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Kreiraj Employer i uzmi njegov ID

        return [
            'title' => $this->faker->jobTitle(),
            'employer_id' => Employer::factory(), // Postavi ID Employer-a
            'salary' => '50000$',
        ];
    }
}
