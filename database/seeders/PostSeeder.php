<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Post::create([
        //     'title' => 'lorem ipsum dolor imit',
        //     'body' => 'Similique molestias exercitationem officia aut. Itaque doloribus et rerum voluptate iure. Unde veniam magni dignissimos expedita eius.',
        // ]);
        Post::factory()->create();
    }
}
