<nav class="sticky top-0 left-0 bg-white z-50 border-b border-gray-200">
    <div class="max-w-7xl m-auto py-2 px-4 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="{{ asset('assets/gfc-berlin-logo.png') }}" width="80" title="German Fixing Consultants Logo" alt="GFC Berlin Logo">
            <div class="flex flex-col font-bold ml-3">
                <span class="text-lg">GFC Europe</span>
                <span class="text-sm -translate-y-1">Engineering Solutions</span>
            </div>
        </a>
        <ul class="font-semibold 950px:hidden">
            <a class="px-2 ml-6" href="/">Home</a>
            <a class="px-2 ml-6" href="/#about">About</a>
            <a class="px-2 ml-6" href="/#services">Services</a>
            <a class="px-2 ml-6" href="/#applications">Applications</a>
            <a class="px-2 ml-6" href="/#solutions">Solutions</a>
            <a class="pl-2 ml-6" href="/projects">Projects</a>
        </ul>
        <div class="relative hidden 950px:block" x-data="{ open: false }">
            <img x-on:click="open = !open"  class="cursor-pointer" src="https://api.iconify.design/fluent:text-align-right-20-filled.svg?color=%23141515" width="35" alt="Align Icons">
            <div class="absolute top-10 right-0 bg-white border p-5 shadow-xl border-gray/100 rounded-lg" x-show="open">
                <ul class="flex flex-col text-black font-bold">
                    <a class="pb-2" href="/">Home</a>
                    <a class="py-2" href="/#about">About</a>
                    <a class="py-2" href="/#services">Services</a>
                    <a class="py-2" href="/#applications">Applications</a>
                    <a class="py-2" href="/#solutions">Solutions</a>
                    <a class="pt-2" href="/projects">Projects</a>
                </ul>
            </div>
        </div>
    </div>
</nav>