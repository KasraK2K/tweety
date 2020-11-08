<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
	@forelse(current_user()->follows as $user)
		<li class="mb-4">
			<a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
				<img src="{{ $user->avatar }}" alt="your friend avatar" width="40" class="rounded-full mr-2">

				{{ $user->name }}
			</a>
		</li>
	@empty
		<li>No friends yet!</li>
	@endforelse
</ul>