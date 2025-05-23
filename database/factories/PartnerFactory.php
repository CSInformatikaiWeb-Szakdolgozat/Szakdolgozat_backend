    <?php

    namespace Database\Factories;

    use Illuminate\Database\Eloquent\Factories\Factory;

    /**
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partner>
     */
    class PartnerFactory extends Factory
    {
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition(): array
        {
            return [
                'name' => $this->faker->name(),
                'status' => true,
                'page' => $this->faker->url(), // page mező hozzáadása
            ];
        }
    }
