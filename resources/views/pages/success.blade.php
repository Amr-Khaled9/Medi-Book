@include('layout.head')
        <!-- Main Content -->
        <main class="flex-grow">
            <div class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col items-center text-center gap-12">
                    <!-- PageHeading / Success Indicator -->
                    <div class="flex flex-col items-center gap-4">
                        <div
                            class="flex items-center justify-center size-20 rounded-full bg-secondary/20 text-secondary">
                            <span class="material-symbols-outlined !text-5xl"
                                style="font-variation-settings: 'FILL' 1, 'wght' 500;">check_circle</span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h1
                                class="text-text-primary dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em]">
                                Appointment Confirmed!</h1>
                            <p
                                class="text-text-secondary dark:text-slate-400 text-lg font-normal leading-normal max-w-lg">
                                Your appointment has been successfully booked. A confirmation email with all the details
                                has been sent to you.</p>
                        </div>
                    </div>
                    <!-- Appointment Summary Card -->
                    <div
                        class="w-full max-w-3xl flex flex-col items-stretch justify-start rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.05)] bg-white dark:bg-background-dark/50 p-6 md:p-8 text-left">
                        <!-- Doctor's Profile Snippet -->
                        <div
                            class="flex flex-col md:flex-row items-start justify-start gap-4 pb-6 border-b border-slate-200 dark:border-slate-800">
                            <div class="w-24 h-24 bg-center bg-no-repeat bg-cover rounded-full flex-shrink-0"
                                data-alt="Portrait of Dr. Evelyn Reed"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBd1oK40AtYDFLRfvgQKhMrPb-6Aty74PC6JBY7acveQacJGunUV-GYy7VkaXiXK8JDv392R0kgtVXs5hYBJ7quH2oy9nfcVUj5NGvCyeAdApU-5cSND1tGM4euC6rjJ_ZuWFWflcwGHSaDB9V_Qn1YVz4SwzitDVsNeCLe-W7pyAvB3GSo3ACyz_7Qc8ASzbECDIR6_xMAPri7NJqG6DV4qaspIhrmwwyx_NCLpxt7XjGRmH9dqWDQ3FCCL_r5-V8x6Ot8rby_JQ");'>
                            </div>
                            <div class="flex w-full min-w-0 grow flex-col items-stretch justify-center gap-1 py-2">
                                <p
                                    class="text-text-primary dark:text-white text-2xl font-bold leading-tight tracking-[-0.015em]">
                                    Dr. Evelyn Reed</p>
                                <p class="text-text-secondary dark:text-slate-400 text-base font-normal leading-normal">
                                    Cardiologist</p>
                                <div class="flex items-center gap-2 mt-2 text-text-secondary dark:text-slate-400">
                                    <span class="material-symbols-outlined text-lg">location_on</span>
                                    <p class="text-sm">St. Jude's Medical Center</p>
                                </div>
                            </div>
                            <button
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-medium leading-normal gap-2 self-start md:self-center mt-4 md:mt-0">
                                <span class="material-symbols-outlined text-xl">calendar_add_on</span>
                                <span class="truncate">Add to Calendar</span>
                            </button>
                        </div>
                        <!-- Appointment Details -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 py-6">
                            <div
                                class="flex justify-between gap-x-6 py-2 border-b border-slate-100 dark:border-slate-800/50">
                                <p class="text-text-secondary dark:text-slate-400 text-sm font-medium leading-normal">
                                    Date</p>
                                <p
                                    class="text-text-primary dark:text-white text-sm font-medium leading-normal text-right">
                                    Monday, October 28, 2024</p>
                            </div>
                            <div
                                class="flex justify-between gap-x-6 py-2 border-b border-slate-100 dark:border-slate-800/50">
                                <p class="text-text-secondary dark:text-slate-400 text-sm font-medium leading-normal">
                                    Time</p>
                                <p
                                    class="text-text-primary dark:text-white text-sm font-medium leading-normal text-right">
                                    10:30 AM (PDT)</p>
                            </div>
                            <div class="flex justify-between gap-x-6 py-2 col-span-1 md:col-span-2">
                                <p class="text-text-secondary dark:text-slate-400 text-sm font-medium leading-normal">
                                    Location</p>
                                <p
                                    class="text-text-primary dark:text-white text-sm font-medium leading-normal text-right">
                                    123 Health St, Wellness City, 90210</p>
                            </div>
                        </div>
                        <!-- Action Buttons -->
                        <div
                            class="flex flex-col sm:flex-row items-center justify-end gap-3 pt-6 mt-auto border-t border-slate-200 dark:border-slate-800">
                            <button
                                class="flex w-full sm:w-auto items-center justify-center text-text-secondary dark:text-slate-400 text-sm font-medium gap-2 hover:text-primary dark:hover:text-primary">
                                <span class="material-symbols-outlined text-lg">print</span>
                                <span>Print Details</span>
                            </button>
                            <div class="hidden sm:block h-4 w-px bg-slate-200 dark:bg-slate-700 mx-2"></div>
                            <button
                                class="flex w-full sm:w-auto justify-center rounded-lg h-9 px-4 text-sm font-medium bg-slate-100 dark:bg-slate-800 text-text-primary dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700">Reschedule</button>
                            <button
                                class="flex w-full sm:w-auto justify-center rounded-lg h-9 px-4 text-sm font-medium bg-transparent text-red-500 hover:bg-red-500/10">Cancel
                                Appointment</button>
                        </div>
                    </div>
                    <!-- Check-in Instructions Section -->
                    <div
                        class="w-full max-w-3xl flex flex-col gap-6 rounded-xl bg-white dark:bg-background-dark/50 shadow-[0_4px_20px_rgba(0,0,0,0.05)] p-6 md:p-8 text-left">
                        <h3 class="text-xl font-bold text-text-primary dark:text-white">Before You Arrive</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="flex-shrink-0 flex items-center justify-center size-10 rounded-full bg-primary/10 text-primary">
                                    <span class="material-symbols-outlined">schedule</span>
                                </div>
                                <div>
                                    <p class="font-bold text-text-primary dark:text-white">Arrive 15 Minutes Early</p>
                                    <p class="text-sm text-text-secondary dark:text-slate-400">This allows time for
                                        check-in and any necessary paperwork.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="flex-shrink-0 flex items-center justify-center size-10 rounded-full bg-primary/10 text-primary">
                                    <span class="material-symbols-outlined">badge</span>
                                </div>
                                <div>
                                    <p class="font-bold text-text-primary dark:text-white">What to Bring</p>
                                    <p class="text-sm text-text-secondary dark:text-slate-400">Please bring your photo
                                        ID and current insurance card.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="flex-shrink-0 flex items-center justify-center size-10 rounded-full bg-primary/10 text-primary">
                                    <span class="material-symbols-outlined">payments</span>
                                </div>
                                <div>
                                    <p class="font-bold text-text-primary dark:text-white">Co-payment</p>
                                    <p class="text-sm text-text-secondary dark:text-slate-400">Be prepared for any
                                        co-payment due at the time of service.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Primary CTA Button -->
                    <div class="pt-4">
                        <a href="../specialties_page/code.html">
                            <button
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-8 bg-primary text-white text-base font-medium leading-normal shadow-lg shadow-primary/30 hover:bg-primary/90 transition-colors">
                                <span>Return to Dashboard</span>
                            </button>

                        </a>
                    </div>
                </div>
            </div>
        </main>
@include('layout.foot')
