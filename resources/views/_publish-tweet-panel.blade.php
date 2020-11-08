<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
	<form action="/tweets" method="POST">
		@csrf

		<textarea name="body" placeholder="What's up doc?" class="w-full" style="outline: none;"></textarea>

		<hr class="my-4">

		<footer class="flex justify-between">
			<img src="{{ auth()->user()->avatar }}" width="40" alt="your avatar" class="rounded-full mr-2">
			<button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-6 text-white">Publish</button>
		</footer>

	</form>

	@error('body')
		<p class="text-red-500 text-sm mt-2">{{ $message }}</p>
	@enderror
</div>