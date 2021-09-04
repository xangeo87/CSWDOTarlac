<?php

namespace Database\Factories;

use App\Models\FamilyMember;
use Illuminate\Database\Eloquent\Factories\Factory;

class FamilyMemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FamilyMember::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         $family_member = $this->faker->unique()->name();
        // $slug = Str::slug($family_member,"-");
        // $imageName = 'family_member'.$this->faker->unique()->numberBetween(1,20).'jpg';
        return [
            'name' => $family_member,
            // 'slug' => $slug,
            'age' => $this->faker->numberBetween(1,100),
            'occupation' => $this->faker->jobTitle(),
            'income' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 3000),
            'client_file_id' => $this->faker->numberBetween(1,20)
            // 'image' => $imageName,
            // 'thumbnail' => $imageName
        ];
    }
}
