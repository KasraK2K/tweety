<h3 class="font-bold text-xl mb-4">Friends</h3>
<ul>
	@foreach(range(1, 8) as $index)
		<li class="mb-4">
			<div class="flex items-center">
				<img src="https://placebeard.it/40/40" alt="" class="rounded-full mr-2">

				John Doe
			</div>
		</li>
	@endforeach
</ul>