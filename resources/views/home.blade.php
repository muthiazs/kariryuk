<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KarirYuk - Home</title>
    @vite('resources/css/app.css') {{-- pastikan Tailwind aktif di project-mu --}}
</head>
<body class="bg-gray-50 font-sans">

    {{-- Navbar --}}
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center py-4">
            <div class="text-2xl font-bold text-blue-900">karir<span class="text-lime-400">Yuk</span></div>
            <div class="hidden md:flex space-x-6 text-gray-600">
                <a href="#">Home</a>
                <a href="#">Categories</a>
                <a href="#">Find Jobs</a>
                <a href="#">Post Jobs</a>
                <a href="#">Apply</a>
                <a href="#">About</a>
            </div>
            <div class="flex space-x-2">
                <a href="#" class="border border-blue-900 text-lime-400 bg-blue-900 font-bold px-4 py-2 rounded">Sign Up</a>
                <a href="#" class="border border-blue-900 text-blue-900 font-bold px-4 py-2 rounded">Login</a>
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center py-12">
        <div class="flex-1">
            <h1 class="text-3xl font-bold mb-4">Cari kerja, dan bangun karir mu dari sini!</h1>
            <p class="mb-6 text-gray-700">Hai! Mencari pekerjaan yang sesuai dengan keinginan mu? Mulai di karirYuk!</p>

            <div class="flex space-x-2 mb-4">
                <input type="text" placeholder="Job Title or Keyword" class="border p-2 rounded w-1/2">
                <select class="border p-2 rounded w-1/4">
                    <option>City or State</option>
                </select>
                <button class="border border-blue-900 text-lime-400 bg-blue-900 font-bold px-4 py-2 rounded">Search</button>
            </div>

            <div class="flex flex-wrap gap-2">
                @foreach (['Graphic Designer', 'Front End Developer', 'Data Analyst', 'Accountant', 'Photographer', 'Full Stack Developer', 'Senior Lecturer', 'UX Designer'] as $job)
                    <span class="bg-gray-200 px-3 py-1 rounded text-sm">{{ $job }}</span>
                @endforeach
            </div>
        </div>
        <div class="flex-1 mt-8 md:mt-0">
            <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg" alt="Office" class="rounded-lg shadow-lg">
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
                        <img src="https://via.placeholder.com/40" alt="Company Logo" class="rounded-full">
                        <div>
                            <h3 class="font-bold">Company {{ $i }}</h3>
                            <p class="text-sm text-gray-500">Maryland, USA</p>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold mb-2">Job Title {{ $i }}</h4>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Full Time</span>
                        <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Technology</span>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Remote</span>
                    </div>
                    <div class="flex justify-between">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded">Apply</button>
                        <button class="border border-blue-600 text-blue-600 px-4 py-2 rounded">Read More</button>
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
                Find More Jobs
            </button>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-white py-8 border-t">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-4 gap-6 text-gray-600 text-sm">
            <div>
                <h3 class="font-bold mb-4">Job Hunt</h3>
                <p>The best platform to rewrite your life story. It all begins here!</p>
                <div class="flex space-x-2 mt-4">
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" class="w-5" alt="FB"></a>
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" class="w-5" alt="Twitter"></a>
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" class="w-5" alt="Instagram"></a>
                </div>
            </div>
            <div>
                <h4 class="font-bold mb-2">Company</h4>
                <ul class="space-y-2">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-2">Information</h4>
                <ul class="space-y-2">
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Press Kit</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-2">Legal</h4>
                <ul class="space-y-2">
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">License Agreement</a></li>
                    <li><a href="#">Cookies Policy</a></li>
                    <li><a href="#">Copyright</a></li>
                </ul>
            </div>
        </div>

        <div class="text-center text-gray-400 text-xs mt-6">
            © 2025 karirYuk. All rights reserved.
        </div>
    </footer>

</body>
</html>
