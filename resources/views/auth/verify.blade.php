<x-master>
	<div class="container mx-auto flex justify-center">
		<div class="px-12 py-8 bg-gray-200 rounded-lg border border-gray-300">
			<div class="col-md-8">
				<div class="font-bold text-lg mb-4">{{ __('Verify Your Email Address') }}</div>


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
								<p class="font-bold">Resent Session</p>
								<p class="text-sm">{{ __('A fresh verification link has been sent to your email address.') }}</p>
							</div>
						</div>
					</div>
				@endif

				{{ __('Before proceeding, please check your email for a verification link.') }}
				{{ __('If you did not receive the email') }},
				<form class="inline" method="POST" action="{{ route('verification.resend') }}">
					@csrf

					<button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">click here to request another</button>
				</form>

			</div>
		</div>
	</div>
</x-master>
