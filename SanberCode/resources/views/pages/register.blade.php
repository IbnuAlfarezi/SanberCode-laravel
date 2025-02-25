<x-layout title="Register Page">
    <h2 class="text-2xl font-bold text-gray-700 mb-5">Buat Account Baru</h2>
    <form action="/register" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block font-medium text-gray-700">First Name</label>
            <input type="text" name="first_name" class="w-full px-3 py-2 border rounded-lg" value="{{ old('first_name') }}">
            @error('first_name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block font-medium text-gray-700">Last Name</label>
            <input type="text" name="last_name" class="w-full px-3 py-2 border rounded-lg" value="{{ old('last_name') }}">
            @error('last_name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block font-medium text-gray-700">Gender</label>
            <div class="flex gap-4">
                <label><input type="radio" name="gender" value="Man"> Man</label>
                <label><input type="radio" name="gender" value="Woman"> Woman</label>
                <label><input type="radio" name="gender" value="Other"> Other</label>
            </div>
            @error('gender')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block font-medium text-gray-700">Nationality</label>
            <select name="nationality" class="w-full px-3 py-2 border rounded-lg">
                <option value="">-- Pilih Nationality --</option>
                <option value="Indonesia">Indonesia</option>
                <option value="USA">USA</option>
                <option value="UK">UK</option>
            </select>
            @error('nationality')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block font-medium text-gray-700">Language Spoken</label>
            <div class="flex flex-col">
                <label><input type="checkbox" name="languages[]" value="Bahasa Indonesia"> Bahasa Indonesia</label>
                <label><input type="checkbox" name="languages[]" value="English"> English</label>
                <label><input type="checkbox" name="languages[]" value="Arabic"> Arabic</label>
                <label><input type="checkbox" name="languages[]" value="Japanese"> Japanese</label>
            </div>
            @error('languages')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block font-medium text-gray-700">Bio</label>
            <textarea name="bio" class="w-full px-3 py-2 border rounded-lg">{{ old('bio') }}</textarea>
            @error('bio')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Sign Up</button>
    </form>
    </x-layout>
    