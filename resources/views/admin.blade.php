<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    
</head>
<body>

    <div class="container__dahboard flex ">
        {{-- Sidebar --}}
        <div class="sidebar__div h-screen w-2/12 text-white">
            {{-- logo --}}
            <div class="p-4 ">
                <img src="{{ asset('images/goldenabclogowhite.png') }}" class="h-12" alt="" srcset="">
            </div>
            {{-- Categories --}}
            <div class="categories__container ">
                <div class="flex space-x-2 text-gray-200 hover:text-gray-500 transition ease-out duration-300  py-4 px-8"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                  </svg><span class="sidebar__links">Dashboard</span></div>
                <div class="flex space-x-2 text-gray-200 hover:text-gray-500 transition ease-out duration-300  py-4 px-8"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg><span class="sidebar__links">Monitoring</span></div>
                <div class="flex space-x-2 text-gray-200 hover:text-gray-500 transition ease-out duration-300 py-4 px-8"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                  </svg><span class="sidebar__links">Transactions</span></div>
                <div class="flex space-x-2 text-gray-200 hover:text-gray-500 transition ease-out duration-300 py-4 px-8"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                  </svg><span class="sidebar__links">Counters</span></div>
                <div class="flex space-x-2 text-gray-200 hover:text-gray-500 transition ease-out duration-300 py-4 px-8"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg><span class="sidebar__links">Users</span></div>
                <div class="flex space-x-2 text-gray-200 hover:text-gray-500 transition ease-out duration-300 py-4 px-8"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                  </svg><span class="sidebar__links">Media</span></div>
            </div>

        
        
        </div>

        {{-- Main Content --}}
        <div class="container__main_content h-screen w-10/12">
            {{-- Header --}}
            <div class="container__header bg-white h-16 flex flex-wrap justify-end  ">
          
              <div class=" px-4 py-1 w-64">
                <div class="flex justify-end content-center">
                  <img src="{{ asset('images/kristijan-arsov-oaqYs49eyyU-unsplash.jpg') }}" class="cursor-pointer avatar h-14 w-14 rounded-full border shadow-sm object-cover " alt="" srcset="">
                </div>
                <div class="flex flex-col my-2 text-white border-2 hidden dropdown__links shadow-lg">
                  <a href="#" class=" hover:text-gray-500 py-2 px-4">Account</a>
                  <a href="#" class=" hover:text-gray-500 py-2 px-4">Settings</a>
                  <a href="#" class=" hover:text-gray-500 py-2 px-4">Log out</a>
                </div>
              </div>


           
              
            </div>

            {{-- Table Content --}}



        </div>
    </div>
    

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>