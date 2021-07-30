<x-layout>
    <x-slot name="title">
        {{ $post->title }} - My BBS
    </x-slot>
        <div class="back-link">
            &laquo; <a href="{{ route ('posts.index') }}">Back</a>
        </div>

        <h1>
            <span>{{ $post->title }}</span>
            <a href="{{ route('posts.edit', $post) }}">[Edit]</a>
            <form action="{{ route ('posts.destroy', $post) }}" method="post" id="delete_post">
                @method('DELETE')
                @csrf
                <button class="btn">[×]</button>
            </form>
        </h1>

        <p>{!! nl2br(e($post->body))!!}</p>
    </div>
    <script src="{{ url ('js/main.js') }}"></script>
</x-layout>
