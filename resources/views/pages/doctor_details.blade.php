@include('layout.head')



<body class="font-display bg-background-light dark:bg-background-dark text-text-primary dark:text-gray-200">
    <div class="relative w-full group/design-root" style='font-family: Inter, "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
            <div class="px-4 sm:px-8 md:px-12 lg:px-20 xl:px-40 flex flex-1 justify-center py-10 lg:py-16">
                <div class="layout-content-container flex flex-col max-w-7xl w-full">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 @container">
                        <!-- Left Column -->
                        <div class="lg:col-span-1 flex flex-col gap-8">
                            <!-- Header Card -->
                            <div
                                class="flex flex-col gap-6 items-center text-center p-8 bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-border-light dark:border-border-dark">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-32 w-32"
                                    data-alt="Professional headshot of Dr. Evelyn Reed"
                                    style="background-image: url('{{ asset('storage/' . $doctor->image) }}')"> </div>
                                <div class="flex flex-col justify-center">
                                    <p class="text-text-primary dark:text-white text-2xl font-bold leading-tight">Dr.
                                        {{ $doctor->name }}</p>
                                    <p
                                        class="text-text-secondary dark:text-gray-400 text-lg font-normal leading-normal">
                                        {{ $doctor->specialty->name }}</p>
                                </div>

                            </div>
                            <!-- Location Card -->
                            <div
                                class="flex flex-col gap-4 p-6 bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-border-light dark:border-border-dark">
                                <p class="text-text-primary dark:text-white text-lg font-bold">Location</p>
                                <p class="text-text-secondary dark:text-gray-400">CardioHealth Clinic<br />123 Wellness
                                    Avenue, Suite 400<br />Springfield, IL 62704</p>
                                <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg mt-2"
                                    data-location="Springfield, IL"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAxkSnt8XWkFCFamOOR1wrY5An6QRv6eGshODPz1y2xyWzNCaBPRsNq_7lGxtnzH6NFCFVmcpMJ_PddRJ81ctFrnbMgK_uIXBKRy0sEGxVl9n4R-Ww5Zft1fIp0kQTbc0QAr5DAl9JzhLdO9KbTpIL_M3c08QKDfbBK1ZJYJ1y6ugbarphOCMKn3NcWlhHfoq2W0CjzLhoU000ibCUJYaZZwu5V8eKeXmCZG3cS69t8BsTrbhthi961BZRukrrBGLyatYoSmqOmcw");'>
                                </div>
                            </div>
                        </div>
                        <!-- Right Column -->
                        <div class="lg:col-span-2 flex flex-col gap-8">
                            <!-- Tabs -->
                            <div class="pb-3 border-b border-border-light dark:border-border-dark">
                                <div class="flex px-4 gap-8">
                                    <a class="flex flex-col items-center justify-center border-b-[3px] border-b-action-teal text-text-primary dark:text-white pb-[13px] pt-4"
                                        href="#">
                                        <p class="text-base font-bold">About</p>
                                    </a>
                                </div>
                            </div>
                            <!-- About & Experience Cards -->
                            <div class="flex flex-col gap-8">
                                <div
                                    class="flex flex-col gap-4 p-6 bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-border-light dark:border-border-dark">
                                    <p class="text-text-primary dark:text-white text-xl font-bold">About Dr. {{ $doctor->name }} Reed
                                    </p>
                                    <p class="text-text-secondary dark:text-gray-400 text-base leading-relaxed">
                                        {{ $doctor->about }}
                                    </p>
                                </div>
                                <div
                                    class="flex flex-col gap-4 p-6 bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-border-light dark:border-border-dark">
                                    <p class="text-text-primary dark:text-white text-xl font-bold">Experience &amp;
                                        Education</p>
                                    <p class="text-text-secondary dark:text-gray-400 text-base leading-relaxed">
                                        {{ $doctor->experience }}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.foot')
