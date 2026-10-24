<x-home-layout>
    <div class="bg-white rounded-lg p-5 md:p-8 shadow-sm">
        <div class="flex flex-wrap justify-between items-center gap-4 border-b pb-5">
            <h1 class="text-2xl font-bold">New Arrivals</h1>

            <form action="/jadwal" method="GET" class="flex flex-wrap items-center gap-2 text-sm">
                <input type="date" name="start_date"
                    class="border rounded-md px-3 py-2 text-gray-500">
                <span class="text-gray-400">to</span>
                <input type="date" name="end_date"
                    class="border rounded-md px-3 py-2 text-gray-500">
                <button type="submit"
                    class="border border-blue-500 text-blue-600 px-4 py-2 rounded-md">
                    CHECK
                </button>
            </form>
        </div>

        @foreach ($shows as $show)
            <section class="flex flex-col md:flex-row gap-5 py-6 border-b">
            <img
                src="{{ !empty($show['image']) ? asset('storage/' . $show['image']) : 'https://placehold.co/600x400?text=No+Image' }}"
                alt="Pertunjukan {{ $show['name'] }}"
                class="w-full md:w-52 h-48 object-cover rounded-lg"
            >
                <div class="flex-1">
                    <div class="flex justify-between gap-3">
                        <h2 class="font-semibold text-gray-900">
                            {{ $show['name'] }}
                        </h2>
                        <span class="text-xs text-gray-400">Available</span>
                    </div>

                    <p class="text-sm text-gray-500 mt-1">
                        {{ $show['location'] }} · {{ $show['date'] }}
                        · {{ $show['time'] }}
                    </p>

                    <p class="text-2xl font-bold text-violet-600 mt-2">
                        Rp{{ number_format($show['price_domestic'], 0, ',', '.') }}
                    </p>

                    <p class="text-sm text-gray-600 mt-3">
                        {{ $show['description'] }}
                    </p>

                    <div class="flex flex-wrap gap-3 mt-5 pt-4 border-t">
                        <a href="{{ route('booking', $show['id']) }}"
                           class="bg-violet-600 text-white px-5 py-2 rounded-full text-sm font-semibold">
                            Book Now
                        </a>

                        <a href="{{ route('detail', $show['id']) }}"
                           class="border border-gray-300 text-gray-700 px-5 py-2 rounded-full text-sm">
                            Check Availability
                        </a>

                        <span class="ml-auto text-violet-600 text-xl">♥</span>
                    </div>

                    <p class="text-xs text-gray-400 mt-3">
                        Kuota tersedia: {{ $show['quota'] }} tiket
                    </p>
                </div>
            </section>
        @endforeach

        <div class="flex justify-center gap-3 mt-6">
            <a href="/jadwal"
               class="border border-gray-200 rounded-md px-4 py-2 text-sm text-gray-600">
                Previous
            </a>
            <a href="/jadwal"
               class="border border-gray-200 rounded-md px-4 py-2 text-sm text-gray-600">
                Next
            </a>
        </div>
    </div>
</x-home-layout>