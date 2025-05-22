<x-app-layout>
    <h1>Create a contact</h1>

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
        <input type="submit" value="Create">
    </form>
</x-app-layout>