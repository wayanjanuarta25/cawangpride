<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubSubJenis;

class SubSubJenisSeeder extends Seeder
{
    public function run()
    {
        SubSubJenis::insert([
            ['sub_jenis_id' => 1, 'nama' => 'Radio VHF'],
            ['sub_jenis_id' => 1, 'nama' => 'Radio HF'],
            ['sub_jenis_id' => 1, 'nama' => 'Radio UHF'],
            ['sub_jenis_id' => 2, 'nama' => 'Kabel'],
            ['sub_jenis_id' => 2, 'nama' => 'Nirkabel'],
            ['sub_jenis_id' => 3, 'nama' => 'Very Small Aperture Terminal (VSAT)'],
            ['sub_jenis_id' => 3, 'nama' => 'Handphone Satelit'],
            ['sub_jenis_id' => 3, 'nama' => 'HT Satelit'],
            ['sub_jenis_id' => 4, 'nama' => 'Perekam Gambar dan Suara'],
            ['sub_jenis_id' => 4, 'nama' => 'Website dan Database'],
            ['sub_jenis_id' => 4, 'nama' => 'Media Sosial'],
            ['sub_jenis_id' => 4, 'nama' => 'Aplikasi Berita'],
            ['sub_jenis_id' => 4, 'nama' => 'Perangkat Lunak Pengolah Kata, Audio dan Video'],
            ['sub_jenis_id' => 4, 'nama' => 'Videotron'],
            ['sub_jenis_id' => 5, 'nama' => 'Alat Deteksi Pemancar Radio Mini'],
            ['sub_jenis_id' => 5, 'nama' => 'Alat Deteksi Kamera Video (Video Camera Detector)'],
            ['sub_jenis_id' => 5, 'nama' => 'Alat Deteksi Telepon Selular (Cellular Phone Detector)'],
            ['sub_jenis_id' => 5, 'nama' => 'Alat Deteksi GPS (GPS Tracker Detector)'],
            ['sub_jenis_id' => 5, 'nama' => 'Alat Deteksi Semikonduktor'],
            ['sub_jenis_id' => 5, 'nama' => 'Alat Deteksi Logam'],
            ['sub_jenis_id' => 5, 'nama' => 'Alat Deteksi Kebohongan (Lie Detector)'],
            ['sub_jenis_id' => 5, 'nama' => 'Alat Deteksi Korosif'],
            ['sub_jenis_id' => 5, 'nama' => 'Alat Deteksi Wifi'],
            ['sub_jenis_id' => 5, 'nama' => 'Alat Deteksi Wajah (Face Recognition)'],
            ['sub_jenis_id' => 5, 'nama' => 'Alat Deteksi Gelombang Elektromagnetik (GEM)'],
            ['sub_jenis_id' => 5, 'nama' => 'Alat Deteksi Kecepatan (Angin, Arus Air, Suara)'],
            ['sub_jenis_id' => 5, 'nama' => 'Alat Deteksi Pada Gangguan Jaringan Kabel'],
            ['sub_jenis_id' => 5, 'nama' => 'Alat Deteksi Lokasi (DF Radio, DF GSM, GPS Tracking, Checkpost)'],
            ['sub_jenis_id' => 5, 'nama' => 'Alat Deteksi Panas (Thermal)'],
            ['sub_jenis_id' => 5, 'nama' => 'Alat Deteksi Lensa Kamera'],
            ['sub_jenis_id' => 6, 'nama' => 'Alat Sadap Suara (Voice Intercept)'],
            ['sub_jenis_id' => 6, 'nama' => 'Alat Sadap Radio Komunikasi (Multiband Radio Monitoring/Intercept)'],
            ['sub_jenis_id' => 6, 'nama' => 'Alat Sadap Telepon (Phone Tapping Device, GSM Intercept)'],
            ['sub_jenis_id' => 6, 'nama' => 'Alat Sadap Faksimile (Faximile Intercept)'],
            ['sub_jenis_id' => 6, 'nama' => 'Alat Sadap Video (Video Camera Intercept)'],
            ['sub_jenis_id' => 6, 'nama' => 'Alat Sadap Satelit (Satelite Intercept)'],
            ['sub_jenis_id' => 7, 'nama' => 'Alat Sterilisasi (Anti Bug)'],
            ['sub_jenis_id' => 7, 'nama' => 'Pengacak Frekuensi (Jammer)'],
            ['sub_jenis_id' => 7, 'nama' => 'Pengacak Audio'],
            ['sub_jenis_id' => 7, 'nama' => 'Transmisi (Sistem Enkripsi, Frequency Hopping, Electromagnetic Hardening, Emosional Control)'],
            ['sub_jenis_id' => 7, 'nama' => 'Kamera Monitor (CCTV)'],
            ['sub_jenis_id' => 7, 'nama' => 'Anti Drone'],
            ['sub_jenis_id' => 7, 'nama' => 'Sistem Alarm'],
            ['sub_jenis_id' => 7, 'nama' => 'Alat Pemindai X-Ray'],
            ['sub_jenis_id' => 7, 'nama' => 'Alat Pemindai Wajah, Retina, Sidik Jari (Biometric)'],
        ]);
    }
}
