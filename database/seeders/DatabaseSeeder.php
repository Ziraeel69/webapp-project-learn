<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\List_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp.',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sodales dui eu dictum rutrum.
        //     Curabitur ut lacus mattis, feugiat diam et, semper augue. Nulla ac velit vitae risus tristique imperdiet ac id tellus. 
        //     Etiam interdum tortor sapien, eleifend rhoncus lectus bibendum ac. Donec viverra nibh sed dictum ultricies. 
        //     Vivamus pretium posuere leo. '
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@email.com',
        //     'website' => 'https://www.starkindustries.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sodales dui eu dictum rutrum.
        //     Curabitur ut lacus mattis, feugiat diam et, semper augue. Nulla ac velit vitae risus tristique imperdiet ac id tellus. 
        //     Etiam interdum tortor sapien, eleifend rhoncus lectus bibendum ac. Donec viverra nibh sed dictum ultricies. 
        //     Vivamus pretium posuere leo. '
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
