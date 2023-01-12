@php
    $activeClassFor = function ($name) {
        return request()->routeIs($name) ? 'text-red-500 bg-red-600 bg-opacity-5' : 'text-grey-primary';
    };
@endphp

<div class="hidden md:block w-[200px] h-auto border-r-2 border-gray-100 p-4">
    <a href="/home" class="flex px-4 py-3 my-2 space-x-2 rounded-lg ">
        <svg width="22" height="22" viewBox="0 0 22 22" fill="none">
            <path
                d="M8.15722 19.7714V16.7047C8.1572 15.9246 8.79312 15.2908 9.58101 15.2856H12.4671C13.2587 15.2856 13.9005 15.9209 13.9005 16.7047V16.7047V19.7809C13.9003 20.4432 14.4343 20.9845 15.103 21H17.0271C18.9451 21 20.5 19.4607 20.5 17.5618V17.5618V8.83784C20.4898 8.09083 20.1355 7.38935 19.538 6.93303L12.9577 1.6853C11.8049 0.771566 10.1662 0.771566 9.01342 1.6853L2.46203 6.94256C1.86226 7.39702 1.50739 8.09967 1.5 8.84736V17.5618C1.5 19.4607 3.05488 21 4.97291 21H6.89696C7.58235 21 8.13797 20.4499 8.13797 19.7714V19.7714"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <span>Home</span>
    </a>
    <a href="/kriteria" class="flex px-4 py-3 my-2 space-x-2 rounded-lg ">
        <svg width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
            <path
                d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5S5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05c1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"
                fill="currentColor"></path>
        </svg>
        <span>Kriteria</span>
    </a>
    <a href="/alternatif" class="flex px-4 py-3 my-2 space-x-2 rounded-lg ">
        <svg width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
            <path
                d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5S5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05c1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"
                fill="currentColor"></path>
        </svg>
        <span>Alternatif</span>
    </a>
</div>
