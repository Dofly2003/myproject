<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Buku Teks Siswa Pendamping Kurmer Sekolah Ipas (Ilmu Pengetahuan Alam Dan Sosial) Sd Kelas 6 - Kurikulum Merdeka',
            'image' => 'https://jpbooks.co.id/files/upload/a98bd3c4cb09ae2b35b0153fa515133eb25dce9c9c7ea96cd2.jpeg'
        ]);
        Post::create([
            'title' => 'Buku Teks Siswa Pendamping Kurmer Sekolah Ipas (Ilmu Pengetahuan Alam Dan Sosial) Sd Kelas 5 - Kurikulum Merdeka',
            'image' => 'https://jpbooks.co.id/files/upload/9848291fdf53021d1b6fb5a8afb2cc7a0fc9e609f60b79fb82.jpeg'
        ]);
        Post::create([
            'title' => 'Buku Teks Siswa Pendamping Kurmer Sekolah Ipas (Ilmu Pengetahuan Alam Dan Sosial) Sd Kelas 4 - Kurikulum Merdeka',
            'image' => 'https://jpbooks.co.id/files/upload/f2b0eae5367c7349563e0c38b11e9290b1d1d7e136514020f7.jpeg'
        ]);
        Post::create([
            'title' => 'Buku Teks Siswa Pendamping Kurmer Sekolah Ipas (Ilmu Pengetahuan Alam Dan Sosial) Sd Kelas 3 - Kurikulum Merdeka',
            'image' => 'https://jpbooks.co.id/files/upload/30910c4e7c8ebaa578d647772473da4100a37c936afdf1cab6.jpeg'
        ]);
        Post::create([
            'title' => 'Buku Teks Siswa Pendamping Kurmer Sekolah Bahasa Inggris Sd Kelas 6 - Kurikulum Merdeka',
            'image' => 'https://jpbooks.co.id/files/upload/923da9bcf9bb72963c6d0b70da69a5fa7d0457bcea7f6693e3.jpeg'
        ]);
        Post::create([
            'title' => 'Buku Teks Siswa Pendamping Kurmer Sekolah Bahasa Inggris Sd Kelas 5 - Kurikulum Merdeka',
            'image' => 'https://jpbooks.co.id/files/upload/05762023e21c0f522197e82cc85a0b0d936b67172de4582dd1.jpeg'
        ]);
        Post::create([
            'title' => 'Buku Teks Siswa Pendamping Kurmer Sekolah Bahasa Inggris Sd Kelas 4 - Kurikulum Merdeka',
            'image' => 'https://jpbooks.co.id/files/upload/048699c59172fdced96dde69ce04b94afc5e00b3e3d1ece63a.jpeg'
        ]);
        Post::create([
            'title' => 'Buku Teks Siswa Pendamping Kurmer Sekolah Bahasa Inggris Sd Kelas 3 - Kurikulum Merdeka',
            'image' => 'https://jpbooks.co.id/files/upload/b089f053d649aae3f6f5504c13ac0d39dbc3bff6dbfdc2425a.jpeg'
        ]);
    }
}
