<form class="w-full gap-4 flex justify-center items-stretch" enctype="multipart/form-data" method="POST">
    <aside class="w-1/3 p-4 gap-4 flex flex-col justify-start items-center border border-gray-200 dark:border-gray-600 rounded-xl">
        <label for="cover_image"
            class="flex flex-col items-center justify-center w-full h-64 rounded-xl border-2 border-dashed border-gray-300 bg-gray-50 cursor-pointer transition-colors
                   hover:bg-gray-100 hover:border-gray-400
                   dark:bg-gray-700 dark:border-gray-600
                   dark:hover:bg-gray-600 dark:hover:border-gray-500">
            <div class="flex flex-col items-center justify-center px-4 pt-5 pb-6 text-center">
                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" fill="none" viewBox="0 0 20 16"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5
                                 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                </svg>
                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                    <span class="font-semibold">Click to upload 'Cover Image'</span> or drag and drop
                </p>
                <p class="text-xs text-gray-500 dark:text-gray-400">
                    JPG, PNG, JPEG (Max. 800x400px)
                </p>
            </div>
            <input id="cover_image" name="cover_image" type="file" accept="image/*" class="hidden" />
        </label>
        <section class="w-full flex flex-col justify-start items-center">
            <span class="w-full">
                <select id="category_id" name="category_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected disabled>Select a category</option>
                    <option value="1">Technology</option>
                    <option value="2">Lifestyle</option>
                    <option value="3">Travel</option>
                    <option value="4">Education</option>
                    <option value="5">Health</option>
                </select>
            </span>
        </section>
    </aside>

    <main class="w-3/4 p-4 flex flex-col gap-4 border border-gray-200 dark:border-gray-600 rounded-xl">
        <section class="w-full">
            <label for="short_description" class="block text-sm font-medium text-gray-700 dark:text-white mb-1">
                Short Description
            </label>
            <input type="text" id="short_description"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Short Description" required />
        </section>

        <section class="w-full">
            <label for="body" class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Body</label>
            <textarea id="body" name="body" rows="20"
                class="resize-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Body" required></textarea>
        </section>
    </main>
</form>
