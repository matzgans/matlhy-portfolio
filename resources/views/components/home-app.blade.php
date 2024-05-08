<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
    <style>
        /* Posisikan loader di tengah layar */
        .spinner-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.5);
            /* Latar belakang transparan putih */
            z-index: 9999;
        }

        .spinner {
            width: 70.4px;
            height: 70.4px;
            --clr: rgb(247, 197, 159);
            --clr-alpha: rgb(247, 197, 159, .1);
            animation: spinner 1.6s infinite ease;
            transform-style: preserve-3d;
        }

        .spinner>div {
            background-color: var(--clr-alpha);
            height: 100%;
            position: absolute;
            width: 100%;
            border: 3.5px solid var(--clr);
        }

        .spinner div:nth-of-type(1) {
            transform: translateZ(-35.2px) rotateY(180deg);
        }

        .spinner div:nth-of-type(2) {
            transform: rotateY(-270deg) translateX(50%);
            transform-origin: top right;
        }

        .spinner div:nth-of-type(3) {
            transform: rotateY(270deg) translateX(-50%);
            transform-origin: center left;
        }

        .spinner div:nth-of-type(4) {
            transform: rotateX(90deg) translateY(-50%);
            transform-origin: top center;
        }

        .spinner div:nth-of-type(5) {
            transform: rotateX(-90deg) translateY(50%);
            transform-origin: bottom center;
        }

        .spinner div:nth-of-type(6) {
            transform: translateZ(35.2px);
        }

        @keyframes spinner {
            0% {
                transform: rotate(45deg) rotateX(-25deg) rotateY(25deg);
            }

            50% {
                transform: rotate(45deg) rotateX(-385deg) rotateY(25deg);
            }

            100% {
                transform: rotate(45deg) rotateX(-385deg) rotateY(385deg);
            }
        }
    </style>
</head>

<body class="h-full">
    <div class="spinner-wrapper" id="spinner-wrapper">
        <div class="spinner">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="min-h-full">
        <x-navbar.nav />

        @isset($heading)
            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
                </div>
            </header>
        @endisset
        <main>
            <div class="mx-auto max-w-full">
                {{ $slot }}
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


    <script>
        $(window).on('load', function() {
            $("#spinner-wrapper").fadeIn("slow");

            // Setelah 4 detik, sembunyikan loader
            setTimeout(function() {
                $("#spinner-wrapper").fadeOut("slow");
            }, 2000); // 4000 milidetik = 4 detik
        });
    </script>
</body>

</html>
