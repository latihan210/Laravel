<x-layout title="Login">
    <x-slot name="heading">
        Login
    </x-slot>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="border rounded px-4 py-2 block mt-1"
                value="{{ old('email') }}" required>
            @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" name="password" id="password" class="border rounded px-4 py-2 block mt-1">
            @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>


        <div class="flex items-center gap-x-4">
            <x-button>Login</x-button>
            <x-button as="a" href="/users" variant="secondary">
                Back
            </x-button>
        </div>
    </form>
</x-layout>