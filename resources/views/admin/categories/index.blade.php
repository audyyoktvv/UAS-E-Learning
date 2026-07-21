<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Categories') }}
            </h2>
            <a href="{{ route('admin.categories.create') }}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Add New
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                
                @forelse($categories as $category)
                    <div class="item-card flex flex-row justify-between items-center border-b border-gray-100 pb-5 last:border-0 last:pb-0">
                        <div class="flex flex-row items-center gap-x-3">
                            <img src="{{ asset('storage/' . $category->icon) }}" alt="{{ $category->name }}" class="rounded-2xl object-cover w-[120px] h-[90px] bg-gray-50">
                            <div class="flex flex-col">
                                <h3 class="text-indigo-950 text-xl font-bold">{{ $category->name }}</h3>
                            </div>
                        </div>
                        
                        <div class="flex flex-row items-center gap-x-3">
                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="py-2 px-4 bg-indigo-600 text-white rounded-full font-semibold text-sm">
                                Edit
                            </a>
                            
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="py-2 px-4 bg-red-600 text-white rounded-full font-semibold text-sm">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 text-center py-4">Belum ada kategori yang ditambahkan.</p>
                @endforelse

            </div>
        </div>
    </div>
</x-app-layout>