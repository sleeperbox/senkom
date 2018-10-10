<?php
use App\Berita;
use Illuminate\Database\Seeder;
class BeritaTableSeeder extends Seeder
{

public function run()
{
    DB::table('beritas')->delete();
    Berita::create(array(
        'callsign' => '1234',
        'tlp' => '123455',
        'pesan' => 'lorem ipsum dolor sit amet'
    ));
}

}