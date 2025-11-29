@include('layout.head')
<main class="flex h-full grow flex-col items-center justify-center py-10 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-2xl">
        <div
            class="bg-user-card-bg dark:bg-background-dark dark:border dark:border-gray-700 rounded-xl shadow-lg p-6 sm:p-8 md:p-10 space-y-8">
            <div class="flex flex-col items-center text-center space-y-3">
                <div class="flex items-center justify-center size-16 bg-user-primary/20 rounded-full">
                    <span class="material-symbols-outlined text-4xl text-user-primary">check_circle</span>
                </div>
                <h1
                    class="text-user-secondary dark:text-white text-3xl sm:text-4xl font-black leading-tight tracking-tight">
                    Confirm Your Appointment
                </h1>
            </div>

            <form action="{{ route('booking.store') }}" method="POST"
                class="space-y-4 border-t border-b border-user-border dark:border-gray-700 py-6">
                @csrf

                {{-- Doctor --}}
                <div class="flex items-center gap-4 min-h-[72px] py-2">
                    <div class="flex items-center justify-center rounded-lg bg-user-primary/20 shrink-0 size-12">
                        <span class="material-symbols-outlined">stethoscope</span>
                    </div>
                    <div class="flex flex-col w-full">
                        <p class="text-user-secondary dark:text-gray-300 text-base font-medium">Doctor</p>
                        <input type="text" name="name_doctor" value="{{ $doctor->name }}"
                            class="w-full text-gray-600 dark:text-gray-400 text-sm bg-transparent border-b border-gray-300 focus:border-user-primary outline-none"
                            readonly>
                    </div>
                </div>

                {{-- Specialty --}}
                <div class="flex items-center gap-4 min-h-[72px] py-2">
                    <div class="flex items-center justify-center rounded-lg bg-user-primary/20 shrink-0 size-12">
                        <span class="material-symbols-outlined">medical_services</span>
                    </div>
                    <div class="flex flex-col w-full">
                        <p class="text-user-secondary dark:text-gray-300 text-base font-medium">Specialty</p>
                        <input type="text" name="name_specialty" value="{{$specialtyName }}"
                            class="w-full text-gray-600 dark:text-gray-400 text-sm bg-transparent border-b border-gray-300 focus:border-user-primary outline-none"
                            readonly>
                    </div>
                </div>

                {{-- Patient Name --}}
                <div class="flex items-center gap-4 min-h-[72px] py-2">
                    <div class="flex items-center justify-center rounded-lg bg-user-primary/20 shrink-0 size-12">
                        <span class="material-symbols-outlined">account_circle</span>
                    </div>
                    <div class="flex flex-col w-full">
                        <p class="text-user-secondary dark:text-gray-300 text-base font-medium">Patient Name</p>
                        <input type="text" name="name_patient" value="{{ old('name_patient') }}"
                            class="w-full text-gray-600 dark:text-gray-400 text-sm bg-transparent border-b border-gray-300 focus:border-user-primary outline-none"
                            required>
                    </div>
                </div>

                {{-- Patient Phone --}}
                <div class="flex items-center gap-4 min-h-[72px] py-2">
                    <div class="flex items-center justify-center rounded-lg bg-user-primary/20 shrink-0 size-12">
                        <span class="material-symbols-outlined">call</span>
                    </div>
                    <div class="flex flex-col w-full">
                        <p class="text-user-secondary dark:text-gray-300 text-base font-medium">Phone</p>
                        <input type="text" name="phone_patient" value="{{ old('phone_patient') }}"
                            class="w-full text-gray-600 dark:text-gray-400 text-sm bg-transparent border-b border-gray-300 focus:border-user-primary outline-none"
                            required>
                    </div>
                </div>

                {{-- Email --}}
                <div class="flex items-center gap-4 min-h-[72px] py-2">
                    <div class="flex items-center justify-center rounded-lg bg-user-primary/20 shrink-0 size-12">
                        <span class="material-symbols-outlined">mail</span>
                    </div>
                    <div class="flex flex-col w-full">
                        <p class="text-user-secondary dark:text-gray-300 text-base font-medium">Email</p>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="w-full text-gray-600 dark:text-gray-400 text-sm bg-transparent border-b border-gray-300 focus:border-user-primary outline-none"
                            required>
                    </div>
                </div>

                {{-- Visit Type --}}
                <div class="flex items-center gap-4 min-h-[72px] py-2">
                    <div class="flex items-center justify-center rounded-lg bg-user-primary/20 shrink-0 size-12">
                        <span class="material-symbols-outlined">medical_information</span>
                    </div>
                    <div class="flex flex-col w-full">
                        <p class="text-user-secondary dark:text-gray-300 text-base font-medium">Visit Type</p>
                        <div class="flex gap-4 mt-2">
                            <label class="flex items-center gap-2 text-gray-600 dark:text-gray-400 text-sm">
                                <input type="radio" name="visit_type" value="new"
                                    {{ old('visit_type') == 'new' ? 'checked' : '' }} required>
                                New Visit
                            </label>
                            <label class="flex items-center gap-2 text-gray-600 dark:text-gray-400 text-sm">
                                <input type="radio" name="visit_type" value="follow-up"
                                    {{ old('visit_type') == 'follow-up' ? 'checked' : '' }}>
                                Follow-up
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Notes --}}
                <div class="flex items-center gap-4 min-h-[72px] py-2">
                    <div class="flex items-center justify-center rounded-lg bg-user-primary/20 shrink-0 size-12">
                        <span class="material-symbols-outlined">description</span>
                    </div>
                    <div class="flex flex-col w-full">
                        <p class="text-user-secondary dark:text-gray-300 text-base font-medium">Notes</p>
                        <textarea name="notes" rows="2"
                            class="w-full text-gray-600 dark:text-gray-400 text-sm bg-transparent border-b border-gray-300 focus:border-user-primary outline-none mt-1">{{ old('notes') }}</textarea>
                    </div>
                </div>

                {{-- Submit --}}
                <div class="flex flex-col items-center gap-4 pt-4">
                    <button
                        class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 font-bold rounded-lg text-base px-5 py-3.5 text-center transition-colors">
                        Book Appointment
                    </button>
                    <a class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-user-secondary dark:hover:text-white"
                        href="">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>
@include('layout.foot')
