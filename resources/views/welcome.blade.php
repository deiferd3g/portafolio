<x-layouts.app :title="__('Dashboard')">
    <!-- ========== HEADER ========== -->
    @livewire('layouts.header')
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content">
        <!-- About -->
        @livewire('about-section')
        <!-- End About -->

        <!-- technologies -->
        @livewire('technologies-section')
        <!-- End technologies -->

        <!-- Works -->
        @livewire('works-section')
        <!-- End Works -->

        <!-- Testimonials -->
        @livewire('testimonials-section')
        <!-- End Testimonials -->

        <!-- Contact -->
        @livewire('contact-section')
        <!-- End Contact -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    @livewire('layouts.footer')
    <!-- ========== END FOOTER ========== -->

</x-layouts.app>