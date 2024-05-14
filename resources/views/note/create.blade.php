<x-app-layout>
    <div class="note-container single-note">
        <h1 class="mb-4 text-2xl text-center font-sans font-semibold">Create your new note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="note">
            @csrf
            <textarea class="note-title overflow-hidden" rows="1" id="title" name="title" maxlength="15" placeholder="title"></textarea>
            <textarea name="note" rows="3" class="note-body" placeholder="Enter your note here..."></textarea>
            <div class="pr-3 pb-1 text-right">
                <button class="note-submit-button text-white rounded px-5 py-2 inline">Submit</button>
                <button class="note-cancel-button text-white rounded px-5 py-2 inline">
                    <a href="{{ route('note.index') }}">Cancel</a>
                </button>
            </div>
        </form>
    </div>
</x-app-layout>