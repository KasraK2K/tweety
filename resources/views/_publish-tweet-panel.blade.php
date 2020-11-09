<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
	<form action="/tweets" method="POST">
		@csrf

		<textarea name="body" placeholder="What's up doc?" class="w-full" style="outline: none;" required></textarea>

		<hr class="my-4">

		<footer class="flex justify-between items-center">
			<img src="{{ auth()->user()->avatar }}" width="50" height="50" alt="your avatar" class="rounded-full mr-2">
			<x-button>Publish</x-button>
		</footer>

	</form>

	@error('body')
		<p class="text-red-500 text-sm mt-2">{{ $message }}</p>
	@enderror
</div>