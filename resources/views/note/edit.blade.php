<x-app-layout>
    <div class="note-container single-note">
        <h1 class="mb-4 text-2xl text-center font-sans font-semibold">Edit your note here</h1>
        <form action="{{ route('note.update', $note) }}" method="POST" class="note">
            @csrf
            @method('PUT')
            <textarea class="note-title overflow-hidden" id="title" rows="1" name="title" maxlength="15" placeholder="title">{{ $note->title }}</textarea>
            <textarea name="note" class="note-body" rows="3" placeholder="Enter your note here...">{{ $note->note }}</textarea>
            <div class="pr-3 pb-1 text-right">
                <button class="note-submit-button text-white rounded px-5 py-2 inline">
                    Submit
                </button>
                <button class="note-cancel-button text-white rounded px-5 py-2 inline">
                    <a href="{{ route('note.show', $note) }}">Cancel</a>
                </button>
            </div>
        </form>
    </div>
</x-app-layout>