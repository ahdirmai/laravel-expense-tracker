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
                {{-- any error --}}

                @if($errors->any())
                <div class="flex items-center p-4 text-sm bg-red-50 dark:bg-gray-800 dark:text-red-400 " role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Success</span>
                    <div>
                        <span class="font-medium"> {{$errors->all(':message') }}
                    </div>
                </div>
                @endif

                <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
                    <div class="p-0">
                        <div class="relative w-full overflow-auto">
                            <table class="w-full caption-bottom text-sm">
                                <thead class="[&amp;_tr]:border-b">
                                    <tr
                                        class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                        <th
                                            class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 w-12">
                                            No</th>
                                        <th
                                            class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            Date</th>
                                        <th
                                            class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                            Type</th>
                                        <th
                                            class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            Category
                                        </th>
                                        <th
                                            class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            Amount
                                        </th>

                                        <th
                                            class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            Description
                                        </th>

                                        <th
                                            class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="[&amp;_tr:last-child]:border-0">
                                    @foreach($transactions as $transaction)

                                    <tr
                                        class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                        <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-semibold">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            {{ $transaction->date }}
                                        </td>
                                        <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">{{
                                            ucfirst($transaction->category->type)}}</td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            {{$transaction->category->name}}
                                        </td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            ${{ $transaction->amount }}
                                        </td>

                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            ${{ $transaction->description }}
                                        </td>

                                        {{-- action (edit,delete,show proof (if any)) --}}
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                            <div class="flex items center gap-2">
                                                <button class="text-blue-500 edit-button" data-modal-target="crud-modal"
                                                    data-modal-toggle="crud-modal" data-transaction={{
                                                    json_encode($transaction) }} data-categories={{
                                                    json_encode($categories) }} data-url={{
                                                    route('transaction.update',$transaction->id)
                                                    }}>
                                                    Edit</button>
                                                <button class="text-red-500 delete-button"
                                                    data-modal-target="delete-modal" data-modal-toggle="delete-modal"
                                                    data-url={{ route('transaction.destroy',$transaction->id)
                                                    }}>Delete</button>

                                                <a href="{{ asset('storage/' . $transaction->proof) }}"
                                                    class="text-green-500">Show Proof</a>
                                        </td>
                                    </tr>
                                    @endforeach
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
    @include('user.dashboard.modals.crud-transaction')
    @include('user.dashboard.modals.delete-comfirmation')
    @include('user.dashboard.modals.edit-transaction')
    @endpush
    {{-- End --}}

    @push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
        // Retrieve categories from the data-categories attribute
        var categoriesData = document.getElementById("type").getAttribute("data-categories");
        var categories = JSON.parse(categoriesData);

        // Function to change category options based on the selected type
        function changeCategoryOptions() {
            var typeSelect = document.getElementById("type");
            var categorySelect = document.getElementById("category");
            var selectedType = typeSelect.value;
            categorySelect.innerHTML = "";

            if (selectedType === "expense") {
                categories.expense.forEach(function(category) {
                    var option = document.createElement("option");
                    option.text = category.name;
                    option.value = category.id;
                    categorySelect.add(option);
                });
            } else if (selectedType === "income") {
                categories.income.forEach(function(category) {
                    var option = document.createElement("option");
                    option.text = category.name;
                    option.value = category.id;
                    categorySelect.add(option);
                });
            }
        }

        // Call the function to set initial category options
        changeCategoryOptions();

        // Add event listener to type select element
        var typeSelect = document.getElementById("type");
        typeSelect.addEventListener("change", function() {
            changeCategoryOptions();
        });
    });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Mendapatkan elemen formulir penghapusan
            var deleteForm = document.getElementById("delete-form");

            // Menambahkan event listener ke semua tombol hapus dengan kelas .delete-button
            var deleteButtons = document.querySelectorAll(".delete-button");
            deleteButtons.forEach(function(button) {
                button.addEventListener("click", function(event) {
                    // Mendapatkan URL dari atribut data-url pada tombol yang diklik
                    var url = button.getAttribute("data-url");

                    // Mengubah aksi formulir penghapusan menjadi URL yang didapatkan
                    deleteForm.action = url;

                    // Tampilkan modal penghapusan
                    var deleteModal = document.getElementById("delete-modal");
                    deleteModal.classList.remove("hidden");
                    deleteModal.setAttribute("aria-hidden", "false");
                });
            });
        });
    </script>

    <script>
        // Fungsi untuk menampilkan data transaksi pengguna di modal CRUD
        function renderTransactionData(transaction) {
        var modal = document.getElementById("crud-modal");
        var typeSelect = modal.querySelector("#type");
        var categorySelect = modal.querySelector("#category");
        var amountInput = modal.querySelector("#amount");
        var descriptionTextarea = modal.querySelector("#description");
        var dateInput = modal.querySelector("#date"); // Menambahkan ini untuk mengakses input tanggal

        // Set input values with transaction data
        typeSelect.value = transaction.category.type;
        amountInput.value = transaction.amount;
        descriptionTextarea.value = transaction.description;
        dateInput.value = transaction.date; // Mengatur nilai input tanggal

        // Parse categories data from data-categories attribute
        var categories = JSON.parse(typeSelect.getAttribute("data-categories"));

        // console.log(transaction);

        // Check if categories data is properly parsed and transaction type exists
        if (categories && transaction) {
        categorySelect.innerHTML = "";

        // changeCategoryOptions(categories);
        // Populate category options based on transaction type
        if (transaction.category.type === "expense") {
            categories.expense.forEach(function (category) {
            var option = document.createElement("option");
            option.text = category.name;
            option.value = category.id;
            categorySelect.add(option);
            });
        } else if (transaction.category.type === "income") {
            categories.income.forEach(function (category) {
            var option = document.createElement("option");
            option.text = category.name;
            option.value = category.id;
            categorySelect.add(option);
            });
        }
        // Set selected category
        categorySelect.value = transaction.category.id;
        } else {
        console.error("Categories data or transaction type is undefined:", categories, transaction.type);
        }

    }

        // Rest of your code remains unchanged

        // Fungsi untuk mengubah metode dan tindakan form menjadi PUT dan URL yang diberikan
        function prepareFormForUpdate(url) {
            var method = document.querySelector("#crud-modal form input[name='_method']");
            var button = document.querySelector("#submit-button");
// console.log(button);
            button.innerHTML = "Update";
            console.log(method??'not found');
            if (method) {
                method.value = "PUT";
            } else {
                var methodInput = document.createElement("input");
                methodInput.setAttribute("type", "hidden");
                methodInput.setAttribute("name", "_method");
                methodInput.setAttribute("value", "PUT");
                var form = document.querySelector("#crud-modal form");
                form.appendChild(methodInput);
            }

            var form = document.querySelector("#crud-modal form");
            // form.setAttribute("method", "PUT");
            form.setAttribute("action", url);
        }

        // Mengatur event listener untuk tombol edit
        var editButtons = document.querySelectorAll(".edit-button");
        editButtons.forEach(function (button) {
            button.addEventListener("click", function () {
                var modalTarget = button.getAttribute("data-modal-target");
                var transactionData = JSON.parse(button.getAttribute("data-transaction"));
                var url = button.getAttribute("data-url");

                // Memanggil fungsi untuk menampilkan data transaksi di modal CRUD
                renderTransactionData(transactionData);

                // Memanggil fungsi untuk mengubah metode dan tindakan form menjadi PUT dan URL yang diberikan
                prepareFormForUpdate(url);

                // Menampilkan modal
                var modal = document.getElementById(modalTarget);
                modal.classList.remove("hidden");
            });
        });

        // Mengatur event listener untuk tombol close modal
        var closeModalButtons = document.querySelectorAll("[data-modal-toggle='crud-modal']");
        closeModalButtons.forEach(function (button) {
            button.addEventListener("click", function () {
                var modalTarget = button.getAttribute("data-modal-toggle");
                var modal = document.getElementById(modalTarget);
                modal.classList.add("hidden");
            });
        });
    </script>

    <script>
        // Fungsi untuk menyiapkan form untuk menambahkan transaksi baru
        function prepareFormForAdd() {
            var method = document.querySelector("#crud-modal form input[name='_method']");
            if (method) {
                method.remove(); // Hapus _method input jika sudah ada
            }

            var form = document.querySelector("#crud-modal form");
            form.reset(); // Reset nilai input di dalam form
            var button = document.querySelector("#submit-button");

            // console.log(button);
            button.innerHTML = "Create";

            // Atur aksi form menjadi URL yang sesuai untuk menambahkan transaksi baru
            form.setAttribute("action", "{{ route('transaction.store') }}");
        }

        // Tambahkan event listener ke tombol "Add Transaction"
        var addButton = document.querySelector("[data-modal-target='crud-modal']");
        addButton.addEventListener("click", function() {
            prepareFormForAdd(); // Panggil fungsi untuk menyiapkan form
            var modal = document.getElementById("crud-modal");
            modal.classList.remove("hidden"); // Tampilkan modal
        });
    </script>
    @endpush
</x-app-layout>