<div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3 items-start">
    <div class="mockup-window border bg-base-100 border-base-300 lg:col-span-2">
        <div class="grid border-t border-base-300 p-4">
            <form wire:submit="save">
                @csrf
                <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 gap-4">
                    {{-- Name Field --}}
                    <div class="form-control">
                        <label class="label mb-2">
                            <span class="label-text font-medium">Nama Lengkap <span class="text-error">*</span></span>
                        </label>
                        <input type="text" wire:model="name" class="input w-full @error('name') input-error @enderror"
                            placeholder="Masukkan nama lengkap">
                        @error('name')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    {{-- Email Field --}}
                    <div class="form-control">
                        <label class="label mb-2">
                            <span class="label-text font-medium">Email <span class="text-error">*</span></span>
                        </label>
                        <input type="email" wire:model="email"
                            class="input w-full @error('email') input-error @enderror" placeholder="Masukkan email">
                        @error('email')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    {{-- Password Field --}}
                    <div class="form-control">
                        <label class="label mb-2">
                            <span class="label-text font-medium">Password <span class="text-error">*</span></span>
                        </label>
                        <input type="password" wire:model="password"
                            class="input w-full @error('password') input-error @enderror"
                            placeholder="Masukkan password">
                        @error('password')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    {{-- Confirm Password Field --}}
                    <div class="form-control">
                        <label class="label mb-2">
                            <span class="label-text font-medium">Konfirmasi Password <span
                                    class="text-error">*</span></span>
                        </label>
                        <input type="password" wire:model="password_confirmation" class="input w-full"
                            placeholder="Konfirmasi password">
                    </div>
                </div>

                {{-- Roles Field (Full Width) --}}
                <div class="form-control mt-4">
                    <label class="label mb-2">
                        <span class="label-text font-medium">Role <span class="text-error">*</span></span>
                    </label>
                    <div
                        class="grid grid-cols-2 md:grid-cols-3 gap-3 p-4 border border-base-300 rounded-lg @error('selectedRoles') @enderror">
                        @foreach ($roles as $role)
                            <label class="label cursor-pointer justify-start gap-3">
                                <input type="checkbox" wire:model="selectedRoles" value="{{ $role->name }}"
                                    class="checkbox checkbox-sm">
                                <span class="label-text">{{ ucfirst($role->name) }}</span>
                            </label>
                        @endforeach
                    </div>
                    @error('selectedRoles')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                {{-- Form Actions --}}
                <div class="flex justify-end gap-3 mt-6">
                    <a href="{{ route('users.index') }}" class="btn btn-sm">Batal</a>
                    <button type="submit" class="btn btn-sm btn-primary">
                        <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Simpan User
                        <span wire:loading class="loading loading-spinner loading-sm"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Information Card (Right - 1 column) --}}
    <div class="lg:col-span-1">
        <div class="card bg-base-100 border border-base-300">
            <div class="card-body">
                <div class="card-title mb-4">
                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <h2 class="text-lg font-semibold">Informasi</h2>
                </div>

                <div class="space-y-4">
                    <div class="alert backdrop-blur-md bg-primary-content/90 border border-white/20 shadow">
                        <div class="text-sm">
                            <p class="font-medium mb-2">Persyaratan Password:</p>
                            <ul class="list-disc list-inside space-y-1">
                                <li>Minimal 8 karakter</li>
                                <li>Kombinasi huruf dan angka</li>
                                <li>Hindari kata yang mudah ditebak</li>
                            </ul>
                        </div>
                    </div>

                    <div class="alert backdrop-blur-md bg-primary-content/70 border border-white/20 shadow">
                        <div class="text-sm">
                            <p class="font-medium mb-2">Catatan Role:</p>
                            <ul class="list-disc list-inside space-y-1">
                                <li>Pilih minimal satu role</li>
                                <li>User dapat memiliki multiple role</li>
                                <li>Role menentukan akses sistem</li>
                            </ul>
                        </div>
                    </div>

                    <div class="alert backdrop-blur-md bg-primary-content/50 border border-white/20 shadow">
                        <div class="text-sm">
                            <p class="font-medium mb-2">Tips:</p>
                            <ul class="list-disc list-inside space-y-1">
                                <li>Email harus unik</li>
                                <li>Gunakan email aktif</li>
                                <li>Periksa data sebelum menyimpan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
