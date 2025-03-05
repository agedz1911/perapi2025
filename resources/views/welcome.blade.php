<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Canvas Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .offcanvas {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }
        .offcanvas.show {
            transform: translateX(0);
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Mobile Header -->
    <div class="lg:hidden flex justify-between items-center p-4 bg-white shadow-md sticky top-0 z-50">
        <img alt="Canvas logo" height="50" src="https://storage.googleapis.com/a1aa/image/6YHBtpcLQpDNyp9RF5dZKjs3Q65OXCyRdaHaDzRxnp4.jpg" width="100"/>
        <button id="hamburger" class="text-gray-700 focus:outline-none">
            <i class="fas fa-bars text-2xl"></i>
        </button>
    </div>
    <!-- Offcanvas Menu -->
    <div id="offcanvas-menu" class="fixed top-0 right-0 w-3/4 h-full bg-white p-8 offcanvas lg:hidden z-50">
        <button id="close-menu" class="text-gray-700 focus:outline-none mb-4">
            <i class="fas fa-times text-2xl"></i>
        </button>
        <div class="mb-8">
            <img alt="Canvas logo" height="50" src="https://storage.googleapis.com/a1aa/image/6YHBtpcLQpDNyp9RF5dZKjs3Q65OXCyRdaHaDzRxnp4.jpg" width="100"/>
        </div>
        <nav class="space-y-4">
            <a class="block text-gray-700 hover:text-purple-600" href="#">Home</a>
            <a class="block text-gray-700 hover:text-purple-600" href="#">About</a>
            <a class="block text-gray-700 hover:text-purple-600" href="#">Price</a>
            <a class="block text-gray-700 hover:text-purple-600" href="#">Services</a>
            <a class="block text-gray-700 hover:text-purple-600" href="#">Promotions</a>
            <a class="block text-gray-700 hover:text-purple-600" href="#">Contact</a>
        </nav>
        <div class="mt-8 flex space-x-4">
            <a class="text-red-600" href="#"><i class="fab fa-pinterest"></i></a>
            <a class="text-blue-600" href="#"><i class="fab fa-facebook"></i></a>
            <a class="text-black" href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <div class="flex flex-col lg:flex-row">
        <!-- Sidebar -->
        <div class="w-1/4 bg-white p-8 hidden lg:block sticky top-0 h-screen">
            <div class="mb-8">
                <img alt="Canvas logo" height="50" src="https://storage.googleapis.com/a1aa/image/6YHBtpcLQpDNyp9RF5dZKjs3Q65OXCyRdaHaDzRxnp4.jpg" width="100"/>
            </div>
            <nav class="space-y-4">
                <a class="block text-gray-700 hover:text-purple-600" href="#">Home</a>
                <a class="block text-gray-700 hover:text-purple-600" href="#">About</a>
                <a class="block text-gray-700 hover:text-purple-600" href="#">Price</a>
                <a class="block text-gray-700 hover:text-purple-600" href="#">Services</a>
                <a class="block text-gray-700 hover:text-purple-600" href="#">Promotions</a>
                <a class="block text-gray-700 hover:text-purple-600" href="#">Contact</a>
            </nav>
            <div class="mt-8 flex space-x-4">
                <a class="text-red-600" href="#"><i class="fab fa-pinterest"></i></a>
                <a class="text-blue-600" href="#"><i class="fab fa-facebook"></i></a>
                <a class="text-black" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <!-- Main Content -->
        <div class="w-full lg:w-3/4 p-8">
            <div class="bg-white p-8 shadow-md">
                <h2 class="text-purple-600 text-xl font-bold">Our Services</h2>
                <h1 class="text-3xl font-bold mt-2">What we do?</h1>
                <p class="text-gray-600 mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odio veritatis qui asperiores, quae beatae autem repudiandae praesentium reiciendis illum minus fugiat animi molestiae nobis! Harum atque quod, similique maiores itaque dolorum sequi, expedita. Omnis, ex!
                </p>
                <p class="text-gray-600 mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odio veritatis qui asperiores, quae beatae autem repudiandae praesentium reiciendis illum minus fugiat animi molestiae nobis! Harum atque quod, similique maiores itaque dolorum sequi, expedita. Omnis, ex!
                </p>
                <button class="mt-4 bg-purple-600 text-white py-2 px-4 rounded-full">Price</button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                <div class="space-y-4">
                    <img alt="Makeup tools" height="200" src="https://storage.googleapis.com/a1aa/image/3viWQivhwJf-JoM_3wLmcaogNd79VeKJQbtHqKdelwk.jpg" width="300"/>
                    <img alt="Nail polish" height="200" src="https://storage.googleapis.com/a1aa/image/kGKBurBD6o3sjlt2c0ZHuM1OdkH5lmDWFcNal5JneYE.jpg" width="300"/>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <p>Assertively Fabricate.</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <p>Distinctively disseminate.</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <p>Appropriately predominate.</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <p>Assertively Fabricate.</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <p>Distinctively disseminate.</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <p>Assertively Fabricate.</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <p>Distinctively disseminate.</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <p>Authoritatively scale Web.</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-8">
                <div class="relative">
                    <img alt="Hair Styling" height="200" src="https://storage.googleapis.com/a1aa/image/U6BHHu_VPUMQvq4Jr9mTLP8u-aWGK_DIZZr7n43WE_Y.jpg" width="300"/>
                    <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-4 w-full">
                        <p>Hair Styling</p>
                    </div>
                </div>
                <div class="relative">
                    <img alt="Makeup" height="200" src="https://storage.googleapis.com/a1aa/image/8m1aoSimP54lGJUIZcehJiEQmnNfuDccw8HH4wQQTjA.jpg" width="300"/>
                    <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-4 w-full">
                        <p>Makeup</p>
                    </div>
                </div>
                <div class="relative">
                    <img alt="Nail Art" height="200" src="https://storage.googleapis.com/a1aa/image/HzbI_6_lZlFVS_ofqgysFXPUzXZLvXBlFgsdDgoQDz8.jpg" width="300"/>
                    <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-4 w-full">
                        <p>Nail Art</p>
                    </div>
                </div>
                <div class="relative">
                    <img alt="Spa &amp; Scrub" height="200" src="https://storage.googleapis.com/a1aa/image/KlEiW5pEg0wSxZYjBqJaoYIvbLZUN5mzXF8RZwhfjfU.jpg" width="300"/>
                    <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-4 w-full">
                        <p>Spa &amp; Scrub</p>
                    </div>
                </div>
            </div>
            <div class="bg-purple-700 text-white p-8 mt-8">
                <h2 class="text-2xl font-bold">Featured Pricing</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-4">
                    <div>
                        <div class="flex justify-between border-b border-purple-500 py-2">
                            <p>Hair Cut &amp; Blowdry</p>
                            <p>$13</p>
                        </div>
                        <div class="flex justify-between border-b border-purple-500 py-2">
                            <p>Hair Color Service</p>
                            <p>$15</p>
                        </div>
                        <div class="flex justify-between border-b border-purple-500 py-2">
                            <p>Bridal makeup</p>
                            <p>$23</p>
                        </div>
                        <div class="flex justify-between border-b border-purple-500 py-2">
                            <p>Full Body Relaxation</p>
                            <p>$59</p>
                        </div>
                        <div class="flex justify-between border-b border-purple-500 py-2">
                            <p>Nails Art</p>
                            <p>$09</p>
                        </div>
                        <div class="flex justify-between border-b border-purple-500 py-2">
                            <p>Party MakeUp</p>
                            <p>$11</p>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">View Full Menu</h3>
                        <p class="mt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aspernatur laboriosam consequatur incidunt quod excepturi dignissimos illum, aut, doloremque, possimus suscipit, unde sapiente.
                        </p>
                        <img alt="Menu images" class="mt-4" height="200" src="https://storage.googleapis.com/a1aa/image/usuhA-N-Ke11L2CF5hQa8kcWPIVNqtzL8F6sCpTwiKc.jpg" width="300"/>
                        <p class="mt-2 text-sm">* Members will get more 10% Off!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('hamburger').addEventListener('click', function () {
            document.getElementById('offcanvas-menu').classList.add('show');
        });

        document.getElementById('close-menu').addEventListener('click', function () {
            document.getElementById('offcanvas-menu').classList.remove('show');
        });
    </script>
</body>
</html>