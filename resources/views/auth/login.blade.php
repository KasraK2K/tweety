<x-master>
	<div class="container mx-auto flex justify-center">
		<div class="px-12 py-8 bg-gray-200 rounded-lg border border-gray-300">
			<div class="col-md-8">
				<div class="font-bold text-lg mb-4">{{ __('Login') }}</div>

				<form method="POST" action="{{ route('login') }}">
					@csrf

					<div class="mb-6">
						<label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
						<input type="email" name="email" id="email" autocomplete="email" value="{{ old('email') }}"
						       class="border border-gray-400 p-2 w-full" required>
						@error('email')
						<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
						@enderror
					</div>

					<div class="mb-6">
						<label for="password"
						       class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
						<input type="password" name="password" id="password" autocomplete="current-password"
						       value="{{ old('password') }}"
						       class="border border-gray-400 p-2 w-full" required>
						@error('password')
						<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
						@enderror
					</div>

					<div class="mb-6 flex items-center">
						<input type="checkbox" name="remember" id="remember" autocomplete="current-password"
						       {{ old('remember') ? 'checked' : '' }}
						       class="mr-1" required>
						<label for="remember"
						       class="text-xs text-gray-700 font-bold uppercase">Remember Me</label>
						@error('remember')
						<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
						@enderror
					</div>

					<div class="flex">
						<button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">Submit</button>

						<div class="flex flex-col justify-between">
							<a class="text-xs text-gray-700 font-bold" href="{{ route('register') }}">Create Account</a>
							<a class="text-xs text-gray-700 font-bold" href="{{ route('password.request') }}">Forgot Your Password?</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</x-master>
