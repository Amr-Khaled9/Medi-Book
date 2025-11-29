@include('layout.head')
<main class="px-4 sm:px-6 md:px-10 flex flex-1 justify-center py-8">
    <div class="layout-content-container flex flex-col w-full max-w-7xl flex-1 gap-8">
        <div class="flex flex-col gap-3">
            <h1 class="text-text-light dark:text-text-dark text-4xl font-black leading-tight tracking-tighter">
                Find Your Doctor</h1>
            <p class="text-text-muted-light dark:text-text-muted-dark text-lg font-normal leading-normal">
                Search for specialists and book your appointment with ease.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($doctors as $doctor)
                <a href="{{ route('doctor.details',  $doctor->id) }}"
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
                            {{ $doctor->specialty->name }}
                        </p>
                    </div>

                </a>
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
