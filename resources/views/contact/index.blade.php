<x-app-layout>
    <h1>All posts</h1>
    <a href="{{route('contact.create')}}">create a contact</a>
        @foreach($Contacts as $Contact)
            <li>
                <h2>Title: {{ $Contact->name }}</h2>
                <p>Content: {{ $Contact->email }}</p>
                <p>Content: {{ $Contact->teksts }}</p>
            </li>
        @endforeach
    </ul>
</x-app-layout>