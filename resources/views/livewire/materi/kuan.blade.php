<div class="">
    <div class="position-relative">
        <div wire:loading.block>
            <div class="position-absolute w-100 h-100">
                <div class="w-100 h-100 bg-primary" style="background-color: grey; opacity:0.2"></div>
            </div>
            <h5 class="position-absolute shadow bg-white p-2 rounded"
                style="top: 50%;left: 50%;transform: translate(-50%, -50%);">Loading...</h5>
        </div>
        <div class="card">
            
            <div class="card-body">
                <form class="chat-input px-3" wire:submit.prevent='store'>
                    <ul class="nav nav-tabs nav-tabs-new2" role="tablist">
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kuan-bab_1_pendahuluan', 'kuan-bab_1_pendahuluan-latar_belakang')">
                            <a class="nav-link {{ $tab1 === 'kuan-bab_1_pendahuluan' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kuan-bab_1_pendahuluan" aria-selected="true" role="tab" >
                                Bab 1 Pendahuluan 
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kuan-bab_1_pendahuluan-latar_belakang']) && $data_feedback['kuan-bab_1_pendahuluan-latar_belakang'][0]['feedback'] === Null) ||
                                        (isset($data_feedback['kuan-bab_1_pendahuluan-rumusan_masalah']) && $data_feedback['kuan-bab_1_pendahuluan-rumusan_masalah'][0]['feedback'] === Null) ||
                                        (isset($data_feedback['kuan-bab_1_pendahuluan-tujuan_penelitian']) && $data_feedback['kuan-bab_1_pendahuluan-tujuan_penelitian'][0]['feedback'] === Null) ||
                                        (isset($data_feedback['kuan-bab_1_pendahuluan-manfaat_penelitian']) && $data_feedback['kuan-bab_1_pendahuluan-manfaat_penelitian'][0]['feedback'] === Null) ||
                                        (isset($data_feedback['kuan-bab_1_pendahuluan-batasan_penelitian']) && $data_feedback['kuan-bab_1_pendahuluan-batasan_penelitian'][0]['feedback'] === Null)
                                    )
                                ) 
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3">
                        <div class="tab-pane {{ $tab1 === 'kuan-bab_1_pendahuluan' ? ' active show' : '' }}" id="kuan-bab_1_pendahuluan" role="tabpanel">
                            <ul class="nav nav-tabs nav-tabs-new2" role="tablist">
                                <li class="nav-item" role="presentation" wire:click="setKodeMateri('kuan-bab_1_pendahuluan', 'kuan-bab_1_pendahuluan-latar_belakang')">
                                    <a class="nav-link {{ $tab2 === 'kuan-bab_1_pendahuluan-latar_belakang' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kuan-bab_1_pendahuluan-latar_belakang" aria-selected="true" role="tab" >
                                        Latar Belakang 
                                        {!! (\App\Helpers\AuthHelper::isAdmin() && (isset($data_feedback['kuan-bab_1_pendahuluan-latar_belakang']) && $data_feedback['kuan-bab_1_pendahuluan-latar_belakang'][0]['feedback'] === Null)) ? '<i class="fa fa-exclamation-circle"></i>' : '' ; !!}
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation" wire:click="setKodeMateri('kuan-bab_1_pendahuluan', 'kuan-bab_1_pendahuluan-rumusan_masalah')">
                                    <a class="nav-link {{ $tab2 === 'kuan-bab_1_pendahuluan-rumusan_masalah' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kuan-bab_1_pendahuluan-rumusan_masalah" aria-selected="false" role="tab" tabindex="-1" >
                                        Rumusan Masalah 
                                        {!! (\App\Helpers\AuthHelper::isAdmin() && (isset($data_feedback['kuan-bab_1_pendahuluan-rumusan_masalah']) && $data_feedback['kuan-bab_1_pendahuluan-rumusan_masalah'][0]['feedback'] === Null)) ? '<i class="fa fa-exclamation-circle"></i>' : '' ; !!}
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation" wire:click="setKodeMateri('kuan-bab_1_pendahuluan', 'kuan-bab_1_pendahuluan-tujuan_penelitian')">
                                    <a class="nav-link {{ $tab2 === 'kuan-bab_1_pendahuluan-tujuan_penelitian' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kuan-bab_1_pendahuluan-tujuan_penelitian" aria-selected="false" role="tab" tabindex="-1" >
                                        Tujuan Penelitian 
                                        {!! (\App\Helpers\AuthHelper::isAdmin() && (isset($data_feedback['kuan-bab_1_pendahuluan-tujuan_penelitian']) && $data_feedback['kuan-bab_1_pendahuluan-tujuan_penelitian'][0]['feedback'] === Null)) ? '<i class="fa fa-exclamation-circle"></i>' : '' ; !!}
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation" wire:click="setKodeMateri('kuan-bab_1_pendahuluan', 'kuan-bab_1_pendahuluan-manfaat_penelitian')">
                                    <a class="nav-link {{ $tab2 === 'kuan-bab_1_pendahuluan-manfaat_penelitian' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kuan-bab_1_pendahuluan-manfaat_penelitian" aria-selected="false" role="tab" tabindex="-1" >
                                        Manfaat Penelitian 
                                        {!! (\App\Helpers\AuthHelper::isAdmin() && (isset($data_feedback['kuan-bab_1_pendahuluan-manfaat_penelitian']) && $data_feedback['kuan-bab_1_pendahuluan-manfaat_penelitian'][0]['feedback'] === Null)) ? '<i class="fa fa-exclamation-circle"></i>' : '' ; !!}
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation" wire:click="setKodeMateri('kuan-bab_1_pendahuluan', 'kuan-bab_1_pendahuluan-batasan_penelitian')">
                                    <a class="nav-link {{ $tab2 === 'kuan-bab_1_pendahuluan-batasan_penelitian' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kuan-bab_1_pendahuluan-batasan_penelitian" aria-selected="false" role="tab" tabindex="-1" >
                                        Batasan Penelitian 
                                        {!! (\App\Helpers\AuthHelper::isAdmin() && (isset($data_feedback['kuan-bab_1_pendahuluan-batasan_penelitian']) && $data_feedback['kuan-bab_1_pendahuluan-batasan_penelitian'][0]['feedback'] === Null)) ? '<i class="fa fa-exclamation-circle"></i>' : '' ; !!}
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content mt-3">
                                <div class="tab-pane {{ $tab2 === 'kuan-bab_1_pendahuluan-latar_belakang' ? ' active show' : '' }}" id="kuan-bab_1_pendahuluan-latar_belakang" role="tabpanel">
                                    <h4>Latar Belakang</h4>
                                    <p>
                                        Latar belakang masalah mengungkapkan alasan-alasan mengapa sesuatu dipermasalahkan sebagai kajian dalam skripsi, sehingga pembaca dapat mengetahui apa yang diteliti dan mengapa penelitian dilakukan. Serta menjelaskan rasionalitas atau justifikasi penelitian dilihat dari latar belakang permasalahan yang diteliti atau pemunculan problem akademik.	Penyusunan latar belakang masalah setidaknya dapat dilakukan melalui dua pendekatan, yaitu :
                                        <br>
                                        a.	Diawali dari pemikiran teoritis (termasuk keislaman) kemudian mengarah ke fakta empirik.
                                        <br>
                                        b.	Diawali dari dunia empiric ke arah teoritik (termasuk keislaman)
                                        Dalam latar belakang, dapat juga mengemukakan adanya kesenjangan (gap) antara seharusnya/teori (das sollen) dan kenyataan (das sein), baik kesenjangan teoritik maupun praksis yang melatar belakangi masalah yang akan diteliti. Selain itu, latar belakang masalah sebaiknya memuat pula fakta-fakta yang relevan dengan masalah penelitian sebagai titik tolak dalam merumuskan masalah penelitian, dan alasan-alasan (empiris, teknis) mengapa masalah dikemukakan dalam penelitian itu dipandang penting untuk diteliti.
                                    </p>
                                </div>
                                <div class="tab-pane {{ $tab2 === 'kuan-bab_1_pendahuluan-rumusan_masalah' ? ' active show' : '' }}" id="kuan-bab_1_pendahuluan-rumusan_masalah" role="tabpanel">
                                    <h4>Rumusan Masalah</h4>
                                    <p>
                                        Merupakan upaya untuk menyatakan secara tersurat pertanyaan-pertanyaan atau dalam bentuk kalimat pernyataan-pernyataan yang hendak dicarikan jawabannya. Penyampaian rumusan masalah harus relevan dengan judul, data, dan model yang akan diteliti.
                                        Pertanyaan penelitian dalam penelitian kuantitatif  harus menunjukkan pengaruh/hubungan/perbedaan antar variabel yang hendak diteliti. Sementara untuk penelitian kualitatif, pada bagian ini penulis harus membuat suatu formulasi pertanyaan penelitian (grand tour question) dan jika memungkinkan juga pertanyaan-pertanyaan lainnya yang merupakan turunan (sub question). Pertanyaan-pertanyaan tersebut seharusnya jelas, spesifik, tepat sasaran, dan memungkinkan untuk dijawab oleh penulis. Fokus penelitian menunjukkan secara tegas permasalahan dalam skripsi yang dicari pemecahannya. Fokus penelitian bertujuan untuk menjabarkan rumusan masalah. Fokus penelitian juga memuat proses penyederhanaan masalah yang rumit dan kompleks yang dirumuskan menjadi masalah yang dapat diteliti (researchable problems). 
                                    </p>
                                </div>
                                <div class="tab-pane {{ $tab2 === 'kuan-bab_1_pendahuluan-tujuan_penelitian' ? ' active show' : '' }}" id="kuan-bab_1_pendahuluan-tujuan_penelitian" role="tabpanel">
                                    <h4>Tujuan Penelitian</h4>
                                    <p>
                                        Tujuan penelitian harus menunjukkan pernyataan yang berisi tentang tujuan yang ingin dicapai melalui proses penelitian. Tujuan penelitian harus terkait dengan pertanyaan-pertanyaan yang telah dirumuskan dalam rumusan masalah atau fokus penelitian.
                                    </p>
                                </div>
                                <div class="tab-pane {{ $tab2 === 'kuan-bab_1_pendahuluan-manfaat_penelitian' ? ' active show' : '' }}" id="kuan-bab_1_pendahuluan-manfaat_penelitian" role="tabpanel">
                                    <h4>Manfaat Penelitian</h4>
                                    <p>
                                        Manfaat penelitian berisi tentang sumbangan/kontribusi positif terkait dengan hasil penelitian. Manfaat penelitian terdiri dari manfaat teoritis maupun praktis. Untuk manfaat teoritis berisi keterkaitan hasil penelitian dengan pengembangan ilmu ekonomi/manajemen/akuntansi/syariah, seperti munculnya pandangan atau wawasan baru, atau perkembangan suatu teori, menguji teori, atau mengkritik teori. 
                                        Manfaat praktis, lebih mengarah pada aplikasi hasil penelitian, seperti sumbangan nyata yang dapat digunakan sebagai dasar kebijakan atas suatu keputusan yang sudah maupun yang akan dilakukan.
                                    </p>
                                </div>
                                <div class="tab-pane {{ $tab2 === 'kuan-bab_1_pendahuluan-batasan_penelitian' ? ' active show' : '' }}" id="kuan-bab_1_pendahuluan-batasan_penelitian" role="tabpanel">
                                    <h4>Batasan Penelitian</h4>
                                    <p>
                                        Batasan penelitian dibuat sesuai dengan ruang lingkup penelitian yang akan dilakukan dengan mempertimbangkan aspek-aspek metodologis, kelayakan di lapangan dan keterbatasan yang ada pada penulis tanpa mengorbankan kebermaknaan arti, konsep atau topik yang diteliti. Keterbatasan penelitian menunjuk suatu keadaan yang tidak bisa dihindari dalam peneliti. Ada 2 (dua) hal yang menjadi keterbatasan penelitian, yaitu: pertama, keterbatasan ruang lingkup kajian, dan kedua, keterbatasan yang bersumber dari aspek teknis penelitian.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane {{ $tab1 === 'kuan-selanjutnya' ? ' active show' : '' }}" id="kuan-selanjutnya" role="tabpanel">
                            <h4>Selanjutnya</h4>
                        </div>
                    </div>
    
                    @if(\App\Helpers\AuthHelper::isAdmin())
                        @if(isset($data_materi[$kode_materi]))
                            <ul class="list-group list-group-custom list-group-flush">
                                @foreach ($data_materi[$kode_materi] as $item)
                                @php
                                    $file = $item['file'];
                                @endphp
                                    <li class="list-group-item">
                                        <a href="{{ asset("storage/app/public/attachments/$file") }}"
                                            class="text-decoration-none text-info "
                                            download="{{ $item['file_name'] }}"
                                        >
                                        <i class="fa fa-book"></i>
                                            {{ $item['file_name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                        {{-- Input Feedback Admin --}}
                        @if(isset($data_feedback[$kode_materi]))
                            @if($data_feedback[$kode_materi][0]['feedback'])
                                <h6>Feedback : </h6>
                                <blockquote class="blockquote border border-primary p-3">
                                    <p>{{$data_feedback[$kode_materi][0]['feedback']}}</p>
                                </blockquote>
                                <hr>
                            @else
                                <label for="formFileMultiple" class="form-label">Kirim Feedback</label>
                                <input wire:model.lazy="input_feedback" type="text" class="form-control">
                            @endif
                        @endif
                    @else
                        @if(isset($data_materi[$kode_materi]))
                            <ul class="list-group list-group-custom list-group-flush">
                                @foreach ($data_materi[$kode_materi] as $item)
                                @php
                                    $file = $item['file'];
                                @endphp
                                    <li class="list-group-item">
                                        <a href="{{ asset("storage/app/public/attachments/$file") }}"
                                            class="text-decoration-none text-info "
                                            download="{{ $item['file_name'] }}"
                                        >
                                        <i class="fa fa-book"></i>
                                            {{ $item['file_name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            @if($data_feedback[$kode_materi][0]['feedback'])
                                <h6>Feedback : </h6>
                                <blockquote class="blockquote border border-primary p-3">
                                    <p>{{$data_feedback[$kode_materi][0]['feedback']}}</p>
                                </blockquote>
                                <hr>
                            @else
                                <div class="alert alert-warning" role="alert">Tunggu Feedback dari Dosen !</div>
                            @endif
                        @else
                            <label for="formFileMultiple" class="form-label">Upload File</label>
                            <input wire:model="files" class="form-control" type="file" id="fileInput" multiple>
    
                        @endif
                    @endif
    
                    <button type="submit" class="btn btn-primary px-3 mt-3 
                    {{
                        (
                            ( \App\Helpers\AuthHelper::isAdmin() === false && isset($data_materi[$kode_materi]) ) || 
                            ( \App\Helpers\AuthHelper::isAdmin() && !isset($data_feedback[$kode_materi]) ) || 
                            ( \App\Helpers\AuthHelper::isAdmin() && isset($data_feedback[$kode_materi]) && $data_feedback[$kode_materi][0]["feedback"] !== Null)
                        )
                         ? 'd-none' : '' ;
                    }}">
                        Kirim Data
                    </button>
                    
                </form>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        document.addEventListener('livewire:load', function() {
            setInterval(function () {
                Livewire.emit('refreshData'); 
            }, 15000); 
        });
    </script>
@endpush