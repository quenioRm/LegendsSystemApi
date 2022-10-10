<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activities\ActivitieGroups;
use App\Models\Projects;
use App\Models\Employe;
use App\Models\userProjects;
use App\Models\User;
use App\Models\Activities\Unit;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employe::create([
            'name' => 'Vividense'
        ]);

        Projects::create([
            'name' => 'Projeto Minuano',
            'employe_id' => Employe::first()->id
        ]);

        // User::create([
        //     'name' => 'quenio',
        //     'email' => 'quenio.rojer@gmail.com',
        //     'password' => '020789'
        // ]);

        userProjects::create([
            'project_id' => 1,
            'user_id' => Projects::first()->id
        ]);

        Unit::create([
            'name' => 'Km'
        ]);

        Unit::create([
            'name' => 'Torre'
        ]);

        Unit::create([
            'name' => 'M³'
        ]);

        Unit::create([
            'name' => 'M²'
        ]);

        ActivitieGroups::create([
            'name' => 'Mobilização',
            'project_id' => Projects::first()->id
        ]);

        ActivitieGroups::create([
            'name' => 'Administração de canteiro',
            'project_id' => Projects::first()->id
        ]);

        ActivitieGroups::create([
            'name' => 'Serviços Preliminares',
            'project_id' => Projects::first()->id
        ]);

        ActivitieGroups::create([
            'name' => 'Obras Civis',
            'project_id' => Projects::first()->id
        ]);

        ActivitieGroups::create([
            'name' => 'Pátio de Materiais',
            'project_id' => Projects::first()->id
        ]);

        ActivitieGroups::create([
            'name' => 'Montagem',
            'project_id' => Projects::first()->id
        ]);

        ActivitieGroups::create([
            'name' => 'Lançamento',
            'project_id' => Projects::first()->id
        ]);

        ActivitieGroups::create([
            'name' => 'Comissionamento',
            'project_id' => Projects::first()->id
        ]);
    }
}
