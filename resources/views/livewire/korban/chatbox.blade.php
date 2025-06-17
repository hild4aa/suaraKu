<div>
        <div class="text-center mb-4">
            <h2 class="fw-bold text-primary">Pesan Konsultasi Anda</h2>
            <p class="text-muted">Layanan chat privat antara Anda dan Psikolog.</p>
        </div>

        {{-- DIUBAH: Menggunakan 70vh untuk tinggi yang lebih responsif --}}
    <div wire:poll.5s="loadMessages" id="chat-window" class="card shadow-sm mb-4" style="height: 70vh; overflow-y: auto;">
            <div class="card-body d-flex flex-column">

                @forelse ($messeges as $msg)
                    @if ($msg->id_user == auth()->id())
                        <div class="mb-3 d-flex justify-content-end">
                            <div class="bg-primary text-white p-3 rounded shadow-sm" style="max-width: 75%;">
                                <strong>Anda:</strong>
                                <p class="mb-1" style="white-space: pre-wrap;">{{ $msg->messege }}</p>
                                <small class="text-white-50">{{ $msg->created_at->format('H:i') }}</small>
                            </div>
                        </div>
                    @else
                        <div class="mb-3 d-flex">
                            <div class="bg-light p-3 rounded shadow-sm" style="max-width: 75%;">
                                <strong>{{ $msg->pengirim->name ?? 'Psikolog' }}:</strong>
                                <p class="mb-1" style="white-space: pre-wrap;">{{ $msg->messege }}</p>
                                <small class="text-muted">{{ $msg->created_at->format('H:i') }}</small>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="text-center text-muted align-self-center my-auto">
                        <p>Belum ada pesan. Mulailah percakapan!</p>
                    </div>
                @endforelse

            </div>
        </div>

        <form wire:submit.prevent="kirimPesan">
            <div class="input-group shadow-sm">
                <input type="text" wire:model="pesanBaru" class="form-control form-control-lg" placeholder="Ketik pesan..." required autocomplete="off">
                <button class="btn btn-primary btn-lg" type="submit">
                    <div wire:loading.remove wire:target="kirimPesan">
                        <i class="bi bi-send"></i> Kirim
                    </div>
                    <div wire:loading wire:target="kirimPesan">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Mengirim...
                    </div>
                </button>
            </div>
        </form>



    {{-- Script tidak perlu diubah --}}
<script>
    // Fungsi untuk scroll ke bawah
    function scrollToBottom() {
        const chatWindow = document.getElementById('chat-window');
        if (chatWindow) {
            chatWindow.scrollTop = chatWindow.scrollHeight;
        }
    }

    // Panggil fungsi saat halaman pertama kali dimuat
    document.addEventListener('livewire:initialized', () => {
        scrollToBottom();
    });

    // Dengarkan event 'pesanTerkirim' dari komponen Livewire
    Livewire.on('pesanTerkirim', () => {
        // Beri sedikit jeda agar DOM sempat diperbarui sebelum scroll
        setTimeout(() => {
            scrollToBottom();
        }, 100);
    });
</script>
</div>
