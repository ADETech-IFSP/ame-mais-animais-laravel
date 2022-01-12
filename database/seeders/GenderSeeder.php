<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gender = new Gender();
        $gender->initials = "M";
        $gender->value = "Masculino";
        $gender->save();

        $gender = new Gender();
        $gender->initials = "F";
        $gender->value = "Feminino";
        $gender->save();

        $gender = new Gender();
        $gender->initials = "O";
        $gender->value = "Outros";
        $gender->save();
    }
}
