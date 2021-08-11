<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monitoring</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

    {{-- Main Container --}}
    <div class="h-screen w-screen main__container" style="background-image:url({{ asset('images/brian-patrick-tagalog-_8hGFBxWD0A-unsplash.jpg') }})">
        {{-- Header --}}
        <div class="header__nav py-10 px-10 w-screen flex content-center justify-between flex-wrap">
            <div>
                <img src="{{ asset('images/goldenabclogowhite.png') }}" alt="" class="h-20" srcset="">
            </div>
            <div class=" text-6xl text-white date__time " >
                <div>07:39:57 AM</div>
                <div class="text-2xl ">Wednesday, September 9, 2021</div>
            </div>
        </div>

        {{-- Main Content --}}
        <div class="flex px-5 ">
            <div class="w-7/12 pr-4 flex content-center flex-wrap">
                <video width="" height="" controls loop class="card__container">
                    <source src="{{ asset('videos/Pexels Videos 2128546.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="w-5/12  ">
                <div class="grid grid-cols-2 gap-4">

                    {{-- Card --}}
                    <div class="bg-black text-white bg-opacity-80 card__container ">
                        <div class="flex py-4">
                            <div class="text-8xl  text-white ticket__card px-2 items-stretch">017</div>
                            <div class="text-4xl  flex content-center flex-wrap px-2">LTOR-123456</div>
                        </div>
                        <p class="bg-white text-black bg-opacity-90 text-center ticket__card text-2xl tracking-widest ">GO TO COUNTER 1</p>
                    </div>

                    <div class="bg-black text-white bg-opacity-80 card__container ">
                        <div class="flex py-4">
                            <div class="text-8xl  text-white ticket__card px-2 items-stretch">017</div>
                            <div class="text-4xl  flex content-center flex-wrap px-2">LTOR-123456</div>
                        </div>
                        <p class="bg-white text-black bg-opacity-90 text-center ticket__card text-2xl tracking-widest ">GO TO COUNTER 1</p>
                    </div>

                    <div class="bg-black text-white bg-opacity-80 card__container ">
                        <div class="flex py-4">
                            <div class="text-8xl  text-white ticket__card px-2 items-stretch">017</div>
                            <div class="text-4xl  flex content-center flex-wrap px-2">LTOR-123456</div>
                        </div>
                        <p class="bg-white text-black bg-opacity-90 text-center ticket__card text-2xl tracking-widest ">GO TO COUNTER 1</p>
                    </div>

                    <div class="bg-black text-white bg-opacity-80 card__container ">
                        <div class="flex py-4">
                            <div class="text-8xl  text-white ticket__card px-2 items-stretch">017</div>
                            <div class="text-4xl  flex content-center flex-wrap px-2">LTOR-123456</div>
                        </div>
                        <p class="bg-white text-black bg-opacity-90 text-center ticket__card text-2xl tracking-widest ">GO TO COUNTER 1</p>
                    </div>

                    <div class="bg-black text-white bg-opacity-80 card__container ">
                        <div class="flex py-4">
                            <div class="text-8xl  text-white ticket__card px-2 items-stretch">017</div>
                            <div class="text-4xl  flex content-center flex-wrap px-2">LTOR-123456</div>
                        </div>
                        <p class="bg-white text-black bg-opacity-90 text-center ticket__card text-2xl tracking-widest ">GO TO COUNTER 1</p>
                    </div>

                    <div class="bg-black text-white bg-opacity-80 card__container ">
                        <div class="flex py-4">
                            <div class="text-8xl  text-white ticket__card px-2 items-stretch">017</div>
                            <div class="text-4xl  flex content-center flex-wrap px-2">LTOR-123456</div>
                        </div>
                        <p class="bg-white text-black bg-opacity-90 text-center ticket__card text-2xl tracking-widest ">GO TO COUNTER 1</p>
                    </div>

                    <div class="bg-black text-white bg-opacity-80 card__container ">
                        <div class="flex py-4">
                            <div class="text-8xl  text-white ticket__card px-2 items-stretch">017</div>
                            <div class="text-4xl  flex content-center flex-wrap px-2">LTOR-123456</div>
                        </div>
                        <p class="bg-white text-black bg-opacity-90 text-center ticket__card text-2xl tracking-widest ">GO TO COUNTER 1</p>
                    </div>

                    <div class="bg-black text-white bg-opacity-80 card__container ">
                        <div class="flex py-4">
                            <div class="text-8xl  text-white ticket__card px-2 items-stretch">017</div>
                            <div class="text-4xl  flex content-center flex-wrap px-2">LTOR-123456</div>
                        </div>
                        <p class="bg-white text-black bg-opacity-90 text-center ticket__card text-2xl tracking-widest ">GO TO COUNTER 1</p>
                    </div>


                    







                  
                  </div>
            </div>


        </div>
    </div>
    
</body>
</html>