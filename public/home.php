<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/dist/output.css">
    <title>Home</title>
    <style>
        .container-cuisines::-webkit-scrollbar,
        .container-plans::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="bg-[#F5F5F8] p-5 relative overflow-scroll">
    <h1 class="font-bold text-xl mb-3">Welcome!</h1>
    <div class="mb-3 flex py-1 px-4 border-main-color border-2 rounded-3xl">
        <svg class="w-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path class="fill-slate-500" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"/>
        </svg>
        <input class="w-full bg-transparent placeholder:text-slate-500 focus:outline-none" type="search" placeholder="Search">
    </div>
    <div class="flex bg-white drop-shadow-lg rounded-md mb-5">
        <section class="p-2">
            <h1 class="text-main-color text-sm font-semibold mb-2">Makan sehat bareng keluarga, emang lebih nikmat!</h1>
            <p class="bg-main-color text-white text-xs p-2 rounded-lg">Diskon 35% untuk Family Package!</p>
        </section>

        <section class="">
            <img class="w-full h-full object-fill" src="/img/banner-home.png" alt="">
        </section>
    </div>

    <!-- CUISINES -->
    <div class="mb-3">
        <div class="flex mb-3">
            <h1 class="font-semibold text-lg">Cuisines</h1>
            <a class="ml-auto text-sm text-main-color" href="/public/complete-category.php?jenis=cuisines">See All</a>
        </div>

        <div class="container-cuisines overflow-auto whitespace-nowrap mb-4">
            <div class="bg-[url('../img/western.png')] bg-no-repeat bg-cover w-24 h-24 rounded-md relative overflow-hidden inline-block mr-3">
                <a class="bg-category-color absolute bottom-0 w-full p-1 rounded-md" href="detail-package.php">
                    <p class="text-sm font-semibold">Western</p>
                </a>
            </div>

            <div class="bg-[url('../img/italian.png')] bg-no-repeat bg-cover w-24 h-24 rounded-md relative overflow-hidden inline-block mr-3">
                <div class="bg-category-color absolute bottom-0 w-full p-1 rounded-md">
                    <p class="text-sm font-semibold">Italian</p>
                </div>
            </div>

            <div class="bg-[url('../img/chinese.png')] bg-no-repeat bg-cover w-24 h-24 rounded-md relative overflow-hidden inline-block mr-3">
                <div class="bg-category-color absolute bottom-0 w-full p-1 rounded-md">
                    <p class="text-sm font-semibold">Chinese</p>
                </div>
            </div>

            <div class="bg-[url('../img/korean.png')] bg-no-repeat bg-cover w-24 h-24 rounded-md relative overflow-hidden inline-block mr-3">
                <div class="bg-category-color absolute bottom-0 w-full p-1 rounded-md">
                    <p class="text-sm font-semibold">Korea</p>
                </div>
            </div>
        </div>
    </div>

    <!-- PLANS  -->
    <div class="mb-3">
        <div class="flex">
            <h1 class="font-semibold text-lg">Plans</h1>
            <a class="ml-auto text-sm text-main-color" href="/public/complete-category.php?jenis=plans">See All</a>
        </div>

        <div class="container-plans overflow-auto whitespace-nowrap">
            <div class="bg-[url('../img/trialplan.png')] bg-cover bg-no-repeat w-24 h-24 rounded-md relative overflow-hidden inline-block mr-3">
                <div class="bg-category-color absolute bottom-0 w-full p-1 rounded-md">
                    <p class="text-sm font-semibold">Trial Plan</p>
                </div>
            </div>

            <div class="bg-[url('../img/dietplan.png')] bg-cover bg-no-repeat w-24 h-24 rounded-md relative overflow-hidden inline-block mr-3">
                <div class="bg-category-color absolute bottom-0 w-full p-1 rounded-md">
                    <p class="text-sm font-semibold">Diet Plan</p>
                </div>
            </div>

            <div class="bg-[url('../img/vegetable.png')] bg-cover bg-no-repeat w-24 h-24 rounded-md relative overflow-hidden inline-block mr-3">
                <div class="bg-category-color absolute bottom-0 w-full p-1 rounded-md">
                    <p class="text-sm font-semibold">Vege Plan</p>
                </div>
            </div>

            <div class="bg-[url('../img/1month.png')] bg-cover bg-no-repeat w-24 h-24 rounded-md relative overflow-hidden inline-block mr-3">
                <div class="bg-category-color absolute bottom-0 w-full p-1 rounded-md">
                    <p class="text-sm font-semibold" href="/public/complete-category.php">1 Month Plan</p>
                </div>
            </div>
        </div>
    </div>

    <!-- NEAR ME -->
    <div class="mb-20">
        <div class="flex mb-3">
            <h1 class="font-semibold text-lg">Near Me!</h1>
            <a class="ml-auto text-sm text-main-color" href="/public/complete-category.php?jenis=near">See All</a>
        </div>

        <div class="container-plans overflow-auto whitespace-nowrap">
            <div class="bg-[url('../img/kenyangin.png')] bg-cover bg-no-repeat w-24 h-24 rounded-md relative overflow-hidden inline-block mr-3">
                <div class="bg-category-color absolute bottom-0 w-full p-1 rounded-md">
                    <p class="text-sm font-semibold">Western</p>
                </div>
            </div>

            <div class="bg-[url('../img/laukpauk.png')] bg-cover bg-no-repeat w-24 h-24 rounded-md relative overflow-hidden inline-block mr-3">
                <div class="bg-category-color absolute bottom-0 w-full p-1 rounded-md">
                    <p class="text-sm font-semibold">Western</p>
                </div>
            </div>

            <div class="bg-[url('../img/dietfriend.png')] bg-cover bg-no-repeat w-24 h-24 rounded-md relative overflow-hidden inline-block mr-3">
                <div class="bg-category-color absolute bottom-0 w-full p-1 rounded-md">
                    <p class="text-sm font-semibold">Western</p>
                </div>
            </div>

            <div class="bg-[url('../img/naturefood.png')] bg-cover bg-no-repeat w-24 h-24 rounded-md relative overflow-hidden inline-block mr-3">
                <div class="bg-category-color absolute bottom-0 w-full p-1 rounded-md">
                    <p class="text-sm font-semibold">Western</p>
                </div>
            </div>
        </div>
    </div>

    <!-- MENU NAVIGATION -->
    <div class="bg-main-color fixed bottom-0 left-0 right-0 p-4 flex justify-between">
        <a class="bg-white p-3 rounded-full" href="">
            <svg class="w-5 drop-shadow-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path class="fill-main-color" d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5L575.8 255.5z"/>
            </svg>
        </a >
            
        <a class="p-3 rounded-full" href="myplan.php">
            <svg class="w-5 drop-shadow-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path class="fill-white" d="M0 96C0 60.65 28.65 32 64 32H512C547.3 32 576 60.65 576 96V416C576 451.3 547.3 480 512 480H64C28.65 480 0 451.3 0 416V96zM160 256C160 238.3 145.7 224 128 224C110.3 224 96 238.3 96 256C96 273.7 110.3 288 128 288C145.7 288 160 273.7 160 256zM160 160C160 142.3 145.7 128 128 128C110.3 128 96 142.3 96 160C96 177.7 110.3 192 128 192C145.7 192 160 177.7 160 160zM160 352C160 334.3 145.7 320 128 320C110.3 320 96 334.3 96 352C96 369.7 110.3 384 128 384C145.7 384 160 369.7 160 352zM224 136C210.7 136 200 146.7 200 160C200 173.3 210.7 184 224 184H448C461.3 184 472 173.3 472 160C472 146.7 461.3 136 448 136H224zM224 232C210.7 232 200 242.7 200 256C200 269.3 210.7 280 224 280H448C461.3 280 472 269.3 472 256C472 242.7 461.3 232 448 232H224zM224 328C210.7 328 200 338.7 200 352C200 365.3 210.7 376 224 376H448C461.3 376 472 365.3 472 352C472 338.7 461.3 328 448 328H224z"/>
            </svg>
        </a>

        <a class="p-3 rounded-full" href="order.php">
            <svg class="w-5 drop-shadow-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path class="fill-white" d="M256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C201.7 512 151.2 495 109.7 466.1C95.2 455.1 91.64 436 101.8 421.5C111.9 407 131.8 403.5 146.3 413.6C177.4 435.3 215.2 448 256 448C362 448 448 362 448 256C448 149.1 362 64 256 64C202.1 64 155 85.46 120.2 120.2L151 151C166.1 166.1 155.4 192 134.1 192H24C10.75 192 0 181.3 0 168V57.94C0 36.56 25.85 25.85 40.97 40.97L74.98 74.98C121.3 28.69 185.3 0 255.1 0L256 0zM256 128C269.3 128 280 138.7 280 152V246.1L344.1 311C354.3 320.4 354.3 335.6 344.1 344.1C335.6 354.3 320.4 354.3 311 344.1L239 272.1C234.5 268.5 232 262.4 232 256V152C232 138.7 242.7 128 256 128V128z"/>
            </svg>
        </a>

        <a class="p-3 rounded-full" href="profile.php">
            <svg class="w-5 drop-shadow-lg"v xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path class="fill-white" d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"/>
            </svg>
        </a>
    </div>
</body>
</html>
