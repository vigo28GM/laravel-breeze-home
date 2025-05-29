<x-app-layout>
    <h1 class="font-semibold text-xl text-gray-800 leading-tight">All contacts</h1>
    <a href="{{route('contact.create')}}"  class="inline-flex items-center bg-blue-500 px-4 py-3 text-white hover:bg-blue-400 rounded">create a contact</a>
        @foreach($Contacts as $Contact)
            <li>
                <h2>Title: {{ $Contact->name }}</h2>
                <p>Content: {{ $Contact->email }}</p>
                <p>Content: {{ $Contact->teksts }}</p>
            </li>
        @endforeach
    </ul>
</x-app-layout>