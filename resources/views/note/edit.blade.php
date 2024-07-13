<x-layout>
    <div class="note-container single-note">
        <h1>Edit your note</h1>
        <form action="{{ route('note.update', $note) }}" class="note" method="POST">
            @csrf
            @method('PUT')
            <textarea name="note" rows="10" class="note-body">
                {{ $note->note }}
            </textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>
