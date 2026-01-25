<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Studio | TEE KICKS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; }
        h1, h2 { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-[white] text-gray-900">

    <!-- Minimalist Navigation -->
    <nav class="flex justify-between items-center px-12 py-8 bg-white border-b">
        <div class="text-xs tracking-[0.4em] font-light">EST. 2024</div>
        <div class="text-3xl font-bold tracking-tighter uppercase italic">TEE KICKS</div>
        <div class="flex space-x-8 items-center font-light text-sm">
            <a href="#" class="hover:underline">BRANDS</a>
            <a href="#" class="hover:underline">NEW ARRIVALS</a>
            <div class="relative">
                <i class="fa-solid fa-bag-shopping text-xl"></i>
                <span class="absolute -top-2 -right-2 bg-black text-white text-[10px] w-4 h-4 rounded-full flex items-center justify-center">2</span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative h-[70vh] flex items-center bg-[#f3f3f3] overflow-hidden">
        <div class="container mx-auto px-12 z-10">
            <span class="text-sm tracking-widest uppercase mb-4 block">Summer Collection</span>
            <h1 class="text-7xl font-bold max-w-lg leading-tight mb-8">The Icon of Modern <br><span class="italic font-light">Speed</span></h1>
            <a href="#" class="bg-black text-white px-10 py-4 text-sm font-bold tracking-widest hover:bg-gray-800 transition">EXPLORE NOW</a>
        </div>
        <!-- Absolute Background Product (Sneaker image here) -->
        <div class="absolute right-0 top-0 h-full w-1/2 bg-[url('https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80')] bg-cover bg-center"></div>
    </section>

    <!-- Filter & Categories Bar -->
    <div class="px-12 py-10 flex justify-between items-center">
        <div class="flex space-x-6 text-sm font-semibold tracking-wider">
            <button class="border-b-2 border-black">ALL SNEAKERS</button>
            <button class="text-gray-400 hover:text-black">LIFESTYLE</button>
            <button class="text-gray-400 hover:text-black">PERFORMANCE</button>
            <button class="text-gray-400 hover:text-black">RETRO</button>
        </div>
        <div class="text-sm font-light uppercase tracking-widest">
            Showing 45 Pairs
        </div>
    </div>

    <!-- Product Grid -->


    <!-- Footer -->
    <footer class="bg-black text-white py-20 px-12">
        <div class="grid grid-cols-4 gap-12">
            <div class="col-span-1">
                <h4 class="text-lg font-bold mb-6 italic uppercase">Sneaker Elite</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Curating the world's most sought-after silhouettes for the discerning collector.</p>
            </div>
            <!-- More footer links can go here... -->
        </div>
    </footer>

</body>
</html>