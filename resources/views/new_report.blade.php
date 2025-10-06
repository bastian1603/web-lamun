@php
    $login = Auth::check();
@endphp

<x-layout title="New Report">

    <h1 class="text-white">{{ session('success') }}</h1>

    <div class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="max-w-3xl mx-auto">

            <div class="mb-8">
                <h2 class="text-3xl font-bold tracking-tight">Upload Seagrass Report</h2>
                <p class="mt-2 text-muted-foreground-light dark:text-muted-foreground-dark">
                    Contribute to our research by submitting your seagrass observations.
                </p>
            </div>
            <div class="space-y-8">
                <form action="/report" method="POST">
                @csrf


                <div
                    class="bg-card-light dark:bg-card-dark p-6 rounded-xl border border-border-light dark:border-border-dark">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @if (!$login)
                        <div class="space-y-2">
                            <label class="text-sm font-medium" for="name">name</label>
                            <input
                                class="w-full rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary/50 text-sm"
                                id="name" placeholder="e.g., Biscayne Bay, Florida" type="text" name="name"/>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-medium" for="phone_no">Phone no</label>
                            <input
                                class="w-full rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary/50 text-sm"
                                id="phone_no" placeholder="e.g., Biscayne Bay, Florida" type="text" name="phone_no"/>
                        </div>

                        @endif

                        <div class="space-y-2">
                            <label class="text-sm font-medium" for="location">Location</label>
                            <input
                                class="w-full rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary/50 text-sm"
                                id="location" placeholder="e.g., Biscayne Bay, Florida" type="text" name="location"/>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-medium" for="seagrass-group">Seagrass Group</label>
                            <select
                                class="w-full rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary/50 text-sm appearance-none form-select"
                                id="seagrass-group"
                                name="lamun_group_id">
                                <option>Select a group</option>
                                @foreach ($lamun_groups as $lamun_group)
                                    <option value="{{$lamun_group->id}}">{{$lamun_group->name}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-card-light dark:bg-card-dark p-6 rounded-xl border border-border-light dark:border-border-dark">
                    <div class="space-y-2">
                        <label class="text-sm font-medium" for="file-upload">Report Photos</label>
                        <div
                            class="mt-2 flex justify-center rounded-xl border-2 border-dashed border-border-light dark:border-border-dark px-6 pt-10 pb-12">
                            <div class="text-center">
                                <span
                                    class="material-symbols-outlined text-5xl text-muted-foreground-light dark:text-muted-foreground-dark">
                                    cloud_upload </span>
                                <p class="mt-4 text-sm text-foreground-light dark:text-foreground-dark">
                                    <span class="font-semibold text-primary">Click to upload</span> or drag and drop
                                </p>
                                <p class="text-xs text-muted-foreground-light dark:text-muted-foreground-dark">PNG, JPG,
                                    GIF up to 10MB</p>
                            </div>
                            <input class="sr-only" id="file-upload" multiple="" name="file-upload" type="file" />
                        </div>
                    </div>
                </div>
                <div class="flex justify-end pt-4">
                    <button
                        class="inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-xl text-white bg-primary hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary/50 dark:focus:ring-offset-background-dark"
                        type="submit">
                        Submit Report
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Open the modal using ID.showModal() method -->
    <button class="btn" onclick="success_modal.showModal()">success modal</button>
    <dialog id="success_modal" class="modal">
    <div class="modal-box">
        <h3 class="text-lg font-bold">Hello!</h3>
        <p class="py-4">{{ session('success') }}</p>
        <div class="modal-action">
        <form method="dialog">
            <!-- if there is a button in form, it will close the modal -->
            <button class="btn">Close</button>
        </form>
        </div>
    </div>
    </dialog>

    <button class="btn" onclick="error_modal.showModal()">error modal</button>
    <dialog id="error_modal" class="modal">
    <div class="modal-box">
        <h3 class="text-lg font-bold">Hello!</h3>
        <p class="py-4">{{ session('error') }}</p>
        <div class="modal-action">
        <form method="dialog">
            <!-- if there is a button in form, it will close the modal -->
            <button class="btn">Close</button>
        </form>
        </div>
    </div>
    </dialog>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            @if(session('success'))
                success_modal.showModal();
            @endif
            
            @if(session('error'))
                error_modal.showModal();
            @endif
        })
    </script>

</x-layout>
