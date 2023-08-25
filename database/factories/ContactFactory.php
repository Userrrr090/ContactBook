<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Contact;

class ContactFactory extends Factory
{

    public function definition(): array
    {
        return [
            'first_name' => $this->fake()->firstName(),
            'last_name' => $this->fake()->lastName(),
            'reminder' => $this->fake()->sentence(5),
            'contact' => $this->fake()->safeEmail(),
        ];
    }

}
