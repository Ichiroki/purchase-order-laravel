<div class="mt-12">
    <div class="flex justify-between items-center">
        <x-heading>Items</x-heading>
        <x-modal-crud>
            <x-slot name="button">
                Create New Items
            </x-slot>
            <x-slot name="title">
                Create New Items
            </x-slot>
            <x-slot name="form">
                <form class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <x-label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</x-label>
                            <x-input type="text" name="name" id="name" placeholder="Type product name" />
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <x-label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</x-label>
                            <x-input type="number" name="price" id="price" placeholder="$2999" />
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <x-label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</x-label>
                            <x-input type="number" name="quantity" id="quantity" placeholder="$2999" />
                        </div>
                        <div class="col-span-2">
                            <x-label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</x-label>
                            <x-textarea id="description" rows="4" placeholder="Write product description here"></x-textarea>
                        </div>
                    </div>
                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        Add new product
                    </button>
                </form>
            </x-slot>
        </x-modal-crud>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Color
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @php $i = 1 @endphp
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $i++ }}
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
