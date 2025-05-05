<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI UX Designer Intern - karirYuk</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-sans">

    {{-- Navbar --}}
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center py-4">
            <div class="text-2xl font-bold text-blue-900">karir<span class="text-lime-400">Yuk</span></div>
            <div class="hidden md:flex space-x-6 text-gray-600">
                <a href="#">Beranda</a>
                <a href="#">Kategori</a>
                <a href="#">Cari Lowongan</a>
                <a href="#">Pasang Lowongan</a>
                <a href="#">Lamar</a>
                <a href="#">Tentang Kami</a>
            </div>
            <div class="flex space-x-2">
                <a href="#" class="border border-blue-900 text-lime-400 bg-blue-900 font-bold px-4 py-2 rounded">Daftar</a>
                <a href="#" class="border border-blue-900 text-blue-900 font-bold px-4 py-2 rounded">Masuk</a>
            </div>
        </div>
    </nav>

    {{-- Breadcrumb --}}
    <div class="bg-gray-100 py-2">
        <div class="max-w-7xl mx-auto px-4">
            <p class="text-sm text-gray-600">
                <a href="#" class="hover:text-blue-900">Lowongan</a> / Detail Pekerjaan
            </p>
        </div>
    </div>

    {{-- Main Content --}}
    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            {{-- Job Header --}}
            <h1 class="text-3xl font-bold mb-2">UI UX Designer Intern</h1>
            <div class="text-xl mb-4">PT. Winnicode Garuda Teknologi</div>

            {{-- Job Tags --}}
            <div class="flex flex-wrap gap-2 mb-6">
                <span class="bg-yellow-200 text-yellow-800 px-3 py-1 rounded text-sm">Part Time</span>
                <span class="bg-blue-200 text-blue-800 px-3 py-1 rounded text-sm">Technology</span>
                <span class="bg-green-200 text-green-800 px-3 py-1 rounded text-sm">Remote</span>
            </div>

            {{-- Action Buttons --}}
            <div class="flex flex-wrap gap-3 mb-8">
                <a href="#" class="bg-blue-900 text-white px-6 py-3 rounded-md font-bold hover:bg-blue-800">Lamar</a>
                <a href="#" class="bg-gray-200 text-gray-800 px-6 py-3 rounded-md font-bold hover:bg-gray-300">Simpan</a>
                <a href="#" class="bg-green-100 text-green-800 px-6 py-3 rounded-md font-bold hover:bg-green-200">Bagikan</a>
            </div>

            {{-- Job Description --}}
            <div class="mb-8">
                <h2 class="text-2xl font-bold mb-4">Deskripsi Pekerjaan</h2>
                <div class="text-gray-700 space-y-4">
                    <p>UI/UX Designer Intern di PT Winnicode Garuda Teknologi akan mendapatkan pengalaman langsung dalam merancang antarmuka yang intuitif dan pengalaman pengguna yang optimal untuk berbagai produk digital perusahaan. Selama program ini, peserta magang akan:</p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Berkontribusi dalam proses riset pengguna untuk memahami kebutuhan dan preferensi mereka.</li>
                        <li>Membantu dalam pembuatan wireframe, prototipe, dan desain UI menggunakan tools seperti Figma atau Adobe XD.</li>
                        <li>Bekerja sama dengan tim pengembang untuk menerjemahkan desain ke dalam produk yang fungsional.</li>
                        <li>Mengikuti design review dan melakukan iterasi berdasarkan feedback dari tim dan pengguna.</li>
                        <li>Menjalankan prinsip desain yang berfokus pada user experience serta accessibility.</li>
                        <li>Mempelajari dan menerapkan tren terbaru dalam UI/UX design.</li>
                    </ul>
                </div>
            </div>

            {{-- Requirements --}}
            <div class="mb-8">
                <h2 class="text-2xl font-bold mb-4">Persyaratan</h2>
                <div class="text-gray-700">
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Mahasiswa S1 yang sedang menempuh semester 4–6 dengan IPK minimal 3.00.</li>
                        <li>Memiliki pengalaman dalam desain UI/UX, baik dari project pribadi, organisasi, atau magang sebelumnya.</li>
                        <li>Menguasai tools desain seperti Figma, Adobe XD, atau Sketch.</li>
                        <li>Memahami prinsip dasar desain antarmuka dan user experience.</li>
                        <li>Mampu bekerja dalam tim serta memiliki komunikasi yang baik.</li>
                        <li>Memiliki kreativitas tinggi serta perhatian terhadap detail.</li>
                        <li>Berkomitmen menjalani program magang selama Juni – November 2025.</li>
                    </ul>
                </div>
            </div>

            {{-- Company Info --}}
            <div class="mb-8">
                <h2 class="text-2xl font-bold mb-4">Tentang Perusahaan</h2>
                <div class="flex items-start space-x-4">
                    <div class="bg-gray-200 rounded-lg p-4 w-16 h-16 flex items-center justify-center">
                        <span class="text-lg font-bold">PT</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">PT. Winnicode Garuda Teknologi</h3>
                        <p class="text-gray-600 mt-2">Perusahaan teknologi yang berfokus pada pengembangan solusi digital dan produk berbasis web. Dengan tim yang inovatif, kami berkomitmen menciptakan pengalaman digital terbaik bagi pengguna.</p>
                        <div class="mt-4">
                            <a href="#" class="text-blue-600 hover:underline">Kunjungi Website Perusahaan</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Similar Jobs --}}
            <div>
                <h2 class="text-2xl font-bold mb-4">Lowongan Serupa</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="border rounded-lg p-4 hover:shadow-md transition">
                        <h3 class="font-bold text-lg">Graphic Designer Intern</h3>
                        <p class="text-gray-600">PT. Kreasi Media Digital</p>
                        <div class="flex gap-2 my-2">
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-md text-xs">Part Time</span>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Design</span>
                        </div>
                        <a href="#" class="text-blue-600 text-sm hover:underline">Lihat Detail</a>
                    </div>
                    <div class="border rounded-lg p-4 hover:shadow-md transition">
                        <h3 class="font-bold text-lg">Front-End Developer Intern</h3>
                        <p class="text-gray-600">PT. Solusi Digital Indonesia</p>
                        <div class="flex gap-2 my-2">
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded-md text-xs">Full Time</span>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Technology</span>
                        </div>
                        <a href="#" class="text-blue-600 text-sm hover:underline">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
</body>
</html>