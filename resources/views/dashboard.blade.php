<x-app-layout>
     {{-- Hero Section --}}
    <section class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center py-12">
        <div class="flex-1">
            <h1 class="text-3xl font-bold mb-4">Cari kerja, dan bangun karir mu dari sini!</h1>
            <p class="mb-6 text-gray-700">Hai! Mencari pekerjaan yang sesuai dengan keinginan mu? Mulai di karirYuk!</p>

            <div class="flex space-x-2 mb-4">
                <input type="text" placeholder="Judul Pekerjaan atau Kata Kunci" class="border p-2 rounded w-1/2">
                <select class="border p-2 rounded w-1/4">
                    <option>Kota atau Provinsi</option>
                </select>
                <button class="border border-blue-900 text-lime-400 bg-blue-900 font-bold px-4 py-2 rounded">Cari</button>
            </div>

            <div class="flex flex-wrap gap-2">
                @foreach (['Desainer Grafis', 'Pengembang Front End', 'Analis Data', 'Akuntan', 'Fotografer', 'Pengembang Full Stack', 'Dosen Senior', 'Desainer UX'] as $job)
                    <span class="bg-gray-200 px-3 py-1 rounded text-sm">{{ $job }}</span>
                @endforeach
            </div>
        </div>
        <div class="flex-1 mt-8 md:mt-0">
            <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg" alt="Kantor" class="rounded-lg shadow-lg">
        </div>
    </section>

    {{-- 3 Steps --}}
    <section class="bg-blue-100 py-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold mb-8">Dapatkan pekerjaan impian mu dengan 3 langkah!</h2>
            <div class="flex flex-col md:flex-row justify-center gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-blue-900 text-xl font-bold mb-2">1</h3>
                    <p>Membuat akun</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-blue-900 text-xl font-bold mb-2">2</h3>
                    <p>Unggah CV mu!</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-blue-900 text-xl font-bold mb-2">3</h3>
                    <p>Lamar Pekerjaan!</p>
                </div>
            </div>
        </div>
    </section>


    {{-- Lowongan Kerja --}}
    <section class="py-12 max-w-7xl mx-auto px-4">
        <h2 class="text-2xl font-bold mb-8 text-center">Lowongan Kerja</h2>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach (range(1, 6) as $i)
                <div class="bg-white p-6 rounded-lg shadow-md relative">
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="https://via.placeholder.com/40" alt="Logo Perusahaan" class="rounded-full">
                        <div>
                            <h3 class="font-bold">Perusahaan {{ $i }}</h3>
                            <p class="text-sm text-gray-500">Jakarta, Indonesia</p>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold mb-2">Posisi Pekerjaan {{ $i }}</h4>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Penuh Waktu</span>
                        <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Teknologi</span>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Remote</span>
                    </div>
                    <div class="flex justify-between">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded">Lamar</button>
                        <button class="border border-blue-600 text-blue-600 px-4 py-2 rounded">Baca Selengkapnya</button>
                    </div>
                    <button class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </button>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <button class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">
                Temukan Lebih Banyak Lowongan
            </button>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-white py-8 border-t">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-4 gap-6 text-gray-600 text-sm">
            <div>
                <h3 class="font-bold mb-4">Mencari Kerja</h3>
                <p>Platform terbaik untuk menulis ulang kisah hidup Anda. Semua dimulai dari sini!</p>
                <div class="flex space-x-2 mt-4">
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" class="w-5" alt="FB"></a>
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" class="w-5" alt="Twitter"></a>
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" class="w-5" alt="Instagram"></a>
                </div>
            </div>
            <div>
                <h4 class="font-bold mb-2">Perusahaan</h4>
                <ul class="space-y-2">
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Karir</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Dukungan</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-2">Informasi</h4>
                <ul class="space-y-2">
                    <li><a href="#">Harga</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Kit Media</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-2">Legal</h4>
                <ul class="space-y-2">
                    <li><a href="#">Syarat dan Ketentuan</a></li>
                    <li><a href="#">Perjanjian Lisensi</a></li>
                    <li><a href="#">Kebijakan Cookie</a></li>
                    <li><a href="#">Hak Cipta</a></li>
                </ul>
            </div>
        </div>

        <div class="text-center text-gray-400 text-xs mt-6">
            © 2025 karirYuk. Seluruh hak cipta dilindungi.
        </div>
    </footer>
</x-app-layout>
