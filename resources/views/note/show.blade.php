<x-app-layout>
    <div class="note-container single-note">
        <div class="note">
            <h1>{{ $note->created_at }}</h1>
            <div class="note-title pl-2">
                {{ $note->title }}
            </div>
            <div class="note-body">
                {{ $note->note }}
            </div>
            <div class="note-buttons mt-10 mb-2 pl-5 flex">
                <a href="{{ route('note.edit', $note) }}" class="fa-solid fa-pen-to-square fa-xl show-buttons"></a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="fa-solid fa-trash fa-xl show-buttons"></button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>