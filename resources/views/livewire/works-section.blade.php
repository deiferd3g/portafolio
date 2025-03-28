<div class="max-w-7xl px-4 sm:px-6 lg:px-8 py-12 lg:py-24 mx-auto">
    <div class="mb-6 sm:mb-10 max-w-2xl text-center mx-auto">
        <h1 class="font-medium text-black text-2xl sm:text-4xl dark:text-white">
            Latest work
        </h1>
    </div>

    <!-- Card Grid -->
    <div class=" grid grid-cols-1 sm:grid-cols-2 gap-8 lg:gap-12">

        @livewire('components.project-card', [
        'title' => 'Salud en Casa',
        'img' => asset('img/projects/sec.png'),
        'description' => 'Cursos y eventos en linea.',
        'tags' => [
            'Laravel',
            'Stripe',
            'Zoom',
        ]
        ])

        @livewire('components.project-card', [
        'title' => 'Constructores',
        'img' => asset('img/projects/constructor.png'),
        'description' => 'Plataforma de habitos personales para emprendedores.',
        'tags' => [
            'Laravel'
        ]
        ])

        @livewire('components.project-card', [
        'title' => 'Playlist',
        'img' => asset('img/projects/playlist.png'),
        'description' => 'Plataforma de audios en linea.',
        'tags' => [
            'Laravel'
        ]
        ])

        @livewire('components.project-card', [
        'title' => 'Editorial TASH',
        'img' => asset('img/projects/tash.png'),
        'description' => 'Venta de libros en línea.',
        'tags' => [
            'Laravel',
            'Stripe',
            'Filament',
            'Livewire',
            'Tailwind'
        ]
        ])

    </div>
    <!-- End Card Grid -->

    <div class="mt-10 lg:mt-20 text-center">
        <a class="relative inline-block font-medium md:text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-teal-400 hover:before:bg-black focus:outline-hidden focus:before:bg-black dark:text-white dark:hover:before:bg-white dark:focus:before:bg-white"
            href="#">
            View all Work
        </a>
    </div>
</div>