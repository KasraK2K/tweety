<x-master>
	<div class="container mx-auto flex justify-center">
		<div class="px-12 py-8 bg-gray-200 rounded-lg border border-gray-300">
			<div class="col-md-8">
				<div class="font-bold text-lg mb-4">{{ __('Reset Password') }}</div>


				@if (session('status'))
					<div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-6"
					     role="alert">
						<div class="flex">
							<div class="py-1">
								<svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg"
								     viewBox="0 0 20 20">
									<path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
								</svg>
							</div>
							<div>
								<p class="font-bold">Status Session</p>
								<p class="text-sm">{{ session('status') }}</p>
							</div>
						</div>
					</div>
				@endif

				<form method="POST" action="{{ route('password.email') }}">
					@csrf

					<div class="mb-6">
						<label for="email"
						       class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
						<input type="email" name="email" id="email" autocomplete="email" value="{{ old('email') }}"
						       class="border border-gray-400 p-2 w-full" autofocus required>
						@error('email')
						<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
						@enderror
					</div>

					<button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">Send Password
						Reset Link
					</button>
				</form>
			</div>
		</div>
	</div>
</x-master>