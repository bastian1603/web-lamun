<x-layout title="lamun">
    <div class="flex-1 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8">
            <h2 class="text-3xl font-bold mb-4">Add New Seagrass Group</h2>
            <div
                class="bg-background-light dark:bg-subtle-dark/40 rounded-lg border border-subtle-light dark:border-subtle-dark p-6">
                <form class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" action="/lamun" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium mb-1" for="location">Location</label>
                        <input
                            class="w-full bg-subtle-light dark:bg-subtle-dark border-subtle-light dark:border-subtle-dark rounded-md"
                            id="location" placeholder="e.g., Florida Keys" type="text" name="location"/>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1" for="name">Name</label>
                        <input
                            class="w-full bg-subtle-light dark:bg-subtle-dark border-subtle-light dark:border-subtle-dark rounded-md"
                            id="name" placeholder="e.g., Turtle Grass" type="text" name="name"/>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1" for="condition">condition</label>
                        <input
                            class="w-full bg-subtle-light dark:bg-subtle-dark border-subtle-light dark:border-subtle-dark rounded-md"
                            id="condition" placeholder="e.g., Turtle Grass" type="text" name="condition"/>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1" for="wide">Wide (m²)</label>
                        <input
                            class="w-full bg-subtle-light dark:bg-subtle-dark border-subtle-light dark:border-subtle-dark rounded-md"
                            id="wide" placeholder="e.g., 500" type="number" name="wide"/>
                    </div>
                    <div class="md:col-span-2 lg:col-span-1">
                        <label class="block text-sm font-medium mb-1" for="pics">Photos</label>
                        <input
                            class="w-full text-sm text-content-light dark:text-content-dark file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary/20 file:text-primary hover:file:bg-primary/30"
                            id="pics" multiple type="file" name="pics[]"/>
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
                    @foreach ($lamun_groups as $lamun_group)
                        <tr class="border-b border-subtle-light dark:border-subtle-dark last:border-b-0">
                            <td class="p-4 align-top">{{ $lamun_group->location }}</td>
                            <td class="p-4 align-top">{{ $lamun_group->name }}</td>
                            <td class="p-4 align-top">{{ $lamun_group->wide }}</td>
                            <td class="p-4 align-top">
                                <div class="flex items-center gap-2">
                                    <img alt="Syringodium filiforme" class="w-16 h-12 object-cover rounded-md"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxorGTM-cn9xOryzFuhvHMdxRMV1QgRwlYyRQAHwGUGduop9WcjasVLwQGtci1o1O0nbOguWVQ35SqCxAgRQknILmgK9aWnRkqwe6nEx_RN8onNsma6wWny_7lasuJdiV321nQ0DJfVm9FVa4ipH8lnMxCFGg8_DdujhZJ1ZWYuXD7LdSnp0L8JFKa3rbn6pi6TxeW1qmInul2HWr5GPPZQeR9muD3uTlc0U3qbJQyHcjf14EHhZ7x8OjNt_yzfNTBsF1aDbY0ZtM" />
                                    <img alt="Syringodium filiforme" class="w-16 h-12 object-cover rounded-md"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCcqN79e8Dz4cIpn87VbGv3p5edqEnF6rx2aWptH1wzLteuqmxynsSZKRIcxPwkNDipwnCwh3iOsP7yLPdGH2wxzJoLqrwa-BTOhW5uzUncMWTy1eotEKj4iw2807DjNafxE9VIW8F-TIb0vdr-TM9G7FtM-XwHEm26wv9IOp9xyFbghRcbsOOLH2s1u41KmQjOI-ZXVEN1NJGzJOqASF75viV53O-B_ddkc2ym0Q2wgDCfbvBmwfM2W7ss9VUNSsXe8mylCWs3HGM" />
                                    <div
                                        class="w-16 h-12 rounded-md bg-subtle-light dark:bg-subtle-dark flex items-center justify-center font-bold text-lg">
                                        +1</div>
                                </div>
                            </td>
                            <td class="p-4 align-top">
                                <div class="flex justify-end items-center gap-4">
                                    <button class="font-medium text-primary hover:underline"
                                        onclick="
                                            open_edit('{{ $lamun_group->id }}', '{{ $lamun_group->name }}', '{{ $lamun_group->location }}', '{{ $lamun_group->wide }}', '{{ $lamun_group->condition }}')"
                                    >Edit</button>
                                    <button class="font-medium text-red-500 hover:underline"
                                        onclick="open_delete('{{ $lamun_group->id }}')"
                                    >Delete</button>
                                </div>
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <dialog id="edit_modal" class="modal">
        <div class="modal-box w-11/12 max-w-5xl">
            <h3 class="text-lg font-bold">Hello!</h3>
            <form id="update_form" method="POST">
                @csrf
                @method("PATCH")
                <br>

                <label class="floating-label">
                    <input type="text" placeholder="Medium" class="input input-md" name="name" id="edit_name"/>
                    <span>Name</span>
                </label>
                <br>

                <label class="floating-label">
                    <input type="text" placeholder="Medium" class="input input-md" name="location" id="edit_location"/>
                    <span>Location</span>
                </label>
                <br>
    
                <label class="floating-label">
                    <input type="float" placeholder="Medium" class="input input-md" name="wide" id="edit_wide"/>
                    <span>Wide</span>
                </label>
                <br>

                <label class="floating-label">
                    <input type="text" placeholder="Medium" class="input input-md" name="condition" id="edit_condition"/>
                    <span>Condition</span>
                </label>
                <br>    

                <button class="btn btn-soft btn-error">Error</button>
                
            </form>
        </div>
    </dialog>

    <dialog id="delete_modal" class="modal">
        <div class="modal-box w-11/12 max-w-5xl">
            <h3 class="text-lg font-bold">Hello!</h3>
            <form id="delete_form" action="" method="POST">
                @csrf
                @method("DELETE")
                
                <button class="btn btn-soft btn-error">Error</button>

            </form>
        </div>
    </dialog>

    <script>
        function open_edit(id, name, location, wide, condition){
            document.getElementById('edit_name').value = name;
            document.getElementById('edit_location').value = location;
            document.getElementById('edit_wide').value = wide;
            document.getElementById('edit_condition').value = condition;

            document.getElementById('update_form').action = '/lamun/' + id;

            edit_modal.showModal();
        }

        function open_delete(id){
            document.getElementById('delete_form').action = '/lamun/' + id;
            delete_modal.showModal()
        }
    </script>

</x-layout>
