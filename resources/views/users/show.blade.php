<x-layout title="Users">
    <x-slot name="heading">
        Detail User
    </x-slot>
    <div class="sm:flex sm:justify-end">
        <div class="mt-4 mb-4 sm:mt-0 sm:flex-none">
            <x-button as="a" href="/users" variant="secondary">
                Back
            </x-button>
        </div>
    </div>
    <div class="bg-white shadow-md rounded p-6">
        <h2 class="text-2xl font-semibold mb-4">{{ $user->name }}</h2>
        <p class="text-gray-700 mb-2"><strong>Email:</strong> {{ $user->email }}</p>
        <p class="text-gray-700"><strong>Joined:</strong> {{ $user->created_at->format('F j, Y') }}</p>
    </div>
</x-layout>