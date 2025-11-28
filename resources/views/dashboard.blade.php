@include('layout.head')

<main class="flex flex-1 justify-center py-5 px-4 sm:px-8">
    <div class="layout-content-container flex flex-col w-full max-w-5xl flex-1">
        <div class="flex flex-wrap justify-between items-center gap-4 p-4">
            <h1 class="text-app-text-primary text-4xl font-black leading-tight tracking-[-0.033em] min-w-72">
                Find Care by Specialty</h1>
        </div>
        <div class="px-4 py-3">
            <label class="flex flex-col min-w-40 h-14 w-full">
                <div class="flex w-full flex-1 items-stretch rounded-xl h-full shadow-sm">
                    <div
                        class="text-app-text-secondary flex bg-white items-center justify-center pl-4 rounded-l-xl border-y border-l border-gray-200">
                        <span class="material-symbols-outlined">search</span>
                    </div>
                    <input
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-r-xl text-app-text-primary focus:outline-0 focus:ring-2 focus:ring-app-primary/50 border-y border-r border-gray-200 bg-white h-full placeholder:text-app-text-secondary px-4 pl-2 text-base font-normal leading-normal"
                        placeholder="Search for a specialty like 'Cardiology'..." value="" />
                </div>
            </label>
        </div>
        <div class="grid grid-cols-[repeat(auto-fill,minmax(200px,1fr))] gap-6 p-4">
            <div class="flex flex-1 cursor-pointer flex-col gap-3 rounded-xl border border-gray-200/80 bg-app-card-bg p-5 shadow-md shadow-gray-200/50 transition-all hover:-translate-y-1 hover:shadow-lg">
                <div class="text-app-secondary">
                    <span class="material-symbols-outlined" style="font-size: 32px;">cardiology</span>
                </div>
                <div class="flex flex-col gap-1">
                    <h2 class="text-app-text-primary text-lg font-bold leading-tight">Cardiology</h2>
                    <p class="text-app-text-secondary text-sm font-normal leading-normal">Heart and blood
                        vessels</p>
                </div>
            </div>
            <div class="flex flex-1 cursor-pointer flex-col gap-3 rounded-xl border border-gray-200/80 bg-app-card-bg p-5 shadow-md shadow-gray-200/50 transition-all hover:-translate-y-1 hover:shadow-lg">
                <div class="text-app-secondary">
                    <span class="material-symbols-outlined" style="font-size: 32px;">dentistry</span>
                </div>
                <div class="flex flex-col gap-1">
                    <h2 class="text-app-text-primary text-lg font-bold leading-tight">Dentistry</h2>
                    <p class="text-app-text-secondary text-sm font-normal leading-normal">Teeth and oral
                        health</p>
                </div>
            </div>
            <div class="flex flex-1 cursor-pointer flex-col gap-3 rounded-xl border border-gray-200/80 bg-app-card-bg p-5 shadow-md shadow-gray-200/50 transition-all hover:-translate-y-1 hover:shadow-lg">
                <div class="text-app-secondary">
                    <span class="material-symbols-outlined" style="font-size: 32px;">neurology</span>
                </div>
                <div class="flex flex-col gap-1">
                    <h2 class="text-app-text-primary text-lg font-bold leading-tight">Neurology</h2>
                    <p class="text-app-text-secondary text-sm font-normal leading-normal">Nervous system
                        disorders</p>
                </div>
            </div>
            <div class="flex flex-1 cursor-pointer flex-col gap-3 rounded-xl border border-gray-200/80 bg-app-card-bg p-5 shadow-md shadow-gray-200/50 transition-all hover:-translate-y-1 hover:shadow-lg">
                <div class="text-app-secondary">
                    <span class="material-symbols-outlined" style="font-size: 32px;">child_care</span>
                </div>
                <div class="flex flex-col gap-1">
                    <h2 class="text-app-text-primary text-lg font-bold leading-tight">Pediatrics</h2>
                    <p class="text-app-text-secondary text-sm font-normal leading-normal">Infants,
                        children,
                        and teens</p>
                </div>
            </div>
            <div class="flex flex-1 cursor-pointer flex-col gap-3 rounded-xl border border-gray-200/80 bg-app-card-bg p-5 shadow-md shadow-gray-200/50 transition-all hover:-translate-y-1 hover:shadow-lg">
                <div class="text-app-secondary">
                    <span class="material-symbols-outlined" style="font-size: 32px;">orthopedics</span>
                </div>
                <div class="flex flex-col gap-1">
                    <h2 class="text-app-text-primary text-lg font-bold leading-tight">Orthopedics</h2>
                    <p class="text-app-text-secondary text-sm font-normal leading-normal">Bones, joints,
                        and muscles</p>
                </div>
            </div>
            <div class="flex flex-1 cursor-pointer flex-col gap-3 rounded-xl border border-gray-200/80 bg-app-card-bg p-5 shadow-md shadow-gray-200/50 transition-all hover:-translate-y-1 hover:shadow-lg">
                <div class="text-app-secondary">
                    <span class="material-symbols-outlined" style="font-size: 32px;">gastroenterology</span>
                </div>
                <div class="flex flex-col gap-1">
                    <h2 class="text-app-text-primary text-lg font-bold leading-tight">Gastroenterology</h2>
                    <p class="text-app-text-secondary text-sm font-normal leading-normal">Digestive system
                        care</p>
                </div>
            </div>
            <div class="flex flex-1 cursor-pointer flex-col gap-3 rounded-xl border border-gray-200/80 bg-app-card-bg p-5 shadow-md shadow-gray-200/50 transition-all hover:-translate-y-1 hover:shadow-lg">
                <div class="text-app-secondary">
                    <span class="material-symbols-outlined" style="font-size: 32px;">dermatology</span>
                </div>
                <div class="flex flex-col gap-1">
                    <h2 class="text-app-text-primary text-lg font-bold leading-tight">Dermatology</h2>
                    <p class="text-app-text-secondary text-sm font-normal leading-normal">Skin, hair, and
                        nails</p>
                </div>
            </div>
            <div class="flex flex-1 cursor-pointer flex-col gap-3 rounded-xl border border-gray-200/80 bg-app-card-bg p-5 shadow-md shadow-gray-200/50 transition-all hover:-translate-y-1 hover:shadow-lg">
                <div class="text-app-secondary">
                    <span class="material-symbols-outlined" style="font-size: 32px;">ophthalmology</span>
                </div>
                <div class="flex flex-col gap-1">
                    <h2 class="text-app-text-primary text-lg font-bold leading-tight">Ophthalmology</h2>
                    <p class="text-app-text-secondary text-sm font-normal leading-normal">Eye care and
                        vision</p>
                </div>
            </div>
        </div>
    </div>
</main>
@include('layout.foot')