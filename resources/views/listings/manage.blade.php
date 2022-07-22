<x-layout>
    <a href="/" class="inline-block text-black ml-4 mb-4 hover:text-red-600"><i class="fa-solid fa-arrow-left"></i>
        Back
    </a>
    <x-card class="p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage Listings
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless($listings->isEmpty())
                    @foreach ($listings as $listing)
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg ">
                                <a class="hover:text-red-600" href="/listings/{{ $listing->id }}"> {{ $listing->title }} </a>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <a href="/listings/{{ $listing->id }}/edit"
                                    class="text-blue-400 hover:text-blue-600 px-6 py-2 rounded-xl"><i
                                        class="fa-solid fa-pen-to-square"></i>
                                    Edit</a>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg ">
                                <form method="POST" action="/listings/{{ $listing->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500 hover:text-red-600"><i class="fa-solid fa-trash"></i>
                                        Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <p class="text-center">No Listings Found</p>
                        </td>
                    </tr>
                @endunless

            </tbody>
        </table>
    </x-card>
</x-layout>
