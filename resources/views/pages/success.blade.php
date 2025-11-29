@include('layout.head')
<!-- Main Content -->
<main class="flex-grow">
    <div class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center text-center gap-12">
            <!-- PageHeading / Success Indicator -->
            <div class="flex flex-col items-center gap-4">
                <div class="flex items-center justify-center size-20 rounded-full bg-secondary/20 text-secondary">
                    <span class="material-symbols-outlined !text-5xl"
                        style="font-variation-settings: 'FILL' 1, 'wght' 500;">check_circle</span>
                </div>
                <div class="flex flex-col gap-2">
                    <h1
                        class="text-text-primary dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em]">
                        Appointment Confirmed!</h1>
                    <p class="text-text-secondary dark:text-slate-400 text-lg font-normal leading-normal max-w-lg">
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
                        style="background-image: url('{{ asset('storage/' . $doctor_id->image) }}')">
                    </div>
                    <div class="flex w-full min-w-0 grow flex-col items-stretch justify-center gap-1 py-2">
                        <p
                            class="text-text-primary dark:text-white text-2xl font-bold leading-tight tracking-[-0.015em]">
                            {{ $doctor_id->name }}</p>
                        <p class="text-text-secondary dark:text-slate-400 text-base font-normal leading-normal">
                            {{ $doctor_id->specialty->name }}</p>
                    </div>
                    <button
                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-medium leading-normal gap-2 self-start md:self-center mt-4 md:mt-0">
                        <span class="material-symbols-outlined text-xl">calendar_add_on</span>
                        <span class="truncate">Add to Calendar</span>
                    </button>
                </div>
                <!-- Appointment Details -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 py-6">
                    <div class="flex justify-between gap-x-6 py-2 border-b border-slate-100 dark:border-slate-800/50">
                        <p class="text-text-secondary dark:text-slate-400 text-sm font-medium leading-normal">
                            Date</p>
                        <p class="text-text-primary dark:text-white text-sm font-medium leading-normal text-right">
                            {{ $doctorSchedule->day_of_week ?? 'N/A' }}
                        </p>
                    </div>

                    <div class="flex justify-between gap-x-6 py-2 border-b border-slate-100 dark:border-slate-800/50">
                        <p class="text-text-secondary dark:text-slate-400 text-sm font-medium leading-normal">
                            Time</p>
                        <p class="text-text-primary dark:text-white text-sm font-medium leading-normal text-right">
                            {{ $doctorSchedule->start_time ?? 'N/A' }} - {{ $doctorSchedule->end_time ?? 'N/A' }}
                        </p>
                    </div>

                    <div class="flex justify-between gap-x-6 py-2 col-span-1 md:col-span-2">
                        <p class="text-text-secondary dark:text-slate-400 text-sm font-medium leading-normal">
                            Location</p>
                        <p class="text-text-primary dark:text-white text-sm font-medium leading-normal text-right">
                            123 Health St, Wellness City, 90210
                        </p>
                    </div>
                </div>
            </div>
            <!-- Primary CTA Button -->
            <div class="pt-4">
                <a href="{{ url('/dashboard') }}">
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
