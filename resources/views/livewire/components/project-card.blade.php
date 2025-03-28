<!-- Card -->
<a class="group flex flex-col focus:outline-hidden" href="#">
    <div class="aspect-w-16 aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl dark:bg-neutral-800">
        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl"
            src="{{ $img }}" alt="Blog Image">
    </div>

    <div class="pt-4">
        <h3
            class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-teal-400 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100 dark:text-white">
            {{ $title }}
        </h3>
        <p class="mt-1 text-gray-600 dark:text-neutral-400">
            {{ $description }}
        </p>

        <div class="mt-3 flex flex-wrap gap-2">
            @foreach ( $tags as $tag )
            <span
                class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                {{ $tag }}
            </span>
            @endforeach
        </div>
    </div>
</a>
<!-- End Card -->