<x-layout title="Report">

    <main class="flex-1 p-8">
        <div class="max-w-7xl mx-auto">
            <header class="mb-8">
                <h2 class="text-3xl font-bold text-text-primary-light dark:text-text-primary-dark">Reports</h2>
                <p class="text-text-secondary-light dark:text-text-secondary-dark mt-1">Manage and review submitted
                    seagrass reports.</p>
            </header>
            <div
                class="bg-surface-light dark:bg-surface-dark rounded-lg border border-border-light dark:border-border-dark overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead
                            class="bg-background-light dark:bg-background-dark text-xs text-text-secondary-light dark:text-text-secondary-dark uppercase tracking-wider">
                            <tr>
                                <th class="px-6 py-3" scope="col">Report ID</th>
                                <th class="px-6 py-3" scope="col">Site</th>
                                <th class="px-6 py-3" scope="col">Date</th>
                                <th class="px-6 py-3" scope="col">Status</th>
                                <th class="px-6 py-3 text-right" scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border-light dark:divide-border-dark">
                            @foreach ($reports as $report)
                                
                            <tr class="hover:bg-background-light dark:hover:bg-background-dark">
                                <td
                                    class="px-6 py-4 whitespace-nowrap font-medium text-text-primary-light dark:text-text-primary-dark">
                                    {{ $report->id }}</td>
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-text-secondary-light dark:text-text-secondary-dark">
                                    {{ $report->location }}</td>
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-text-secondary-light dark:text-text-secondary-dark">
                                    {{ $report->created_at }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-200/50 text-yellow-800 dark:bg-yellow-900/50 dark:text-yellow-300">Submitted</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right space-x-2">
                                    {{ $report->verify ? '<button class="font-medium text-green-500 hover:underline">Verify</button>' : '' }}

                                    <button class="font-medium text-primary hover:underline">View</button>
                                    <button class="font-medium text-red-500 hover:underline">Delete</button>
                                </td>
                            </tr> 

                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <div class="p-4 border-t border-border-light dark:border-border-dark flex items-center justify-between">
                    <span class="text-sm text-text-secondary-light dark:text-text-secondary-dark">Showing 1 to 5 of 20
                        results</span>
                    <div class="inline-flex items-center space-x-1 rounded-DEFAULT">
                        <button
                            class="px-3 py-1 border border-border-light dark:border-border-dark rounded-l-DEFAULT hover:bg-background-light dark:hover:bg-background-dark disabled:opacity-50"
                            disabled="">Previous</button>
                        <button
                            class="px-3 py-1 border-y border-border-light dark:border-border-dark bg-primary/20 dark:bg-primary/30 text-primary">1</button>
                        <button
                            class="px-3 py-1 border-y border-border-light dark:border-border-dark hover:bg-background-light dark:hover:bg-background-dark">2</button>
                        <button
                            class="px-3 py-1 border-y border-border-light dark:border-border-dark hover:bg-background-light dark:hover:bg-background-dark">3</button>
                        <button
                            class="px-3 py-1 border border-border-light dark:border-border-dark rounded-r-DEFAULT hover:bg-background-light dark:hover:bg-background-dark">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-layout>
