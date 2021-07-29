<x-layout>
    <x-slot name="title">
        My BBS
    </x-slot>
        <ul>
            @forelse($posts as $post)
            <li>
                <a href ="{{route ('posts.show', $post) }}">
                {{ $post->title }}
                </a>
            </li>
            @empty
                <li>値がありません</li>
            @endforelse

        </ul>
</x-layout>

