<x-master>
	<div class="container mx-auto flex justify-center">
		<div class="px-12 py-8 bg-gray-200 rounded-lg border border-gray-300">
			<div class="col-md-8">
				<div class="font-bold text-lg mb-4">{{ __('Register') }}</div>

				<form method="POST" action="{{ route('register') }}">
					@csrf

					<div class="mb-6">
						<label for="username"
						       class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
						<input type="text" name="username" id="username" autocomplete="username"
						       value="{{ old('username') }}"
						       class="border border-gray-400 p-2 w-full" autofocus required>
						@error('username')
						<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
						@enderror
					</div>

					<div class="mb-6">
						<label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
						<input type="text" name="name" id="name" autocomplete="name" value="{{ old('name') }}"
						       class="border border-gray-400 p-2 w-full" autofocus required>
						@error('name')
						<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
						@enderror
					</div>

					<div class="mb-6">
						<label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
						<input type="email" name="email" id="email" autocomplete="email" value="{{ old('email') }}"
						       class="border border-gray-400 p-2 w-full" autofocus required>
						@error('email')
						<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
						@enderror
					</div>

					<div class="mb-6">
						<label for="password"
						       class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
						<input type="password" name="password" id="password" autocomplete="password"
						       value="{{ old('password') }}"
						       class="border border-gray-400 p-2 w-full" autofocus required>
						@error('password')
						<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
						@enderror
					</div>

					<div class="mb-6">
						<label for="password-confirm" class="block mb-2 uppercase font-bold text-xs text-gray-700">Confirm
							Password</label>
						<input type="password" name="password_confirmation" id="password-confirm"
						       autocomplete="password-confirm" value="{{ old('password-confirm') }}"
						       class="border border-gray-400 p-2 w-full" autofocus required>
						@error('password-confirm')
						<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
						@enderror
					</div>

					<div>
						<button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">Register</button>

						<a class="text-xs text-gray-700 font-bold" href="{{ route('login') }}">Already Have Account?</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</x-master>
