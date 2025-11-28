@include('layout.head')
            <main class="px-4 sm:px-6 md:px-10 flex flex-1 justify-center py-8">
                <div class="layout-content-container flex flex-col w-full max-w-7xl flex-1 gap-8">
                    <div class="flex flex-col gap-3">
                        <h1
                            class="text-text-light dark:text-text-dark text-4xl font-black leading-tight tracking-tighter">
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
                        <!-- Doctor Card 1 -->
                        <div
                            class="flex flex-col gap-4 text-center p-6 bg-surface-light dark:bg-surface-dark rounded-xl shadow-subtle hover:shadow-lift transition-shadow duration-300">
                            <div class="mx-auto">
                                <div class="size-28 bg-center bg-no-repeat aspect-square bg-cover rounded-full ring-4 ring-primary/20"
                                    data-alt="Professional headshot of Dr. Jane Doe"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuABT-HT_BivkG4_Ffgb8pVYdQjFOeka49p8rmbodr50SFn6IiIR8EvQc7FU2Uj8LlkjEV9pwmo0C18bN-OP9Cw1Mq2wP3q2MO4GkNwvMjVg_GWbv-uBxjjfu9itVW9Kf1nvJLnR8dC4e8d15IL03VBOVZrP9m0jPe0WjIuqkhc3Uvsqx5cjnLtIbFPqhVe94vMEDW48MRQLQ4zBeLPSUmgQBAWmXloihEasQDTO6QdlFm0ZpOT-SoWkLL7fdlmV0UIOqenyD0ZE2g");'>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-text-light dark:text-text-dark text-lg font-bold leading-normal">Dr. Jane
                                    Doe</p>
                                <p
                                    class="text-text-muted-light dark:text-text-muted-dark text-sm font-medium leading-normal">
                                    Cardiologist</p>
                                <div class="inline-flex items-center justify-center gap-2 mt-2">
                                    <span class="inline-block h-2 w-2 rounded-full bg-success"></span>
                                    <p class="text-success text-xs font-semibold uppercase tracking-wider">Available
                                        Today</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-center gap-1.5 text-rating">
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl">star</span>
                                <span
                                    class="text-sm font-semibold text-text-muted-light dark:text-text-muted-dark ml-1">(124)</span>
                            </div>
                            <a href="../booking_confirmation_page/code.html">
                                <button
                                    class="w-full flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-11 bg-primary text-white gap-2 text-sm font-bold leading-normal tracking-wide hover:bg-primary/90 transition-colors">Book
                                    Now
                                </button>
                            </a>
                        </div>
                        <!-- Doctor Card 2 -->
                        <div
                            class="flex flex-col gap-4 text-center p-6 bg-surface-light dark:bg-surface-dark rounded-xl shadow-subtle hover:shadow-lift transition-shadow duration-300">
                            <div class="mx-auto">
                                <div class="size-28 bg-center bg-no-repeat aspect-square bg-cover rounded-full ring-4 ring-primary/20"
                                    data-alt="Professional headshot of Dr. John Smith"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBAgznH4opPUxDr46UhRXotGQ3ArmrsphUPErNN1IaUUfFn-eBkPxM7T7ng51zp2amaDSrpjiGMeTRV4Ly88Btb1C_4OOx_k7z8xarI39UHiJGW2jHcOibXCUvY4N-uo6usvj-wUjL-o1hlgeUOiTft0D4T1zeWPMu2hK77c0tcEIK_X3ccPM7CFehHYR6xDApaqVMZltI2EJwJQEZsje6crhpFkftOZmUejTKL3bAt9dXbWtKxqoOupYHJUHAb379rFtBQnYBfFg");'>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-text-light dark:text-text-dark text-lg font-bold leading-normal">Dr. John
                                    Smith</p>
                                <p
                                    class="text-text-muted-light dark:text-text-muted-dark text-sm font-medium leading-normal">
                                    Dermatologist</p>
                                <div class="inline-flex items-center justify-center gap-2 mt-2">
                                    <span class="inline-block h-2 w-2 rounded-full bg-neutral"></span>
                                    <p class="text-neutral text-xs font-semibold uppercase tracking-wider">Not Available
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center justify-center gap-1.5 text-rating">
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span
                                    class="text-sm font-semibold text-text-muted-light dark:text-text-muted-dark ml-1">(210)</span>
                            </div>
                            <a href="../booking_confirmation_page/code.html">
                                <button
                                    class="w-full flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-11 bg-primary text-white gap-2 text-sm font-bold leading-normal tracking-wide hover:bg-primary/90 transition-colors">Book
                                    Now
                                </button>
                            </a>
                        </div>
                        <!-- Doctor Card 3 -->
                        <div
                            class="flex flex-col gap-4 text-center p-6 bg-surface-light dark:bg-surface-dark rounded-xl shadow-subtle hover:shadow-lift transition-shadow duration-300">
                            <div class="mx-auto">
                                <div class="size-28 bg-center bg-no-repeat aspect-square bg-cover rounded-full ring-4 ring-primary/20"
                                    data-alt="Professional headshot of Dr. Emily White"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDzUG1e-6IJcrXb6YI3SgHSug1024UP_sBCzuST8ZO3u04a_XShA2hE8Q8uzwk4OrWXnecu6wtDC8du4yT03HJtQrm5X7UeusxtIbfnIvxPYmhOT7EcbvgcRGZ2uABaXnhIZauKzDnFJs1MxGgLt97JRI9n_zjXvrfGkwfFv8FhoAGb-iuwIQfm1A3bavbgyTLDldySE-4YYEBhMEdJbTI6FwEXMFAtCpfW2dSMsE8LJKahjXVbwlg8mswj-1c9IE9uFQfe54QEGw");'>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-text-light dark:text-text-dark text-lg font-bold leading-normal">Dr.
                                    Emily White</p>
                                <p
                                    class="text-text-muted-light dark:text-text-muted-dark text-sm font-medium leading-normal">
                                    Pediatrician</p>
                                <div class="inline-flex items-center justify-center gap-2 mt-2">
                                    <span class="inline-block h-2 w-2 rounded-full bg-success"></span>
                                    <p class="text-success text-xs font-semibold uppercase tracking-wider">Available
                                        Today</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-center gap-1.5 text-rating">
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star_half</span>
                                <span
                                    class="text-sm font-semibold text-text-muted-light dark:text-text-muted-dark ml-1">(98)</span>
                            </div>
                            <a href="../booking_confirmation_page/code.html">
                                <button
                                    class="w-full flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-11 bg-primary text-white gap-2 text-sm font-bold leading-normal tracking-wide hover:bg-primary/90 transition-colors">Book
                                    Now
                                </button>
                            </a>
                        </div>
                        <!-- Doctor Card 4 -->
                        <div
                            class="flex flex-col gap-4 text-center p-6 bg-surface-light dark:bg-surface-dark rounded-xl shadow-subtle hover:shadow-lift transition-shadow duration-300">
                            <div class="mx-auto">
                                <div class="size-28 bg-center bg-no-repeat aspect-square bg-cover rounded-full ring-4 ring-primary/20"
                                    data-alt="Professional headshot of Dr. Michael Brown"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAbe09GCo0uMkZj0890uG2UOp7enKNoat8cCFd_Q5bSD8CRDJVPUR5gxRZ6_fQgyfXbLQKysvcLEvJZdOVXsSVrMKwiQBmFx4Nh2gZNl22rykN2DDdSr1wMdmsfSEiaVBCzxYZrvJ8ytC7MI-OxAhYC4d4_v-U82pX55C89TPGh7suJKNzzObnI3Y1LJYnJFosKcUXtwhO4CRI9tFcwtAMqwmz1JpXE7jg_-yBg-IvEnGGOzOVfa5kSu3b_fBuV_RNSzsUIFpN7jA");'>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-text-light dark:text-text-dark text-lg font-bold leading-normal">Dr.
                                    Michael Brown</p>
                                <p
                                    class="text-text-muted-light dark:text-text-muted-dark text-sm font-medium leading-normal">
                                    Neurologist</p>
                                <div class="inline-flex items-center justify-center gap-2 mt-2">
                                    <span class="inline-block h-2 w-2 rounded-full bg-success"></span>
                                    <p class="text-success text-xs font-semibold uppercase tracking-wider">Available
                                        Today</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-center gap-1.5 text-rating">
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl">star</span>
                                <span
                                    class="text-sm font-semibold text-text-muted-light dark:text-text-muted-dark ml-1">(153)</span>
                            </div>
                            <a href="../booking_confirmation_page/code.html">
                                <button
                                    class="w-full flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-11 bg-primary text-white gap-2 text-sm font-bold leading-normal tracking-wide hover:bg-primary/90 transition-colors">Book
                                    Now
                                </button>
                            </a>
                        </div>
                        <!-- Add more cards as needed -->
                        <div
                            class="flex flex-col gap-4 text-center p-6 bg-surface-light dark:bg-surface-dark rounded-xl shadow-subtle hover:shadow-lift transition-shadow duration-300">
                            <div class="mx-auto">
                                <div class="size-28 bg-center bg-no-repeat aspect-square bg-cover rounded-full ring-4 ring-primary/20"
                                    data-alt="Professional headshot of Dr. Sarah Green"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDtt4KU1AWcDmaqlW_of3GXeeUFjTEfodicSupCFYruqo3oKyteWOBaVcm3CMy-ZA9Kg-yYXRCHs3TDAnXAVTlhnd7ntX3WcBG6HpgXSGNoFtCl9djtZqrcG5RKriuDALGJnGn6Tvco5ZGML0_E4_rDdIwRqoPh74zCK6UWqW3038szI1hRIwa7492gdGA_a4m0RChXPD_tJx_7TlgRMuNBnD8ABZR_wtebCGjoLWUupjKjeZ1VPwhp9JH6hdND4NNFa4FN6yzkyA");'>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-text-light dark:text-text-dark text-lg font-bold leading-normal">Dr.
                                    Sarah Green</p>
                                <p
                                    class="text-text-muted-light dark:text-text-muted-dark text-sm font-medium leading-normal">
                                    Orthopedic Surgeon</p>
                                <div class="inline-flex items-center justify-center gap-2 mt-2">
                                    <span class="inline-block h-2 w-2 rounded-full bg-neutral"></span>
                                    <p class="text-neutral text-xs font-semibold uppercase tracking-wider">Not
                                        Available</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-center gap-1.5 text-rating">
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span
                                    class="text-sm font-semibold text-text-muted-light dark:text-text-muted-dark ml-1">(255)</span>
                            </div>
                            <a href="../booking_confirmation_page/code.html">
                                <button
                                    class="w-full flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-11 bg-primary text-white gap-2 text-sm font-bold leading-normal tracking-wide hover:bg-primary/90 transition-colors">Book
                                    Now
                                </button>
                            </a>
                        </div>
                        <div
                            class="flex flex-col gap-4 text-center p-6 bg-surface-light dark:bg-surface-dark rounded-xl shadow-subtle hover:shadow-lift transition-shadow duration-300">
                            <div class="mx-auto">
                                <div class="size-28 bg-center bg-no-repeat aspect-square bg-cover rounded-full ring-4 ring-primary/20"
                                    data-alt="Professional headshot of Dr. David Lee"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBkjnpQD7PUZ7O9O65E22VJWPa_AvKLCcBDlsz5wDbxzT6CDz2e1AQV9NsODjQQE7ewZpThTkdQUUc3y78VY49dcEAtyyyJskZbkH_EUXOqLhVx0CCeB2BhB4etYK9eZKbWWy_vKFQrINQ1ISsI1yZWnvkOt7wdVrLU9wJNI7tmM3Wvf_qNfwiyZvd7eNworzWvbrM_axXji2-jD7dV3pJ3tutQvPFhS_BRTNEENZyHPgvPCMzEJenVbaO9vvck3qmOVyAQk6XT-g");'>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-text-light dark:text-text-dark text-lg font-bold leading-normal">Dr.
                                    David Lee</p>
                                <p
                                    class="text-text-muted-light dark:text-text-muted-dark text-sm font-medium leading-normal">
                                    General Practitioner</p>
                                <div class="inline-flex items-center justify-center gap-2 mt-2">
                                    <span class="inline-block h-2 w-2 rounded-full bg-success"></span>
                                    <p class="text-success text-xs font-semibold uppercase tracking-wider">Available
                                        Today</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-center gap-1.5 text-rating">
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined !text-xl">star</span>
                                <span
                                    class="text-sm font-semibold text-text-muted-light dark:text-text-muted-dark ml-1">(188)</span>
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
                </div>
            </main>
@include('layout.foot')