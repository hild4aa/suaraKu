<div>
    <div style="width: 400px; margin: 100px auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px;">
        <h2>Login</h2>

        <form wire:submit="login">

            {{-- Ubah dari Email ke Username --}}
            <div style="margin-bottom: 15px;">
                <label for="username">Username</label>
                {{-- ganti type, id, dan wire:model --}}
                <input type="text" id="username" wire:model="username" style="width: 100%; padding: 8px;">
                @error('username') <span style="color: red;">{{ $message }}</span> @enderror
            </div>

            {{-- Input Password (tetap sama) --}}
            <div style="margin-bottom: 15px;">
                <label for="password">Password</label>
                <input type="password" id="password" wire:model="password" style="width: 100%; padding: 8px;">
                @error('password') <span style="color: red;">{{ $message }}</span> @enderror
            </div>

            <div>
                <button type="submit" style="width: 100%; padding: 10px; background-color: #0d6efd; color: white; border: none; border-radius: 5px;">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
