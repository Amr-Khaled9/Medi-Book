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
              Confirm Your Appointment</h1>
          </div>
          <div class="space-y-4 border-t border-b border-user-border dark:border-gray-700 py-6">
            <div class="flex items-center gap-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div
                  class="text-user-primary flex items-center justify-center rounded-lg bg-user-primary/20 shrink-0 size-12">
                  <span class="material-symbols-outlined">calendar_month</span>
                </div>
                <div class="flex flex-col justify-center">
                  <p class="text-user-secondary dark:text-gray-300 text-base font-medium leading-normal">Date &amp; Time
                  </p>
                  <p class="text-gray-600 dark:text-gray-400 text-sm font-normal leading-normal">Mon, Oct 28, 2024 at
                    10:30 AM</p>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div
                  class="text-user-primary flex items-center justify-center rounded-lg bg-user-primary/20 shrink-0 size-12">
                  <span class="material-symbols-outlined">stethoscope</span>
                </div>
                <div class="flex flex-col justify-center">
                  <p class="text-user-secondary dark:text-gray-300 text-base font-medium leading-normal">Doctor</p>
                  <p class="text-gray-600 dark:text-gray-400 text-sm font-normal leading-normal">Dr. Evelyn Reed,
                    Cardiologist</p>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div
                  class="text-user-primary flex items-center justify-center rounded-lg bg-user-primary/20 shrink-0 size-12">
                  <span class="material-symbols-outlined">location_on</span>
                </div>
                <div class="flex flex-col justify-center">
                  <p class="text-user-secondary dark:text-gray-300 text-base font-medium leading-normal">Location</p>
                  <p class="text-gray-600 dark:text-gray-400 text-sm font-normal leading-normal">CardioHealth Clinic,
                    123 Health St.</p>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div
                  class="text-user-primary flex items-center justify-center rounded-lg bg-user-primary/20 shrink-0 size-12">
                  <span class="material-symbols-outlined">medical_information</span>
                </div>
                <div class="flex flex-col justify-center">
                  <p class="text-user-secondary dark:text-gray-300 text-base font-medium leading-normal">Visit Type</p>
                  <p class="text-gray-600 dark:text-gray-400 text-sm font-normal leading-normal">Annual Check-up</p>
                </div>
              </div>
            </div>
          </div>
          <div class="space-y-2">
            <label class="text-user-secondary dark:text-gray-300 font-medium" for="notes">Additional Notes
              (Optional)</label>
            <textarea
              class="w-full rounded-lg border border-user-border dark:border-gray-600 p-3 text-sm text-user-text dark:text-gray-300 bg-user-bg dark:bg-gray-800 focus:ring-2 focus:ring-user-primary focus:border-user-primary transition-shadow"
              id="notes" name="notes" placeholder="Please add any information for the doctor here..."
              rows="4"></textarea>
          </div>
          <div class="flex flex-col items-center gap-4 pt-4">
            <a href="../success_page/code.html">
              <button
                class="w-full text-white bg-user-primary hover:bg-user-primary/90 focus:outline-none focus:ring-4 focus:ring-user-primary/50 font-bold rounded-lg text-base px-5 py-3.5 text-center transition-colors">
                Book Appointment
              </button>
            </a>
            <a class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-user-secondary dark:hover:text-white"
              href="#">Cancel</a>
          </div>
        </div>
      </div>
    </main>
@include('layout.foot')
