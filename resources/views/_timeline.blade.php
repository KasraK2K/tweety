<div class="border border-gray-300 rounded-lg mb-12">
    @forelse ($tweets as $tweet)
        @include('_tweet')
	@empty
		<p class="p-4">No tweets yet.</p>
	@endforelse

</div>

{{ $tweets->links('pagination::tailwind') }}
