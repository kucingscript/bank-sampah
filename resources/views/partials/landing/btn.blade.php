<div class="flex space-x-4 text-gray-300">
    @foreach ($btns as $btn)
        <a href="{{ $btn->link }}" class="btn btn__shadow">{{ $btn->title }}</a>
    @endforeach
</div>
