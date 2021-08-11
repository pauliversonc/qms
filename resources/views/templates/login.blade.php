<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QMS</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="text-base">
    <div class="flex ">
        {{-- Image Left --}}
        <div class="w-7/12 h-screen ">
            <img src="{{ asset('images/mitchell-luo-istYOcfaY6U-unsplash.jpg') }}" class="h-screen object-cover w-full object-top" alt="" srcset="">
        </div>

        {{-- Login form right --}}
        <div class="w-5/12">
            <div class=" p-8 border border-red-600 mt-20 flex justify-center ">
                <img src="{{ asset('images/goldenabclogoblack.png') }}" class="w-1/2" alt="" srcset="">
            </div>

            {{-- Forms --}}
            <div class="border border-green-600">
                <p class="flex justify-center p-8 login__message text-lg">Welcome to The QMS</p>

                <div class="flex flex-col px-40 py-10 border border-yellow-800">
                    <span>Username or Email</span>
                    <input type="text" name="" class="border-b-2 border-gray-300 px-3 py-3 text-lg focus:outline-none focus:border-black transition ease-in duration-300" id="">
                </div>
                <div class="flex flex-col px-40 py-10 border border-blue-800">
                    <span>Password</span>
                    <input type="password" class="border-b-2 border-black px-3 py-3 text-lg " name="" id="">
                </div>

                <div class="flex justify-center p-8">
                    <input type="submit" name=""  class="bg-black text-white py-4 px-20" value="Sign in" id="">
                </div>



            </div>
        </div>
      </div>
</body>
</html>