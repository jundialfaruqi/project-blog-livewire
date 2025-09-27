<div class="card w-full max-w-md bg-base-100 shadow-xl">
    <div class="card-body">
        <h2 class="card-title text-2xl font-bold text-center justify-center mb-6">JWSM TV</h2>

        <form wire:submit.prevent="login">
            @csrf
            <div class="form-control w-full px-4">
                <label class="label mb-2">
                    <span class="label-text flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Email
                    </span>
                </label>
                <input wire:model.defer="email" type="email" id="email" placeholder="email@example.com"
                    class="input input-bordered w-full" />
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-control w-full mt-4 px-4">
                <label class="label mb-2">
                    <span class="label-text flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        Password
                    </span>
                </label>
                <input wire:model.defer="password" type="password" id="password" placeholder="Password"
                    class="input input-bordered w-full" />
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-control w-full mt-4 px-4 flex items-center">
                <input wire:model="remember" type="checkbox" id="remember"
                    class="checkbox checkbox-xs checkbox-primary mr-2">
                <label for="remember" class="text-sm">Ingat saya</label>
            </div>

            <div class="form-control mt-5 px-4">
                <button type="submit" class="btn btn-primary w-full" wire:loading.attr="disabled">Login
                    <span wire:loading class="loading loading-spinner loading-sm"></span>
                </button>
            </div>

            <div class="text-center mt-6">
                <p>Belum punya akun? <a href="#" class="link link-primary">Daftar</a></p>
            </div>
        </form>
    </div>
</div>
