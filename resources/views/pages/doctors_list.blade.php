@include('layout.head')
<main class="px-4 sm:px-6 md:px-10 flex flex-1 justify-center py-8">
    <div class="layout-content-container flex flex-col w-full max-w-7xl flex-1 gap-8">
        <div class="flex flex-col gap-3">
            <h1 class="text-text-light dark:text-text-dark text-4xl font-black leading-tight tracking-tighter">
                Find Your Doctor</h1>
            <p class="text-text-muted-light dark:text-text-muted-dark text-lg font-normal leading-normal">
                Search for specialists and book your appointment with ease.</p>
        </div>
        <div
            class="flex flex-col sm:flex-row justify-between items-center gap-4 p-4 rounded-xl bg-surface-light dark:bg-surface-dark shadow-subtle">
            <div class="relative w-full flex-grow">
                <span
                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-text-muted-light dark:text-text-muted-dark">search</span>
                <input
                    class="w-full h-12 pl-10 pr-4 rounded-lg bg-background-light dark:bg-background-dark border border-gray-200 dark:border-gray-700 focus:ring-2 focus:ring-primary focus:border-primary transition-colors text-text-light dark:text-text-dark"
                    placeholder="Search by doctor name or specialty..." type="text" />
            </div>
            <div class="flex w-full sm:w-auto gap-3 overflow-x-auto pb-2">
                <button
                    class="flex h-12 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-background-light dark:bg-background-dark border border-gray-200 dark:border-gray-700 px-4 hover:bg-gray-100 dark:hover:bg-gray-700/50 transition-colors">
                    <p class="text-text-light dark:text-text-dark text-sm font-medium">All Specialties</p>
                    <span
                        class="material-symbols-outlined text-text-muted-light dark:text-text-muted-dark">expand_more</span>
                </button>
                <button
                    class="flex h-12 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-background-light dark:bg-background-dark border border-gray-200 dark:border-gray-700 px-4 hover:bg-gray-100 dark:hover:bg-gray-700/50 transition-colors">
                    <p class="text-text-light dark:text-text-dark text-sm font-medium">Availability</p>
                    <span
                        class="material-symbols-outlined text-text-muted-light dark:text-text-muted-dark">expand_more</span>
                </button>
                <button
                    class="flex h-12 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-background-light dark:bg-background-dark border border-gray-200 dark:border-gray-700 px-4 hover:bg-gray-100 dark:hover:bg-gray-700/50 transition-colors">
                    <p class="text-text-light dark:text-text-dark text-sm font-medium">Location</p>
                    <span
                        class="material-symbols-outlined text-text-muted-light dark:text-text-muted-dark">expand_more</span>
                </button>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($doctors as $doctor)
                <div
                    class="flex flex-col gap-4 text-center p-6 bg-surface-light dark:bg-surface-dark rounded-xl shadow-subtle hover:shadow-lift transition-shadow duration-300">

                    <div class="mx-auto">
                        <div class="size-28 bg-center bg-no-repeat aspect-square bg-cover rounded-full ring-4 ring-primary/20"
                            style="background-image: url('{{ asset('storage/' . $doctor->image) }}')">
                        </div>
                    </div>

                    <div class="flex flex-col gap-1">
                        <p class="text-text-light dark:text-text-dark text-lg font-bold">
                            {{ $doctor->name }}
                        </p>

                        <p class="text-text-muted-light dark:text-text-muted-dark text-sm font-medium">
                            {{ $specialty->name }}
                        </p>

                        @php
                            $isAvailable = $results[$doctor->id] ?? false;
                        @endphp

                        <div class="inline-flex items-center justify-center gap-2 mt-2">
                            <span
                                class="inline-block h-2 w-2 rounded-full {{ $isAvailable ? 'bg-success' : 'bg-red-500' }}"></span>

                            <p
                                class="{{ $isAvailable ? 'text-success' : 'text-red-500' }} text-xs font-semibold uppercase tracking-wider">
                                {{ $isAvailable ? 'Available Today' : 'Not Available' }}
                            </p>
                        </div>

                        @if ($isAvailable)
                            <div class="mt-3">
                                <a href="{{ route('booking',[$doctor->id , $specialty->name ]) }}"
                                    class="px-4 py-2 bg-primary text-white rounded-lg shadow hover:bg-primary-dark transition">
                                    Book Now
                                </a>
                            </div>
                        @endif


                    </div>

                </div>
            @endforeach
        </div>


    </div>
    {{-- <div class="flex items-center justify-center gap-1.5 text-rating">
        <span class="material-symbols-outlined !text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
        <span class="material-symbols-outlined !text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
        <span class="material-symbols-outlined !text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
        <span class="material-symbols-outlined !text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
        <span class="material-symbols-outlined !text-xl">star</span>
        <span class="text-sm font-semibold text-text-muted-light dark:text-text-muted-dark ml-1">(124)</span>
    </div>
    <a href="../booking_confirmation_page/code.html">
        <button
            class="w-full flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-11 bg-primary text-white gap-2 text-sm font-bold leading-normal tracking-wide hover:bg-primary/90 transition-colors">Book
            Now
        </button>
    </a>
    </div>
    </div>
    <nav aria-label="Pagination" class="flex items-center justify-center pt-8">
        <ul class="inline-flex items-center -space-x-px">
            <li>
                <a class="flex items-center justify-center w-10 h-10 ml-0 leading-tight text-text-muted-light dark:text-text-muted-dark bg-surface-light dark:bg-surface-dark border border-gray-300 dark:border-gray-700 rounded-l-lg hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-text-light dark:hover:text-white"
                    href="#">
                    <span class="sr-only">Previous</span>
                    <span class="material-symbols-outlined !text-2xl">chevron_left</span>
                </a>
            </li>
            <li>
                <a aria-current="page"
                    class="flex items-center justify-center w-10 h-10 text-white bg-primary border border-primary leading-tight"
                    href="#">1</a>
            </li>
            <li>
                <a class="flex items-center justify-center w-10 h-10 leading-tight text-text-muted-light dark:text-text-muted-dark bg-surface-light dark:bg-surface-dark border border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-text-light dark:hover:text-white"
                    href="#">2</a>
            </li>
            <li>
                <a class="flex items-center justify-center w-10 h-10 leading-tight text-text-muted-light dark:text-text-muted-dark bg-surface-light dark:bg-surface-dark border border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-text-light dark:hover:text-white"
                    href="#">3</a>
            </li>
            <li>
                <a class="flex items-center justify-center w-10 h-10 leading-tight text-text-muted-light dark:text-text-muted-dark bg-surface-light dark:bg-surface-dark border border-gray-300 dark:border-gray-700 rounded-r-lg hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-text-light dark:hover:text-white"
                    href="#">
                    <span class="sr-only">Next</span>
                    <span class="material-symbols-outlined !text-2xl">chevron_right</span>
                </a>
            </li>
        </ul>
    </nav>
    </div> --}}
</main>
@include('layout.foot')
