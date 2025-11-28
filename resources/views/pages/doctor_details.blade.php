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
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCQGzymY3UzKylA6El8EhJqo8t9w1MNGaSMRou3hW4fommPIncjMQ2302ml95nObvJRnEf_D9hNKzKpV21oYxHMq5sdtDROLqLAG1A4t3AlTomNT8iNWLixTOxSxXy7SxuYB4FlKrzvgoE5kpGt485anU8QrP0Dw1hyGKMh3dWZJ0WD2NH8GzANI_78uggn0P5QZVvZpq2clDQavYV4GwkSFV52ueV-FvsK-hqO2c79z2P0Ysk8yKdLNdghV80vKurKEJdWt2XCEw");'>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <p class="text-text-primary dark:text-white text-2xl font-bold leading-tight">Dr.
                                        Evelyn Reed, MD</p>
                                    <p
                                        class="text-text-secondary dark:text-gray-400 text-lg font-normal leading-normal">
                                        Cardiologist</p>
                                </div>
                                <a class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-action-teal text-white text-base font-bold w-full transition-colors hover:bg-teal-500"
                                    href="#booking-widget">
                                    <span class="truncate">Book Appointment</span>
                                </a>
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
                                    <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-text-secondary dark:text-gray-400 pb-[13px] pt-4 hover:border-b-accent-blue/50"
                                        href="#">
                                        <p class="text-base font-bold">Schedule</p>
                                    </a>
                                    <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-text-secondary dark:text-gray-400 pb-[13px] pt-4 hover:border-b-accent-blue/50"
                                        href="#">
                                        <p class="text-base font-bold">Reviews</p>
                                    </a>
                                </div>
                            </div>
                            <!-- About & Experience Cards -->
                            <div class="flex flex-col gap-8">
                                <div
                                    class="flex flex-col gap-4 p-6 bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-border-light dark:border-border-dark">
                                    <p class="text-text-primary dark:text-white text-xl font-bold">About Dr. Evelyn Reed
                                    </p>
                                    <p class="text-text-secondary dark:text-gray-400 text-base leading-relaxed">
                                        Dr. Evelyn Reed is a board-certified cardiologist with over 15 years of
                                        experience in treating a wide range of cardiovascular conditions. She is
                                        dedicated to providing compassionate and comprehensive care to all her patients,
                                        focusing on preventative care and patient education.
                                    </p>
                                    <p class="text-text-secondary dark:text-gray-400 text-base">Languages Spoken:
                                        English, Spanish</p>
                                </div>
                                <div
                                    class="flex flex-col gap-4 p-6 bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-border-light dark:border-border-dark">
                                    <p class="text-text-primary dark:text-white text-xl font-bold">Experience &amp;
                                        Education</p>
                                    <ul class="list-disc list-inside text-text-secondary dark:text-gray-400 space-y-2">
                                        <li>Fellowship in Cardiology, General Hospital, 2010</li>
                                        <li>Residency in Internal Medicine, City Medical Center, 2007</li>
                                        <li>MD, University of Medicine, 2004</li>
                                        <li>Board Certified in Cardiology &amp; Internal Medicine</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Appointment Booking Widget -->
                            <div class="flex flex-col gap-6 p-6 bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-border-light dark:border-border-dark"
                                id="booking-widget">
                                <p class="text-text-primary dark:text-white text-xl font-bold">Book an Appointment</p>
                                <!-- Visit Type -->
                                <div class="flex flex-col gap-3">
                                    <label class="font-semibold text-text-primary dark:text-gray-300">Select Visit
                                        Type</label>
                                    <div class="grid grid-cols-2 gap-4">
                                        <button
                                            class="flex items-center justify-center p-3 rounded-lg border-2 border-action-teal bg-action-teal/10 text-action-teal font-semibold">Checkup</button>
                                        <button
                                            class="flex items-center justify-center p-3 rounded-lg border border-border-light dark:border-border-dark text-text-secondary dark:text-gray-400 font-semibold hover:border-gray-400 dark:hover:border-gray-500">Follow-up</button>
                                    </div>
                                </div>
                                <!-- Date Picker and Time Slots -->
                                <div class="flex flex-col gap-4">
                                    <label class="font-semibold text-text-primary dark:text-gray-300">Select a Date
                                        &amp; Time</label>
                                    <div class="p-4 border rounded-lg border-border-light dark:border-border-dark">
                                        <div class="flex items-center justify-between">
                                            <button
                                                class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700"><span
                                                    class="material-symbols-outlined text-text-secondary dark:text-gray-400">chevron_left</span></button>
                                            <p class="font-semibold">October 2024</p>
                                            <button
                                                class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700"><span
                                                    class="material-symbols-outlined text-text-secondary dark:text-gray-400">chevron_right</span></button>
                                        </div>
                                        <div
                                            class="grid grid-cols-7 gap-1 text-center text-sm mt-4 text-text-secondary dark:text-gray-400">
                                            <span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span>
                                        </div>
                                        <div class="grid grid-cols-7 gap-1 text-center mt-2">
                                            <!-- Example dates -->
                                            <span class="text-gray-400">29</span><span class="text-gray-400">30</span>
                                            <span>1</span><span>2</span><span>3</span><span>4</span><span>5</span>
                                            <span>6</span><span>7</span><span>8</span><span>9</span><span>10</span><span>11</span><span>12</span>
                                            <span>13</span><span>14</span><button
                                                class="p-2 rounded-full bg-accent-blue/30 text-blue-800 dark:bg-accent-blue/20 dark:text-white font-semibold">15</button><span>16</span><span>17</span><span>18</span><span>19</span>
                                            <span>20</span><span>21</span><span>22</span><span>23</span><span>24</span><span>25</span><span>26</span>
                                            <span>27</span><span>28</span><span>29</span><span>30</span><span>31</span><span
                                                class="text-gray-400">1</span>
                                        </div>
                                    </div>
                                    <!-- Time Slots -->
                                    <div class="grid grid-cols-3 sm:grid-cols-4 gap-3 pt-2">
                                        <button
                                            class="py-2 px-3 rounded-lg text-center border border-accent-blue text-accent-blue font-semibold hover:bg-accent-blue/10">09:00
                                            AM</button>
                                        <button
                                            class="py-2 px-3 rounded-lg text-center border border-accent-blue text-accent-blue font-semibold hover:bg-accent-blue/10">09:30
                                            AM</button>
                                        <button
                                            class="py-2 px-3 rounded-lg text-center bg-action-teal text-white font-semibold border border-action-teal">10:00
                                            AM</button>
                                        <button
                                            class="py-2 px-3 rounded-lg text-center border border-accent-blue text-accent-blue font-semibold hover:bg-accent-blue/10">11:15
                                            AM</button>
                                        <button
                                            class="py-2 px-3 rounded-lg text-center border border-border-light dark:border-border-dark text-gray-400 cursor-not-allowed">01:00
                                            PM</button>
                                        <button
                                            class="py-2 px-3 rounded-lg text-center border border-accent-blue text-accent-blue font-semibold hover:bg-accent-blue/10">02:30
                                            PM</button>
                                        <button
                                            class="py-2 px-3 rounded-lg text-center border border-accent-blue text-accent-blue font-semibold hover:bg-accent-blue/10">03:00
                                            PM</button>
                                        <button
                                            class="py-2 px-3 rounded-lg text-center border border-accent-blue text-accent-blue font-semibold hover:bg-accent-blue/10">04:15
                                            PM</button>
                                    </div>
                                </div>
                                <button
                                    class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-action-teal text-white text-base font-bold w-full mt-4 transition-colors hover:bg-teal-500">
                                    <span class="truncate">Confirm Booking for 10:00 AM</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('layout.foot')