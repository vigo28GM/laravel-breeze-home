<x-app-layout>
    <h1 class="font-semibold text-xl text-gray-800 leading-tight">Create a contact</h1>

    <form action="/contact" method="post">
        @csrf
        <label for="name">vārds: </label>
        <input type="text" id="name" name="name">
        <br>
        <label for="email">E-pasts: </label>
        <input type="email" id="email" name="email">
        <br>
        <label for="teksts">Content: </label>
        <textarea name="teksts" id="teksts"></textarea>
        <br>
        <input type="submit" value="Create" class="inline-flex items-center bg-blue-500 px-4 py-3 text-white hover:bg-blue-400 rounded">
    </form>
</x-app-layout>