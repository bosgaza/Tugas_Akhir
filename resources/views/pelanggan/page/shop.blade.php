@extends('pelanggan.layout.index')

@section('content')
    <div class="d-flex flex-row gap-2 mt-4">
        <div class="" style="width: 30%;">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Daftar Produk Android Terbaru 2024 Yang Tersedia
                </div>
                <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Xiaomi
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="d-flex flex-column gap-4">
                                        <div class="d-flex flex-row gap-3">
                                            <input type="checkbox" name="kategory" class="kategory" value="celana Pria">
                                            <span>Redmi Note 13 Pro 4G</span>
                                        </div>
                                        <div class="d-flex flex-row gap-3">
                                            <input type="checkbox" name="kategory" class="kategory" value="baju Pria">
                                            <span>Poco X6</span>
                                        </div>
                                        <div class="d-flex flex-row gap-3">
                                            <input type="checkbox" name="kategory" class="kategory" value="aksesoris Pria">
                                            <span>Xiaomi Redmi 13C</span>
                                        </div>
                                        <div class="d-flex flex-row gap-3">
                                            <input type="checkbox" name="kategory" class="kategory" value="aksesoris Pria">
                                            <span>Xiaomi 13 Pro</span>
                                        </div>
                                        <div class="d-flex flex-row gap-3">
                                            <input type="checkbox" name="kategory" class="kategory" value="aksesoris Pria">
                                            <span>Xiaomi 14 Pro</span>
                                        </div>
                                        <div class="d-flex flex-row gap-3">
                                            <input type="checkbox" name="kategory" class="kategory" value="aksesoris Pria">
                                            <span>Xiaomi 13T Pro</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Infinix
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body p-0">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-column gap-4">
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="celana Wanita">
                                                <span>Infinix Note 40 pro+ 5G</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="celana Wanita">
                                                <span>Infinix Note 40 pro 4G</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory" value="baju Wanita">
                                                <span>Infinix Zero 40 pro 4G</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="aksesoris Wanita">
                                                <span>Infinix Note 30</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="celana Wanita">
                                                <span>Infinix Smart 8 Pro</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="celana Wanita">
                                                <span>Infinix Hot 40i</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Vivo
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="accordion-body p-0">
                                        <div class="d-flex flex-column gap-4">
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="celana anak-anak">
                                                <span>Vivo Y03</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="baju anak-anak">
                                                <span>Vivo Y17</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="aksesoris anak-anak">
                                                <span>Vivo Y28</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="aksesoris anak-anak">
                                                <span>Vivo Y27s 5G</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="aksesoris anak-anak">
                                                <span>Vivo Y100 5G</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="aksesoris anak-anak">
                                                <span>Vivo V30e</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-wrap gap-4 mb-5" id="filterResult">
            @if ($data->isEmpty())
                <h1>Belum ada product ...!</h1>
            @else
                @foreach ($data as $p)
                    <div class="card" style="width:200px;">
                        <div class="card-header m-auto">
                            <img src="{{ asset('storage/product/' . $p->foto) }}" alt="baju 1"
                                style="width: 100%;height:130px; object-fit: cover; padding:0;">
                        </div>
                        <div class="card-body">
                            <p class="m-0 text-justify" style="font-size: 14px;"> {{ $p->nama_product }} </p>
                            <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
                        </div>
                        <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                            <p class="m-0" style="font-size: 14px; font-weight:600;"><span>IDR
                                </span>{{ number_format($p->harga) }}</p>
                            <button class="btn btn-outline-primary" style="font-size:24px">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
    <div class="pagination d-flex flex-row justify-content-between">
        <div class="showData">
            Data ditampilkan {{ $data->count() }} dari {{ $data->total() }}
        </div>
        <div>
            {{ $data->links() }}
        </div>
    </div>
    @endif

    <script>
        $(document).ready(function() {
            $('.kategory').change(function(e) {
                e.preventDefault();
                var value = $(this).val();
                var split = value.split(' ');
                var kategory = split[0];
                var type = split[1];
                // alert(type);
                $.ajax({
                    type: "GET",
                    url: "{{ route('shop') }}",
                    data: {
                        kategory: kategory,
                        type: type,
                    },
                    success: function(response) {
                        console.log(response);
                    }
                });
            });
        });
    </script>
@endsection
