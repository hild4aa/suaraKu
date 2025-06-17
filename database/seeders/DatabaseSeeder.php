<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Img;
use App\Models\User;
use App\Models\Konten;
use App\Models\Chatbox;
use App\Models\Laporan;
use App\Models\Messege;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // --- 0. PERSIAPAN (SINTAKS UNTUK POSTGRESQL) ---
        DB::statement('TRUNCATE TABLE imgs, users, kontens, chatboxes, laporans, messeges RESTART IDENTITY CASCADE');

        // --- 1. SEEDING TABEL IMGS ---
        Img::insert([
            // Untuk Sertifikat Psikolog [id: 1, 2]
            ['img_link' => 'sertifikat/psikolog_jane_doe.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['img_link' => 'sertifikat/psikolog_john_smith.jpg', 'created_at' => now(), 'updated_at' => now()],

            // Untuk Konten Edukasi [id: 3, 4, 5]
            ['img_link' => 'konten/artikel_stres.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['img_link' => 'konten/artikel_cemas.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['img_link' => 'konten/artikel_depresi.jpg', 'created_at' => now(), 'updated_at' => now()],

            // Untuk Bukti Laporan [id: 6]
            ['img_link' => 'bukti/laporan_kekerasan_01.jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);


        // --- 2. SEEDING TABEL USERS (FIXED) ---
        User::insert([
            // 1. Admin [id: 1] - Menambahkan kolom nullable
            [
                'username' => 'admin',
                'name' => 'Administrator',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'status' => 'Active',
                'noKtp' => null,
                'sertifikat_psikolog_img' => null,
                'jenis_kelamin' => null,
                'created_at' => now(), 'updated_at' => now()
            ],
            // 2. Psikolog 1 [id: 2] - Struktur sudah lengkap
            [
                'username' => 'janedoe_psi',
                'name' => 'Dr. Jane Doe, M.Psi.',
                'email' => 'jane.doe@example.com',
                'password' => Hash::make('password'),
                'role' => 'psikolog',
                'status' => 'Active',
                'noKtp' => '3509123456780001',
                'sertifikat_psikolog_img' => 1,
                'jenis_kelamin' => 'P',
                'created_at' => now(), 'updated_at' => now()
            ],
            // 3. Psikolog 2 [id: 3] - Struktur sudah lengkap
            [
                'username' => 'johnsmith_psi',
                'name' => 'Dr. John Smith, S.Psi.',
                'email' => 'john.smith@example.com',
                'password' => Hash::make('password'),
                'role' => 'psikolog',
                'status' => 'Active',
                'noKtp' => '3509123456780002',
                'sertifikat_psikolog_img' => 2,
                'jenis_kelamin' => 'L',
                'created_at' => now(), 'updated_at' => now()
            ],
            // 3. Psikolog 2 [id: 3] - Struktur sudah lengkap
            [
                'username' => 'johnsmith',
                'name' => 'Dr. John Smith, S.Psi.',
                'email' => 'smith@example.com',
                'password' => Hash::make('password'),
                'role' => 'psikolog',
                'status' => 'inActive',
                'noKtp' => '35091234780002',
                'sertifikat_psikolog_img' => 2,
                'jenis_kelamin' => 'L',
                'created_at' => now(), 'updated_at' => now()
            ],
            // 4. Korban 1 [id: 4] - Menambahkan kolom nullable
            [
                'username' => 'widy4aa',
                'name' => 'Budi Setiawan',
                'email' => 'budi.setiawan@example.com',
                'password' => Hash::make('password'),
                'role' => 'korban',
                'status' => 'Active',
                'noKtp' => '3509123456780003',
                'sertifikat_psikolog_img' => null,
                'jenis_kelamin' => 'L',
                'created_at' => now(), 'updated_at' => now()
            ],

        ]);


        // --- 3. SEEDING TABEL KONTENS ---
        Konten::insert([
            [
                'judul' => 'Cara Mengelola Stres di Tempat Kerja',
                'keterangan' => 'Stres kerja adalah masalah umum. Pelajari beberapa teknik praktis untuk mengatasinya.',
                'konten_img' => 3,
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'judul' => 'Mengenali Tanda-tanda Kecemasan (Anxiety)',
                'keterangan' => 'Kecemasan bisa muncul dalam berbagai bentuk. Kenali gejalanya agar Anda bisa mencari bantuan lebih dini.',
                'konten_img' => 4,
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'judul' => '5 Langkah Pertama Menghadapi Gejala Depresi',
                'keterangan' => 'Merasa sedih berkepanjangan? Mungkin ini saatnya mengambil langkah pertama. Artikel ini memandu Anda.',
                'konten_img' => 5,
                'created_at' => now(), 'updated_at' => now()
            ],
        ]);


        // --- 4. SEEDING LAPORAN & PERCAKAPAN ---
        $korban = User::where('role', 'korban')->first();
        $psikolog = User::where('role', 'psikolog')->first();

        // Pastikan Anda membuat instance Chatbox baru untuk kasus ini
$chatbox3 = Chatbox::create();

// Gunakan psikolog yang sama atau yang lain sesuai kebutuhan
// $psikolog = User::where('role', 'psikolog')->first();

Laporan::create([
    'id_korban' => 5, // ID untuk Budi Setiawan
    'id_psikolog' => $psikolog->id,
    'id_chatbox' => $chatbox3->id,
    'judul' => 'Kesulitan Berinteraksi Sosial dan Rasa Cemas',
    'keterangan' => 'Saya merasa sangat gugup dan cemas ketika harus bertemu orang baru atau berbicara di depan umum. Saya cenderung menghindari situasi sosial karena takut dinilai negatif oleh orang lain.',
    'balasan' => null,
    'bukti_img' => 8,
    'status' => 'process',
    'created_at' => now()->subDays(3), 'updated_at' => now()->subDays(3)
]);

Messege::insert([
    // Pesan 1: Korban memulai percakapan baru
    [
        'id_chatbox' => $chatbox3->id,
        'id_user' => 5,
        'messege' => 'Malam, Dok. Saya Budi. Saya ingin melanjutkan konsultasi, sepertinya saya punya masalah lain yang ingin saya diskusikan. Saya merasa sulit sekali bergaul.',
        'created_at' => now()->subDays(3)->addHours(1), 'updated_at' => now()->subDays(3)->addHours(1)
    ],
    // Pesan 2: Psikolog merespons
    [
        'id_chatbox' => $chatbox3->id,
        'id_user' => $psikolog->id,
        'messege' => 'Malam, Pak Budi. Tentu, saya senang Anda kembali. Bisa Anda ceritakan lebih lanjut, "sulit bergaul" itu seperti apa yang Anda rasakan?',
        'created_at' => now()->subDays(3)->addHours(2), 'updated_at' => now()->subDays(3)->addHours(2)
    ],
    // Pesan 3: Korban menjelaskan lebih detail
    [
        'id_chatbox' => $chatbox3->id,
        'id_user' => 5,
        'messege' => 'Setiap kali saya di keramaian atau harus bicara dengan orang baru, jantung saya berdebar kencang, keringat dingin, dan pikiran jadi kosong. Akhirnya saya lebih sering diam.',
        'created_at' => now()->subDays(2)->addHours(4), 'updated_at' => now()->subDays(2)->addHours(4)
    ],
    // Pesan 4: Psikolog menggali lebih dalam (sedikit dipersingkat)
    [
        'id_chatbox' => $chatbox3->id,
        'id_user' => $psikolog->id,
        'messege' => 'Terima kasih, Pak Budi. Saya memahami perasaan tidak nyaman itu. Sejak kapan Anda mulai merasakannya? Dan adakah peristiwa pemicu di masa lalu?', // DIPERSINGKAT
        'created_at' => now()->subDays(2)->addHours(6), 'updated_at' => now()->subDays(2)->addHours(6)
    ],
    // Pesan 5: Korban mencoba mengingat pemicunya
    [
        'id_chatbox' => $chatbox3->id,
        'id_user' => 5,
        'messege' => 'Saya kurang yakin, Dok. Tapi sepertinya ini mulai parah sejak saya kuliah. Saya pernah ditertawakan saat presentasi, mungkin itu salah satu penyebabnya.',
        'created_at' => now()->subDay()->addHours(8), 'updated_at' => now()->subDay()->addHours(8)
    ],
    // Pesan 6: Psikolog memberikan validasi dan arahan (DIPERSINGKAT SECARA SIGNIFIKAN)
    [
        'id_chatbox' => $chatbox3->id,
        'id_user' => $psikolog->id,
        'messege' => 'Pengalaman itu memang bisa meninggalkan bekas. Gejala ini mengarah pada kecemasan sosial, yang sering terkait pola pikir "takut dinilai". Di sesi selanjutnya, kita bisa coba identifikasi pikiran otomatis yang muncul. Bagaimana?', // DIPERSINGKAT
        'created_at' => now()->subHours(5), 'updated_at' => now()->subHours(5)
    ],
]);
    }
}
