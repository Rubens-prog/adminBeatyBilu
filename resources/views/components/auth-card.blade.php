<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-green-100">
    <div>
        {{ $logo }}
    </div>

    <div style="border-radius: 15px;" class="w-full sm:max-w-md mt-6 px-6 py-4 bg-black shadow-md overflow-hidden ">
        {{ $slot }}
    </div>
</div>