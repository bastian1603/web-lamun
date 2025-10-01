<x-layout title="lamun">
  <div class="flex-1 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    <div class="mb-8">
        <h2 class="text-3xl font-bold mb-4">Add New Seagrass Group</h2>
        <div
            class="bg-background-light dark:bg-subtle-dark/40 rounded-lg border border-subtle-light dark:border-subtle-dark p-6">
            <form class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div>
                    <label class="block text-sm font-medium mb-1" for="location">Location</label>
                    <input
                        class="w-full bg-subtle-light dark:bg-subtle-dark border-subtle-light dark:border-subtle-dark rounded-md"
                        id="location" placeholder="e.g., Florida Keys" type="text" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1" for="name">Name</label>
                    <input
                        class="w-full bg-subtle-light dark:bg-subtle-dark border-subtle-light dark:border-subtle-dark rounded-md"
                        id="name" placeholder="e.g., Turtle Grass" type="text" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1" for="wide">Wide (m²)</label>
                    <input
                        class="w-full bg-subtle-light dark:bg-subtle-dark border-subtle-light dark:border-subtle-dark rounded-md"
                        id="wide" placeholder="e.g., 500" type="number" />
                </div>
                <div class="md:col-span-2 lg:col-span-1">
                    <label class="block text-sm font-medium mb-1" for="photos">Photos</label>
                    <input
                        class="w-full text-sm text-content-light dark:text-content-dark file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary/20 file:text-primary hover:file:bg-primary/30"
                        id="photos" multiple="" type="file" />
                </div>
                <div class="md:col-span-2 lg:col-span-4 flex justify-end">
                    <button
                        class="bg-primary text-white px-6 py-2 rounded-lg font-semibold flex items-center gap-2 hover:bg-opacity-80 transition-all"
                        type="submit">
                        <span class="material-symbols-outlined">add</span>
                        Add Group
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="flex items-center justify-between mb-8">
        <h2 class="text-3xl font-bold">Existing Seagrass Groups</h2>
    </div>
    <div
        class="overflow-x-auto bg-background-light dark:bg-subtle-dark/40 rounded-lg border border-subtle-light dark:border-subtle-dark">
        <table class="w-full text-left">
            <thead class="border-b border-subtle-light dark:border-subtle-dark">
                <tr>
                    <th class="p-4 font-semibold">Location</th>
                    <th class="p-4 font-semibold">Name</th>
                    <th class="p-4 font-semibold">Wide (m²)</th>
                    <th class="p-4 font-semibold">Photos</th>
                    <th class="p-4 font-semibold text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-subtle-light dark:border-subtle-dark last:border-b-0">
                    <td class="p-4 align-top">Caribbean Sea</td>
                    <td class="p-4 align-top">Syringodium filiforme</td>
                    <td class="p-4 align-top">1200</td>
                    <td class="p-4 align-top">3</td>
                    <td class="p-4 align-top">
                        <div class="flex justify-end items-center gap-4">
                            <button class="font-medium text-primary hover:underline">Edit</button>
                            <button class="font-medium text-red-500 hover:underline">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr class="border-b border-subtle-light dark:border-subtle-dark last:border-b-0">
                    <td class="p-4 align-top">Mediterranean Sea</td>
                    <td class="p-4 align-top">Posidonia oceanica</td>
                    <td class="p-4 align-top">850</td>
                    <td class="p-4 align-top">5</td>
                    <td class="p-4 align-top">
                        <div class="flex justify-end items-center gap-4">
                            <button class="font-medium text-primary hover:underline">Edit</button>
                            <button class="font-medium text-red-500 hover:underline">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr class="border-b border-subtle-light dark:border-subtle-dark last:border-b-0">
                    <td class="p-4 align-top">Australian Coast</td>
                    <td class="p-4 align-top">Zostera muelleri</td>
                    <td class="p-4 align-top">2500</td>
                    <td class="p-4 align-top">8</td>
                    <td class="p-4 align-top">
                        <div class="flex justify-end items-center gap-4">
                            <button class="font-medium text-primary hover:underline">Edit</button>
                            <button class="font-medium text-red-500 hover:underline">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr class="border-b border-subtle-light dark:border-subtle-dark last:border-b-0">
                    <td class="p-4 align-top">Japanese Coast</td>
                    <td class="p-4 align-top">Phyllospadix iwatensis</td>
                    <td class="p-4 align-top">600</td>
                    <td class="p-4 align-top">2</td>
                    <td class="p-4 align-top">
                        <div class="flex justify-end items-center gap-4">
                            <button class="font-medium text-primary hover:underline">Edit</button>
                            <button class="font-medium text-red-500 hover:underline">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr class="border-b border-subtle-light dark:border-subtle-dark last:border-b-0">
                    <td class="p-4 align-top">North American Pacific Coast</td>
                    <td class="p-4 align-top">Zostera marina</td>
                    <td class="p-4 align-top">3200</td>
                    <td class="p-4 align-top">11</td>
                    <td class="p-4 align-top">
                        <div class="flex justify-end items-center gap-4">
                            <button class="font-medium text-primary hover:underline">Edit</button>
                            <button class="font-medium text-red-500 hover:underline">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
  </div>

</x-layout>
