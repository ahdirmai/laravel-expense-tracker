<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <main class="flex flex-1 flex-col gap-4 p-4 md:gap-8 md:p-10 dark:text-white">
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
                    <div class="p-6 flex flex-col gap-4">
                        <div class="grid gap-2 md:grid-cols-2">
                            <div class="flex flex-col gap-1">
                                <h2 class="text-base font-semibold">Total Spent</h2>
                                <h3 class="text-2xl font-bold">$2,345.67</h3>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-base font-semibold">This Month</h2>
                                <h3 class="text-2xl font-bold">$1,234.56</h3>
                            </div>
                        </div>
                        <div class="flex items-center gap-4"><button
                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-[120px]"
                                data-modal-target="crud-modal" data-modal-toggle="crud-modal">
                                Add Transaction
                            </button>
                            <button
                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-[120px]">
                                Export
                            </button><button
                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-[120px]">
                                Print
                            </button>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm flex flex-col" data-v0-t="card">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <h3 class="text-2xl font-semibold whitespace-nowrap leading-none tracking-tight">Expense
                            Categories</h3>
                        <p class="text-sm text-muted-foreground">
                            Total expenses by category for the last 6 months
                        </p>
                    </div>
                    <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-3 md:flex">
                        <button
                            class="flex items-center justify-center w-full whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                            Show All
                        </button>
                        @for($i = 0; $i < 4; $i++) <button
                            class="flex items-center justify-center w-full whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                            Category {{ $i + 1 }}
                            </button>
                            @endfor
                            <button
                                class="flex items-center justify-center  whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                + Add Category
                            </button>
                    </div>
                </div>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
                    <div class="p-0">
                        <div class="relative w-full overflow-auto">
                            <table class="w-full caption-bottom text-sm">
                                <thead class="[&amp;_tr]:border-b">
                                    <tr
                                        class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                        <th
                                            class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 w-12">
                                            ID</th>
                                        <th
                                            class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            Date</th>
                                        <th
                                            class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                            Amount</th>
                                        <th
                                            class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            Category
                                        </th>
                                        <th
                                            class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            Description
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="[&amp;_tr:last-child]:border-0">
                                    <tr
                                        class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                        <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-semibold">001
                                        </td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            2023-01-15 10:23 AM
                                        </td>
                                        <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">$250.00</td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            Food
                                        </td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            Breakfast at the cafe
                                        </td>
                                    </tr>
                                    <tr
                                        class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                        <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-semibold">002
                                        </td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            2023-01-15 10:23 AM
                                        </td>
                                        <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">$150.00</td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            Travel</td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            Metro ticket
                                        </td>
                                    </tr>
                                    <tr
                                        class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                        <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-semibold">003
                                        </td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            2023-01-15 10:23 AM
                                        </td>
                                        <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">$350.00</td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            Shopping</td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            T-shirt from the mall
                                        </td>
                                    </tr>
                                    <tr
                                        class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                        <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-semibold">004
                                        </td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            2023-01-15 10:23 AM
                                        </td>
                                        <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">$450.00</td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            Bills</td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            Electricity bill
                                        </td>
                                    </tr>
                                    <tr
                                        class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                        <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-semibold">005
                                        </td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            2023-01-15 10:23 AM
                                        </td>
                                        <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">$550.00</td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            Others</td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            Miscellaneous
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    </div>
    {{-- Script --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

    {{-- Modal Section --}}
    {{-- Add Record Expanse Modal --}}

    @push('modal-section')
    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Create New Transaction
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        {{-- Date --}}
                        <div class="col-span-2">
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input datepicker datepicker-buttons datepicker-autoselect-today type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date">
                            </div>
                        </div>
                        {{-- End Date --}}

                        {{-- Type --}}

                        {{-- End Type --}}

                        {{-- categories --}}
                        <div class="col-span-2">
                            <label for="type"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                            <select id="type" onchange="changeCategoryOptions()"
                                class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="expense">Expense</option>
                                <option value="income">Income</option>
                            </select>
                        </div>

                        <div class="col-span-2">
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                            <select id="category"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>Select a type first</option>
                            </select>
                        </div>
                        {{-- End Categories --}}

                        {{-- Amount --}}
                        <div class="col-span-2">
                            <label for="amount"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount</label>
                            <input type="number" name="amount" id="amount"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="$2999" required="">
                        </div>
                        {{-- End Amount --}}



                        <div class="col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                Description</label>
                            <textarea id="description" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Write product description here"></textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Add new Transaction
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endpush
    {{-- End --}}

    @push('scripts')
    <script>
        function changeCategoryOptions() {
                            var typeSelect = document.getElementById("type");
                            var categorySelect = document.getElementById("category");
                            var selectedType = typeSelect.value;
                            categorySelect.innerHTML = "";

                            if (selectedType === "expense") {
                                var expenseCategories = ["Food", "Travel", "Shopping", "Bills", "Others"];
                                expenseCategories.forEach(function (category) {
                                    var option = document.createElement("option");
                                    option.text = category;
                                    categorySelect.add(option);
                                });
                            } else if (selectedType === "income") {
                                var incomeCategories = ["Salary", "Freelance", "Investment", "Gift", "Other"];
                                incomeCategories.forEach(function (category) {
                                    var option = document.createElement("option");
                                    option.text = category;
                                    categorySelect.add(option);
                                });
                            }
                        }

                        // Panggil fungsi pertama kali untuk memastikan opsi yang benar ditampilkan saat halaman dimuat
                        changeCategoryOptions();
    </script>
    @endpush
</x-app-layout>