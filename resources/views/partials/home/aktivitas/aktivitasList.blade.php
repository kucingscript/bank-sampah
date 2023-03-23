@foreach ($activities as $activity)
    <span
        class="flex items-center mb-4 justify-start p-3 font-semibold text-white bg-gray-800 rounded-full w-[80%] sm:w-1/2">
        <div class="w-5 h-5 mr-4 rounded-full sm:w-6 sm:h-6 bg-linearGreen"></div>
        <span class="sm:text-sm text-xs">{{ $activity->title }}</span>
    </span>
@endforeach
