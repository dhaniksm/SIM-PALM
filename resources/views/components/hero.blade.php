<section class="px-8 py-20 text-center">
    <h1 class="text-4xl font-bold mb-4">{{ $title }}</h1>
    <p class="text-gray-600 max-w-2xl mx-auto">{{ $subtitle }}</p>

    @if($button ?? false)
        <a href="/login"
           class="mt-6 inline-block px-6 py-3 bg-primary text-white rounded-md">
           {{ $button }}
        </a>
    @endif
</section>