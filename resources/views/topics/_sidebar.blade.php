<a class="text-secondary" href="{{ route('categories.show', $topic->category_id) }}" title="{{ $topic->category->name }}">
    <i class="far fa-folder"></i>
    {{ $topic->category->name }}
</a>
