<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Vote;
use Illuminate\Support\Str;
use App\Models\Candidate;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // START XII SIJA A
        User::factory()->create([
            'fullname' => 'Adhwa’a Putra Pratama',
            'class' => 'XII SIJA A',
            'username' => 'adhwaapp',
            'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
            'password' => bcrypt(Str::random(10)),
            'already_vote' => 0
        ]);


        User::factory()->create([
            'fullname' => 'Adrian Britania Gilardino',
            'class' => 'XII SIJA A',
            'username' => 'adrianbrita',
            'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
            'password' => bcrypt(Str::random(10)), 
            'already_vote' => 0
        ]);

        User::factory()->create([
                    'fullname' => 'Alya Nur Fauziyyah',
                    'class' => 'XII SIJA A',
                    'username' => 'alyafauziyyah',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Ardhia Rahma Shafira',
                    'class' => 'XII SIJA A',
                    'username' => 'ardhiarahma',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Bintang Rizqika Aryanto',
                    'class' => 'XII SIJA A',
                    'username' => 'bintangrizqi',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Bramastyo Aji Saputro',
                    'class' => 'XII SIJA A',
                    'username' => 'ajisaputro',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Bunga Syifa Berliani',
                    'class' => 'XII SIJA A',
                    'username' => 'bungasyifa',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Fajriyah Yulia Az Zahra',
                    'class' => 'XII SIJA A',
                    'username' => 'fajriyahyulia',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Fanisa Firda Sari',
                    'class' => 'XII SIJA A',
                    'username' => 'fanisafirda',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Fawwas Chesta Adabi',
                    'class' => 'XII SIJA A',
                    'username' => 'fawwasches',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Ferdinand Elmo Danuarta',
                    'class' => 'XII SIJA A',
                    'username' => 'elmodanu',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Ilham Mulya Pratama',
                    'class' => 'XII SIJA A',
                    'username' => 'cakmul',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Ira Herawati',
                    'class' => 'XII SIJA A',
                    'username' => 'irahera',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Joseph Scuard Cipto Iskan Julio',
                    'class' => 'XII SIJA A',
                    'username' => 'josephscij',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Lisa Amalia',
                    'class' => 'XII SIJA A',
                    'username' => 'lisaamal',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Mawar Tri Zalianti',
                    'class' => 'XII SIJA A',
                    'username' => 'mawartri',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Mixel Anggara Octavio Ramadhan',
                    'class' => 'XII SIJA A',
                    'username' => 'mixelangg',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Muhammad Daffa Al Fath',
                    'class' => 'XII SIJA A',
                    'username' => 'muhdaffa',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Muhammad Romy Hakim Firmansyah',
                    'class' => 'XII SIJA A',
                    'username' => 'muhromy',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Musaid Nabil Susena',
                    'class' => 'XII SIJA A',
                    'username' => 'nabiltoobel',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Mutiara Dian Puspitasari',
                    'class' => 'XII SIJA A',
                    'username' => 'mutiaradian',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Nadia Nur Wahidah',
                    'class' => 'XII SIJA A',
                    'username' => 'nadianur',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Najwa Safira',
                    'class' => 'XII SIJA A',
                    'username' => 'najwasafira',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Niken Ayu Anjaratri',
                    'class' => 'XII SIJA A',
                    'username' => 'nikenayu',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Nisfasari Styastuti',
                    'class' => 'XII SIJA A',
                    'username' => 'nisfasari',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Nisrina Tesarona',
                    'class' => 'XII SIJA A',
                    'username' => 'nisrinatesa',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Nur Aini Dina Khoirunisa',
                    'class' => 'XII SIJA A',
                    'username' => 'nurainidina',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Randi Gilang Ramadhan',
                    'class' => 'XII SIJA A',
                    'username' => 'randigilang',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Rina Ramadhani',
                    'class' => 'XII SIJA A',
                    'username' => 'rinaramadhani',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Rizal Zaky Firmansyah',
                    'class' => 'XII SIJA A',
                    'username' => 'rizalzaky',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Rizki Sadewa',
                    'class' => 'XII SIJA A',
                    'username' => 'rizkisadewo',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Rizky Yoga Yanuadi',
                    'class' => 'XII SIJA A',
                    'username' => 'rizkyyoga',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Rosyana Rahmawati',
                    'class' => 'XII SIJA A',
                    'username' => 'rosyanarahma',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Sofia Putri Angelica',
                    'class' => 'XII SIJA A',
                    'username' => 'sofiaputri',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Suci Ayu Listiani',
                    'class' => 'XII SIJA A',
                    'username' => 'suciayu',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        // END XII SIJA A


        // START XII SIJA B
        User::factory()->create([
                    'fullname' => 'Zalldy Dwi Kurniawan',
                    'class' => 'XII SIJA A',
                    'username' => 'zalldydwi',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Adhzanni Ellysa Noer',
                    'class' => 'XII SIJA B',
                    'username' => 'adzanniellysa',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Alya Regita Nur Cahya',
                    'class' => 'XII SIJA B',
                    'username' => 'alyaregita',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Ananda Tri Rahma Sari',
                    'class' => 'XII SIJA B',
                    'username' => 'anandatri',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Andri Bayu Nugroho',
                    'class' => 'XII SIJA B',
                    'username' => 'andribayu',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Arina Septiya Wardani',
                    'class' => 'XII SIJA B',
                    'username' => 'arinasepitya',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Arkana Aulia Rafida',
                    'class' => 'XII SIJA B',
                    'username' => 'arkanaaulia',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Belva Anindya Putri Donny Bakti',
                    'class' => 'XII SIJA B',
                    'username' => 'belvaanindya',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Citra Helmalia Sari',
                    'class' => 'XII SIJA B',
                    'username' => 'citrahelma',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Desi Triningsih',
                    'class' => 'XII SIJA B',
                    'username' => 'desitriningsih',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Destalief Faqih Ari Widodo',
                    'class' => 'XII SIJA B',
                    'username' => 'destalieffaqih',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Diandra Farel Shadeva',
                    'class' => 'XII SIJA B',
                    'username' => 'diandrafarel',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Erwin Erlangga Ramadhani',
                    'class' => 'XII SIJA B',
                    'username' => 'erwinerlang',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Evy Nurdiana',
                    'class' => 'XII SIJA B',
                    'username' => 'evynurdiana',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Fajar Setiasih',
                    'class' => 'XII SIJA B',
                    'username' => 'fajarsetiasih',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Ganendra Allexa Sava',
                    'class' => 'XII SIJA B',
                    'username' => 'ganendrasava',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Hafidz Fathurrohman',
                    'class' => 'XII SIJA B',
                    'username' => 'fathurrohman',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Haidar Hanif Amaanullah',
                    'class' => 'XII SIJA B',
                    'username' => 'haidarhanif',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Hikmah Izzatil Asma',
                    'class' => 'XII SIJA B',
                    'username' => 'hikmahizzatil',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Iin Sholikhah',
                    'class' => 'XII SIJA B',
                    'username' => 'iinsholikhah',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Khoirul Azzam Mubarok',
                    'class' => 'XII SIJA B',
                    'username' => 'khoirulazzam',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'listya wulandari',
                    'class' => 'XII SIJA B',
                    'username' => 'listyawulan',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Mareta Uzi Hanifah',
                    'class' => 'XII SIJA B',
                    'username' => 'maretauzi',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Maya Difa Maharani',
                    'class' => 'XII SIJA B',
                    'username' => 'mayadifa',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);
        User::factory()->create([
                    'fullname' => 'Muhammad Bintang Ibrahim',
                    'class' => 'XII SIJA B',
                    'username' => 'muhbintang',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Muhammad Safi’i Ilham',
                    'class' => 'XII SIJA B',
                    'username' => 'muhilham',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Muhammad Tamziz Novian',
                    'class' => 'XII SIJA B',
                    'username' => 'muhtamziz',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Muhammad Yasyfa’ Hanifan',
                    'class' => 'XII SIJA B',
                    'username' => 'muhhanifan',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Nadia Tesa Amelia',
                    'class' => 'XII SIJA B',
                    'username' => 'nadiatesa',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Najma Alya Falahiyah',
                    'class' => 'XII SIJA B',
                    'username' => 'najmaalya',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Nani Yuliyanti',
                    'class' => 'XII SIJA B',
                    'username' => 'naniyulianti',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Niam Fatoni',
                    'class' => 'XII SIJA B',
                    'username' => 'niamfatoni',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Ryan Hermawan',
                    'class' => 'XII SIJA B',
                    'username' => 'ryanhermawan',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Suryo Bawono',
                    'class' => 'XII SIJA B',
                    'username' => 'suryobawono',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Yeisha Prita Daniswara',
                    'class' => 'XII SIJA B',
                    'username' => 'yeishaprita',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)), 
                    'already_vote' => 0
                ]);

        // END XII SIJA B


        // START XI SIJA A
        User::factory()->create([
            'fullname' => 'Ahmad Gozali',
            'class' => 'XI SIJA A',
            'username' => 'ahmadgozali',
            'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
            'password' => bcrypt(Str::random(10)),
            'already_vote' => 0
        ]);

        User::factory()->create([
                    'fullname' => 'Alifta Rahma Fadhil',
                    'class' => 'XI SIJA A',
                    'username' => 'aliftarahma',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Arfa Daim Amaludin',
                    'class' => 'XI SIJA A',
                    'username' => 'arfadaim',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Aziz Rasha Meisyah Pratama',
                    'class' => 'XI SIJA A',
                    'username' => 'azizrasha',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Cindy Nadzatul Aristia Setyawan',
                    'class' => 'XI SIJA A',
                    'username' => 'cindynadzatul',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Citra Rosiana',
                    'class' => 'XI SIJA A',
                    'username' => 'citrarosiana',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Daffa Nur Fatihah',
                    'class' => 'XI SIJA A',
                    'username' => 'daffanur',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Danish Abyan Pratista',
                    'class' => 'XI SIJA A',
                    'username' => 'danishabyan',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Dewi Wulandari',
                    'class' => 'XI SIJA A',
                    'username' => 'dewiwulandari',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Elsa Purbo Febriyanto',
                    'class' => 'XI SIJA A',
                    'username' => 'elsapurbo',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Fiana Rahmawati',
                    'class' => 'XI SIJA A',
                    'username' => 'fianarahmawati',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Irma Luvi Septiana',
                    'class' => 'XI SIJA A',
                    'username' => 'irmalutvi',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Juninda Finza Christianti',
                    'class' => 'XI SIJA A',
                    'username' => 'junindafinza',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Kayla Widayaningsih',
                    'class' => 'XI SIJA A',
                    'username' => 'kaylawidyaningsih',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Lindawati',
                    'class' => 'XI SIJA A',
                    'username' => 'lindawati',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Maulida Wahyu Andjani',
                    'class' => 'XI SIJA A',
                    'username' => 'maulidawahyu',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Maya Aprilia',
                    'class' => 'XI SIJA A',
                    'username' => 'mayaaprilia',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Mohammed Farrel Muzakki Kusumawardana',
                    'class' => 'XI SIJA A',
                    'username' => 'mohammedfarrel',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Muhammad Afif Saifuddin',
                    'class' => 'XI SIJA A',
                    'username' => 'muhammadafif',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Muhammad Nadhif Abraham Nurrokhman',
                    'class' => 'XI SIJA A',
                    'username' => 'muhammadnadhif',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Mulya Ufara Zahra',
                    'class' => 'XI SIJA A',
                    'username' => 'mulyaufara',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Nabila Azaria',
                    'class' => 'XI SIJA A',
                    'username' => 'nabilaazaria',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Nayottama Putra Perdana',
                    'class' => 'XI SIJA A',
                    'username' => 'nayottamaputra',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Nisaluna',
                    'class' => 'XI SIJA A',
                    'username' => 'nisaluna',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Novita Latifatun Nafisah',
                    'class' => 'XI SIJA A',
                    'username' => 'novitalatifatun',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Nurenti Putriayuningrum',
                    'class' => 'XI SIJA A',
                    'username' => 'nurentiputriayuningrum',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Putri Nur Ramadhani',
                    'class' => 'XI SIJA A',
                    'username' => 'putrinur',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Rasya Aulia Arby',
                    'class' => 'XI SIJA A',
                    'username' => 'rasyaaulia',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Rasya Aurelia Putri Anindita',
                    'class' => 'XI SIJA A',
                    'username' => 'rasyaaurelia',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Ressindha Anggeliarianty Az-Zahra',
                    'class' => 'XI SIJA A',
                    'username' => 'ressindhaanggeliarianty',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Ronny Dwi Kurniawan',
                    'class' => 'XI SIJA A',
                    'username' => 'ronnydwi',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Ryan Kurniawan',
                    'class' => 'XI SIJA A',
                    'username' => 'ryankurniawan',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Sekar Muladsih',
                    'class' => 'XI SIJA A',
                    'username' => 'sekarmuladsih',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Stefanus Henry Setiawan',
                    'class' => 'XI SIJA A',
                    'username' => 'stefanushenry',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Yehezkiel Mayogi Leon Saputra',
                    'class' => 'XI SIJA A',
                    'username' => 'yehezkielmayogi',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);


        // END XI SIJA A


        // START XI SIJA B
        User::factory()->create([
                    'fullname' => 'Achmad Kemal Saputro',
                    'class' => 'XI SIJA B',
                    'username' => 'achmadkemal',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Aliya Rahima Cahya Dewi',
                    'class' => 'XI SIJA B',
                    'username' => 'aliyarahima',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Amajid Harjuna Syauqi',
                    'class' => 'XI SIJA B',
                    'username' => 'amajidharjuna',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Angga Aditya',
                    'class' => 'XI SIJA B',
                    'username' => 'anggaaditya',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Arfan Andika Putra',
                    'class' => 'XI SIJA B',
                    'username' => 'arfanandika',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Arfan Indra Kurniawan',
                    'class' => 'XI SIJA B',
                    'username' => 'arfanindra',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Arum Surya Kusuma',
                    'class' => 'XI SIJA B',
                    'username' => 'arumsurya',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Bagas Rahmat P.',
                    'class' => 'XI SIJA B',
                    'username' => 'bagasrahmat',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Brian Ndharu Aji B.',
                    'class' => 'XI SIJA B',
                    'username' => 'brianndharu',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Carissa Vadya S. F.',
                    'class' => 'XI SIJA B',
                    'username' => 'carissavadya',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Denissa Cipto Rahayu',
                    'class' => 'XI SIJA B',
                    'username' => 'denissacipto',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Diana Dwi Halimatus Sakdiyah',
                    'class' => 'XI SIJA B',
                    'username' => 'dianadwi',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Eva Kurnia Rahmadani',
                    'class' => 'XI SIJA B',
                    'username' => 'evakurnia',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Fadhlan Rafa F.',
                    'class' => 'XI SIJA B',
                    'username' => 'fadhlanrafa',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Ferdi Risqo Amardianto',
                    'class' => 'XI SIJA B',
                    'username' => 'ferdirisqo',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Gading Adjie Pratama',
                    'class' => 'XI SIJA B',
                    'username' => 'gadingadjie',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Giovani Radit Prasetyanto',
                    'class' => 'XI SIJA B',
                    'username' => 'giovaniradit',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Isnaini Zahra Mufida',
                    'class' => 'XI SIJA B',
                    'username' => 'isnainizahra',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Kahfi Hisbullah',
                    'class' => 'XI SIJA B',
                    'username' => 'kahfihisbullah',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'M. Arief Hermawan',
                    'class' => 'XI SIJA B',
                    'username' => 'arifhermawan',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Muhammad Nurhadiantoro Eko Wicaksono',
                    'class' => 'XI SIJA B',
                    'username' => 'muhammadnurhadiantoro',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Muhammad Rafiq Rianggono',
                    'class' => 'XI SIJA B',
                    'username' => 'muhammadrafiq',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Nadaa Mikolin',
                    'class' => 'XI SIJA B',
                    'username' => 'nadaamikolin',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Nila Aprillya',
                    'class' => 'XI SIJA B',
                    'username' => 'nilaaprillya',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Pinky Marsya Syfana Isty',
                    'class' => 'XI SIJA B',
                    'username' => 'pinkymarsya',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Rafi Lutfiano',
                    'class' => 'XI SIJA B',
                    'username' => 'rafilutfiano',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Rafida Triswinda S.',
                    'class' => 'XI SIJA B',
                    'username' => 'rafidatriswinda',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Ryan Rafif Nur Rahman',
                    'class' => 'XI SIJA B',
                    'username' => 'ryanrafif',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Sekar Ayu Purbaningrum',
                    'class' => 'XI SIJA B',
                    'username' => 'sekarayu',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Selvi Istiyatna',
                    'class' => 'XI SIJA B',
                    'username' => 'selviistiyatna',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Siti Dian Ramadhani',
                    'class' => 'XI SIJA B',
                    'username' => 'sitidian',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Stephanie Salwa Dewanti',
                    'class' => 'XI SIJA B',
                    'username' => 'stephaniesalwa',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Suci Alifah Nur Sholekhah',
                    'class' => 'XI SIJA B',
                    'username' => 'sucialifah',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Syafina Indah Lalita',
                    'class' => 'XI SIJA B',
                    'username' => 'syafinaindah',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Tirania Aulia R.',
                    'class' => 'XI SIJA B',
                    'username' => 'tiraniaaulia',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Wafiq Aulia',
                    'class' => 'XI SIJA B',
                    'username' => 'wafiqaulia',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'Zembrillyus Marudut Hutasoit',
                    'class' => 'XI SIJA B',
                    'username' => 'zembrillyusmarudut',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        // END XI SIJA B



        // START X SIJA A
        User::factory()->create([
            'fullname' => 'A.YOSE ALDO VALENTINO',
            'class' => 'X SIJA A',
            'username' => 'ayosealdo',
            'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
            'password' => bcrypt(Str::random(10)),
            'already_vote' => 0
        ]);

        User::factory()->create([
                    'fullname' => 'ADEK ARYA PRATAMA SIGIT',
                    'class' => 'X SIJA A',
                    'username' => 'adekarya',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'ADELIA CAHYA RAMADHANI',
                    'class' => 'X SIJA A',
                    'username' => 'adeliacahya',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'AGEA NUR FAISYAH',
                    'class' => 'X SIJA A',
                    'username' => 'ageanur',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'AKASSA BANING SAMBODO',
                    'class' => 'X SIJA A',
                    'username' => 'akassabaning',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'ALIF HAFIZ WARDANA',
                    'class' => 'X SIJA A',
                    'username' => 'alifhafiz',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'ANGGUN DANU ARTA',
                    'class' => 'X SIJA A',
                    'username' => 'anggundanu',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'ANINDYA TRYAS AYU PRAMESTY',
                    'class' => 'X SIJA A',
                    'username' => 'anindyatryas',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'CHOLISTIANA VIKY FADILLAH',
                    'class' => 'X SIJA A',
                    'username' => 'cholistianaviky',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'DESIANA NUR AVITASARI',
                    'class' => 'X SIJA A',
                    'username' => 'desiananur',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'DIMAS BAGUS PRASETYO',
                    'class' => 'X SIJA A',
                    'username' => 'dimasbagus',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);
        User::factory()->create([
                    'fullname' => 'DONIHARI PUTRO',
                    'class' => 'X SIJA A',
                    'username' => 'donihariputro',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'EVITA ADELIA',
                    'class' => 'X SIJA A',
                    'username' => 'evitaadelia',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'FIRDAUS OKTOBI BRILLIANDIKA',
                    'class' => 'X SIJA A',
                    'username' => 'firdausoktobi',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'INDAH DWI KHASANAH',
                    'class' => 'X SIJA A',
                    'username' => 'indahdwi',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'JALU JABBAR ARUNDAYA',
                    'class' => 'X SIJA A',
                    'username' => 'jalujabbar',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'KHAIRIL ZHAHRAN SAPUTRA',
                    'class' => 'X SIJA A',
                    'username' => 'khairilzhahran',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'MUHAMMAD ADI WIYATA ZIHAUL HAQ',
                    'class' => 'X SIJA A',
                    'username' => 'muhammadadi',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'MUHAMMAD HAFIZH ALFATHAN',
                    'class' => 'X SIJA A',
                    'username' => 'muhammadhafizh',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'MUHAMMAD RAAFI SEBASTIAN',
                    'class' => 'X SIJA A',
                    'username' => 'muhammadraafi',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'NABILA IRA EVENTIN',
                    'class' => 'X SIJA A',
                    'username' => 'nabilaira',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'NAUFAL FAUZI RAMADHANI',
                    'class' => 'X SIJA A',
                    'username' => 'naufalfauzi',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'NURHIDAYAH',
                    'class' => 'X SIJA A',
                    'username' => 'nurhidayah',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'REFANA FATIHAH AGUSTINA',
                    'class' => 'X SIJA A',
                    'username' => 'refanafatihah',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'RIDO FADHAIL',
                    'class' => 'X SIJA A',
                    'username' => 'ridofadhail',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'SAFIRA ROHADATUSYAHLA',
                    'class' => 'X SIJA A',
                    'username' => 'safirarohadatusyahla',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'SATRIA AGUNG WICAKSANA',
                    'class' => 'X SIJA A',
                    'username' => 'satriaagung',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'SATRIA SRI MUSTIKA MULYA',
                    'class' => 'X SIJA A',
                    'username' => 'satriasri',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'SETIANI CINTA AZALEA SAKSANA',
                    'class' => 'X SIJA A',
                    'username' => 'setianicinta',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'SHABILLA SATYA DEWI',
                    'class' => 'X SIJA A',
                    'username' => 'shabillasatya',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'SHAFA AURA APRILIA',
                    'class' => 'X SIJA A',
                    'username' => 'shafaaura',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'SHOFA WIJANG FURQONI',
                    'class' => 'X SIJA A',
                    'username' => 'shofawijang',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'SYIFA UN NAFSIYAH',
                    'class' => 'X SIJA A',
                    'username' => 'syifaunnafsiyah',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'SYIRA YETTA RAMADHANI',
                    'class' => 'X SIJA A',
                    'username' => 'syirayetta',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);

        User::factory()->create([
                    'fullname' => 'ZERO SEVEN GEA HEVIT',
                    'class' => 'X SIJA A',
                    'username' => 'zeroseven',
                    'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                    'password' => bcrypt(Str::random(10)),
                    'already_vote' => 0
                ]);
// END X SIJA A



// START X SIJA B
            User::factory()->create([
                        'fullname' => 'ABHISTA KUMARA PRATAMA',
                        'class' => 'X SIJA B',
                        'username' => 'abhistakumara',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'ADELLA NURUL QOTIMAH',
                        'class' => 'X SIJA B',
                        'username' => 'adellanurul',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'AHMAD SYAUQI ALA',
                        'class' => 'X SIJA B',
                        'username' => 'ahmadsyauqi',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'ALBIYAN CAHYA PRATAMA',
                        'class' => 'X SIJA B',
                        'username' => 'albiyancahya',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'ALYA MAULIDA AVIKA',
                        'class' => 'X SIJA B',
                        'username' => 'alyamaulida',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'ANANDA KEVIN YULIANTO',
                        'class' => 'X SIJA B',
                        'username' => 'anandakevin',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'ANASTASYA AMELIA PUTRI',
                        'class' => 'X SIJA B',
                        'username' => 'anastasyaamelia',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'ANGGIE DWI ANDINI',
                        'class' => 'X SIJA B',
                        'username' => 'anggiedwi',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'ARYA WAHYU AGUNG SAPUTRA',
                        'class' => 'X SIJA B',
                        'username' => 'aryawahyu',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'DIAH AYU FEBRIANTI',
                        'class' => 'X SIJA B',
                        'username' => 'diahayu',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'DINAR KURNIAWAN',
                        'class' => 'X SIJA B',
                        'username' => 'dinarkurniawan',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'DZULFIKAR IBNU ILHAM PANGESTU',
                        'class' => 'X SIJA B',
                        'username' => 'dzulfikaribnu',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'ELFI SURYANI KUSUMA DEWI',
                        'class' => 'X SIJA B',
                        'username' => 'elfisuryani',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'ERLANGGA DHEIGA PRATAMA',
                        'class' => 'X SIJA B',
                        'username' => 'erlanggadheiga',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'FAJRUL FALAH ADINATA',
                        'class' => 'X SIJA B',
                        'username' => 'fajrulfalah',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'FAUZAN AZIZ WIBRILLIANT',
                        'class' => 'X SIJA B',
                        'username' => 'fauzanaziz',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'FELIA FITRIANA',
                        'class' => 'X SIJA B',
                        'username' => 'feliafitriana',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'GALANG ANDROMEDA',
                        'class' => 'X SIJA B',
                        'username' => 'galangandromeda',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'HAFIDS DAMAS ARYA SUTHA RAMADHAN',
                        'class' => 'X SIJA B',
                        'username' => 'hafidsdamas',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'HAURAA DEVINA YUMNAA ZHAFIRA',
                        'class' => 'X SIJA B',
                        'username' => 'hauraadevina',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'HELENA DISKA MAHARANI',
                        'class' => 'X SIJA B',
                        'username' => 'helenadiska',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'INTAN LISTYORINI',
                        'class' => 'X SIJA B',
                        'username' => 'intanlistyorini',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'JASHON CHANDRA',
                        'class' => 'X SIJA B',
                        'username' => 'jashonchandra',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'KEYLA YUSTIKA RINJANI',
                        'class' => 'X SIJA B',
                        'username' => 'keylayustika',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'MARISA RIZKI KURNIA SARI',
                        'class' => 'X SIJA B',
                        'username' => 'marisarizki',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'MUHAMMAD FADHIL AVANINDRA',
                        'class' => 'X SIJA B',
                        'username' => 'muhammadfadhil',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'MUHAMMAD OVIE AKBAR',
                        'class' => 'X SIJA B',
                        'username' => 'muhammadovie',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'MUHAMMAD RIZKYA NAYOTTAMA',
                        'class' => 'X SIJA B',
                        'username' => 'muhammadrizkya',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'NAILA WINANDA NURPRATAMA',
                        'class' => 'X SIJA B',
                        'username' => 'nailawinanda',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'NALURI CINDY PUSPITASARI',
                        'class' => 'X SIJA B',
                        'username' => 'naluricindy',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'PAHRI DIANTO',
                        'class' => 'X SIJA B',
                        'username' => 'pahridianto',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'REVANANDA ZAHRA',
                        'class' => 'X SIJA B',
                        'username' => 'revanandazahra',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'SURYA GUNSETYA SAPUTRA',
                        'class' => 'X SIJA B',
                        'username' => 'suryagunasetya',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'WAHYU PRATIWI',
                        'class' => 'X SIJA B',
                        'username' => 'wahyupratiwi',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);

            User::factory()->create([
                        'fullname' => 'ZAHRA NUR SYIFA QOIRUNNISA',
                        'class' => 'X SIJA B',
                        'username' => 'zahranur',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);










                    User::factory()->create([
                        'fullname' => 'admin',
                        'class' => 'ITSC Admin',
                        'username' => 'admin',
                        'token' => 196500,
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);



                    User::factory()->create([
                        'fullname' => 'Riza Akbar',
                        'class' => 'Guru SIJA',
                        'username' => 'rizaakbar',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);
                    User::factory()->create([
                        'fullname' => 'Atik Ariyani',
                        'class' => 'Guru SIJA',
                        'username' => 'atikariyani',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);
                    User::factory()->create([
                        'fullname' => 'Ahmad Suruli Musthofa',
                        'class' => 'Guru SIJA',
                        'username' => 'ahmadmusthofa',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);
                    User::factory()->create([
                        'fullname' => 'Andi Adriyatmoko',
                        'class' => 'Guru SIJA',
                        'username' => 'andiadriyatmoko',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);
                    User::factory()->create([
                        'fullname' => 'Dalyanta Budi Sasanta',
                        'class' => 'Guru SIJA',
                        'username' => 'dalyantabudi',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);
                    User::factory()->create([
                        'fullname' => 'Sigit Winoto',
                        'class' => 'Guru SIJA',
                        'username' => 'sigitwinoto',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);
                    User::factory()->create([
                        'fullname' => 'Sri Wiyanto',
                        'class' => 'Guru SIJA',
                        'username' => 'sriwiyanto',
                        'token' => str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                        'password' => bcrypt(Str::random(10)),
                        'already_vote' => 0
                    ]);
                    
                    Candidate::factory()->create([
                        'name' => 'Ryan Rafif Nur Rahman & Satria Agung Wicaksana'
                    ]);
                    
                    Candidate::factory()->create([
                        'name' => 'Stephanie Salwa Dewanti & Fajrul Falah Adinata'
                    ]);
                    
                    Candidate::factory()->create([
                        'name' => 'Nayottama Putra Perdana & Jalu Jabbar Arundaya'
                    ]);
    }
}


