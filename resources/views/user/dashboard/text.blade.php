<!--
// v0 by Vercel.
// https://v0.dev/t/4VFeKFQSvjA
-->
<!--$-->
<!--/$-->
<div class="flex flex-col w-full min-h-screen">
    <header class="flex items-center h-16 px-4 border-b shrink-0 md:px-6">
        <nav
            class="flex-col hidden gap-6 text-lg font-medium md:flex md:flex-row md:items-center md:gap-5 md:text-sm lg:gap-6">
            <a class="flex items-center gap-2 text-lg font-semibold md:text-base" href="#" rel="ugc"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="w-6 h-6">
                    <path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z"></path>
                    <path d="m3 9 2.45-4.9A2 2 0 0 1 7.24 3h9.52a2 2 0 0 1 1.8 1.1L21 9"></path>
                    <path d="M12 3v6"></path>
                </svg><span class="sr-only">Acme Inc</span></a><a class="text-gray-500 dark:text-gray-400" href="#"
                rel="ugc">
                Expenses
            </a><a class="text-gray-500 dark:text-gray-400" href="#" rel="ugc">
                Reports
            </a><a class="text-gray-500 dark:text-gray-400" href="#" rel="ugc">
                Categories
            </a>
        </nav>
        <div class="flex items-center w-full gap-4 md:ml-auto md:gap-2 lg:gap-4">
            <form class="flex-1 ml-auto sm:flex-initial">
                <div class="relative"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="absolute left-2.5 top-2.5 h-4 w-4 text-gray-500 dark:text-gray-400">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg><input type="search"
                        class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 pl-8 sm:w-[300px] md:w-[200px] lg:w-[300px]"
                        placeholder="Search expenses..."></div>
            </form><button
                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground rounded-full border border-gray-200 w-8 h-8 dark:border-gray-800"
                type="button" id="radix-:Radafnnja:" aria-haspopup="menu" aria-expanded="false" data-state="closed"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="h-4 w-4">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg><span class="sr-only">Toggle user menu</span></button>
        </div>
    </header>
    <main class="flex flex-1 flex-col gap-4 p-4 md:gap-8 md:p-10">
        <div class="flex items-center gap-4">
            <h1 class="font-semibold text-lg md:text-2xl">Expenses</h1><button
                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 ml-auto">
                New Expense
            </button>
        </div>
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
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-[120px]">
                        Add Expense
                    </button><button
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-[120px]">
                        Export
                    </button><button
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-[120px]">
                        Print
                    </button></div>
            </div>
        </div>
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm flex flex-col" data-v0-t="card">
            <div class="flex flex-col space-y-1.5 p-6">
                <h3 class="text-2xl font-semibold whitespace-nowrap leading-none tracking-tight">Expense Categories</h3>
                <p class="text-sm text-muted-foreground">
                    Total expenses by category for the last 6 months
                </p>
            </div>
            <div class="p-6 flex items-center justify-center">
                <div class="w-[300px] aspect-1">
                    <div style="width:100%;height:100%"></div>
                </div>
            </div>
        </div>
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
            <div class="p-0">
                <div class="relative w-full overflow-auto">
                    <table class="w-full caption-bottom text-sm">
                        <thead class="[&amp;_tr]:border-b">
                            <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
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
                            <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-semibold">001</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                    2023-01-15 10:23 AM
                                </td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">$250.00</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">Food
                                </td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                    Breakfast at the cafe
                                </td>
                            </tr>
                            <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-semibold">002</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                    2023-01-15 10:23 AM
                                </td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">$150.00</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                    Travel</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                    Metro ticket
                                </td>
                            </tr>
                            <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-semibold">003</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                    2023-01-15 10:23 AM
                                </td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">$350.00</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                    Shopping</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                    T-shirt from the mall
                                </td>
                            </tr>
                            <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-semibold">004</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                    2023-01-15 10:23 AM
                                </td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">$450.00</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                    Bills</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                    Electricity bill
                                </td>
                            </tr>
                            <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-semibold">005</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                    2023-01-15 10:23 AM
                                </td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">$550.00</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
                                    Others</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 hidden md:table-cell">
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