<?php

use App\Channel;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name' => 'Laravel0 6.8',
            'slug' => Str::slug('Laravel 6.8')
        ]);

        Channel::create([
            'name' => 'Android',
            'slug' => Str::slug('Android')
        ]);

        Channel::create([
            'name' => 'Java',
            'slug' => Str::slug('Java')
        ]);

        Channel::create([
            'name' => 'C#',
            'slug' => Str::slug('C#')
        ]);
    }
}
