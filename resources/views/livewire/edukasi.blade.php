<div>
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col text-center">
                <h2>Edukasi & Informasi 📚</h2>
                <p class="text-muted">Jelajahi berbagai artikel dan informasi bermanfaat dari kami.</p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4">

            @foreach ($konten as $item)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('storage/' . $item['konten_img']) }}" class="card-img-top" alt="{{ $item['judul'] }}" style="height: 220px; object-fit: cover;">

                        <div class="card-body">
                            <h5 class="card-title">{{ $item['judul'] }}</h5>
                            <p class="card-text text-muted">
                                {!! nl2br(e($item['keterangan'])) !!}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
