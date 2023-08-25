<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class FillContactsTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        for ($i = 0; $i < 200; $i++) {
            $sFirstName = fake()->firstName();
            $sLastName = fake()->lastName();
            $sLastName = fake()->lastName();
            $reminder = fake()->sentence(7);
            $mailer = ['@gmail.com', '@yahoo.com', '@ukr.net'];

            DB::table('contacts')->insert([
                'first_name' => $sFirstName,
                'last_name' => $sLastName,
                'reminder' => $reminder,
                'contact' => strtolower($sLastName) . $mailer[array_rand($mailer)],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
