<x-app-layout>
    <div class="note-container">
        <div class="static">
            {{-- <a href="{{ route('note.create') }}" class="new-note-btn h-16 w-16 align-middle">+</div></a> --}}
            <div class="absolute bottom-10 right-8"><a href="{{ route('note.create') }}" class="fa-solid fa-plus new-note-btn h-16 w-16"></a></div>
        </div>

        <div class="notes">
            @forelse ($notes as $note)
                <div class="relative note w-56 h-48">
                    <div class="note-body overflow-hidden">
                        <p class="font-semibold text-lg font-sans uppercase note-title">{{$note->title}}</p>
                        {{ Str::words($note->note, 14) }}
                    </div>
                    <div class="absolute note-buttons flex justify-end bottom-3 right-0">
                        <a href="{{ route('note.show', $note) }}" class="fa-solid fa-eye fa-xl buttons"></a>
                        <a href="{{ route('note.edit', $note) }}" class="fa-solid fa-pen-to-square fa-xl buttons"></a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="fa-solid fa-trash fa-xl buttons"></button>
                        </form>
                    </div>
                </div>
                @empty
                <p class="text-2xl font-sans font-medium m-auto">You haven't created a note yet.</p>
            @endforelse
        </div>
        <div class=" pl-6 pr-28">
            {{ $notes->links() }} {{-- pagination method provided bt laravel --}}
        </div>
        
    </div>
</x-app-layout>
