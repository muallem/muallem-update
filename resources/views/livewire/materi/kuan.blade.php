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
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kuan-latar_belakang_masalah', 'kuan-latar_belakang_masalah')">
                            <a class="nav-link {{ $tab1 === 'kuan-latar_belakang_masalah' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kuan-latar_belakang_masalah" aria-selected="true" role="tab" >
                                (Latar belakang Masalah) ‌أ. خلفية البحث 
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kuan-latar_belakang_masalah']) && $data_feedback['kuan-latar_belakang_masalah'][0]['feedback'] === Null)
                                    )
                                )
                                
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kuan-rumusan_masalah', 'kuan-rumusan_masalah')">
                            <a class="nav-link {{ $tab1 === 'kuan-rumusan_masalah' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kuan-rumusan_masalah" aria-selected="true" role="tab" >
                                (Rumusan Masalah)‌ ب. أسئلة البحث 
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kuan-rumusan_masalah']) && $data_feedback['kuan-rumusan_masalah'][0]['feedback'] === Null)
                                    )
                                )
                                
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kuan-tujuan_penelitian', 'kuan-tujuan_penelitian')">
                            <a class="nav-link {{ $tab1 === 'kuan-tujuan_penelitian' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kuan-tujuan_penelitian" aria-selected="true" role="tab" >
                                (Tujuan Penelitian)‌ ج.	أهداف البحث  
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kuan-tujuan_penelitian']) && $data_feedback['kuan-tujuan_penelitian'][0]['feedback'] === Null)
                                    )
                                )
                                
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kuan-manfaat_penelitian', 'kuan-manfaat_penelitian')">
                            <a class="nav-link {{ $tab1 === 'kuan-manfaat_penelitian' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kuan-manfaat_penelitian" aria-selected="true" role="tab" >
                                (Manfaat Penelitian)‌ د.	فوائد البحث 
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kuan-manfaat_penelitian']) && $data_feedback['kuan-manfaat_penelitian'][0]['feedback'] === Null)
                                    )
                                )
                                
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kuan-hipotesis_penelitian', 'kuan-hipotesis_penelitian')">
                            <a class="nav-link {{ $tab1 === 'kuan-hipotesis_penelitian' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kuan-hipotesis_penelitian" aria-selected="true" role="tab" >
                                (Hipotesis Penelitian)‌ ‌ه.	فروض البحث
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kuan-hipotesis_penelitian']) && $data_feedback['kuan-hipotesis_penelitian'][0]['feedback'] === Null)
                                    )
                                )
                                
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kuan-ruang_lingkup_penelitian', 'kuan-ruang_lingkup_penelitian')">
                            <a class="nav-link {{ $tab1 === 'kuan-ruang_lingkup_penelitian' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kuan-ruang_lingkup_penelitian" aria-selected="true" role="tab" >
                                (Ruang lingkup Penelitian)‌‌ و.	حدود البحث    
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kuan-ruang_lingkup_penelitian']) && $data_feedback['kuan-ruang_lingkup_penelitian'][0]['feedback'] === Null)
                                    )
                                )
                                
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kuan-definisi_operasional', 'kuan-definisi_operasional')">
                            <a class="nav-link {{ $tab1 === 'kuan-definisi_operasional' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kuan-definisi_operasional" aria-selected="true" role="tab" >
                                (Definisi Operasional)‌ز.	تحديد المصطلحات 
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kuan-definisi_operasional']) && $data_feedback['kuan-definisi_operasional'][0]['feedback'] === Null)
                                    )
                                )
                                
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kuan-kajian_terdahulu', 'kuan-kajian_terdahulu')">
                            <a class="nav-link {{ $tab1 === 'kuan-kajian_terdahulu' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kuan-kajian_terdahulu" aria-selected="true" role="tab" >
                                (Kajian terdahulu)‌ح.	الدراسات السابقة
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kuan-kajian_terdahulu']) && $data_feedback['kuan-kajian_terdahulu'][0]['feedback'] === Null)
                                    )
                                )
                                
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kuan-landasan_teori', 'kuan-landasan_teori')">
                            <a class="nav-link {{ $tab1 === 'kuan-landasan_teori' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kuan-landasan_teori" aria-selected="true" role="tab" >
                                (Landasan Teori)الفصل الثاني: الإطار النظري 
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kuan-landasan_teori']) && $data_feedback['kuan-landasan_teori'][0]['feedback'] === Null)
                                    )
                                )
                                
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3">
                        <div class="tab-pane {{ $tab2 === 'kuan-latar_belakang_masalah' ? ' active show' : '' }}" id="kuan-latar_belakang_masalah" role="tabpanel">
                            <h4>Latar Belakang</h4>
                            <p>
                                Latar belakang masalah mengungkapkan alasan-alasan mengapa sesuatu dipermasalahkan sebagai kajian dalam skripsi, sehingga pembaca dapat mengetahui apa yang diteliti dan mengapa penelitian dilakukan. Serta menjelaskan rasionalitas atau justifikasi penelitian dilihat dari latar belakang permasalahan yang diteliti atau pemunculan problem akademik.	Penyusunan latar belakang masalah setidaknya dapat dilakukan melalui dua pendekatan, yaitu :
                                a.	Diawali dari pemikiran teoritis (termasuk keislaman) kemudian mengarah ke fakta empirik.
                                b.	Diawali dari dunia empiric ke arah teoritik (termasuk keislaman).
                                Dalam latar belakang, dapat juga mengemukakan adanya kesenjangan (gap) antara seharusnya/teori (das sollen) dan kenyataan (das sein), baik kesenjangan teoritik maupun praksis yang melatar belakangi masalah yang akan diteliti. Selain itu, latar belakang masalah sebaiknya memuat pula fakta-fakta yang relevan dengan masalah penelitian sebagai titik tolak dalam merumuskan masalah penelitian, dan alasan-alasan (empiris, teknis) mengapa masalah dikemukakan dalam penelitian itu dipandang penting untuk diteliti.

                            </p>
                        </div>
                        <div class="tab-pane {{ $tab2 === 'kuan-rumusan_masalah' ? ' active show' : '' }}" id="kuan-rumusan_masalah" role="tabpanel">
                            <h4>Rumusan Masalah</h4>
                            <p>
                                Latar belakang masalah mengungkapkan alasan-alasan mengapa sesuatu dipermasalahkan sebagai kajian dalam skripsi, sehingga pembaca dapat mengetahui apa yang diteliti dan mengapa penelitian dilakukan. Serta menjelaskan rasionalitas atau justifikasi penelitian dilihat dari latar belakang permasalahan yang diteliti atau pemunculan problem akademik.	Penyusunan latar belakang masalah setidaknya dapat dilakukan melalui dua pendekatan, yaitu :
                                a.	Diawali dari pemikiran teoritis (termasuk keislaman) kemudian mengarah ke fakta empirik.
                                b.	Diawali dari dunia empiric ke arah teoritik (termasuk keislaman).
                                Dalam latar belakang, dapat juga mengemukakan adanya kesenjangan (gap) antara seharusnya/teori (das sollen) dan kenyataan (das sein), baik kesenjangan teoritik maupun praksis yang melatar belakangi masalah yang akan diteliti. Selain itu, latar belakang masalah sebaiknya memuat pula fakta-fakta yang relevan dengan masalah penelitian sebagai titik tolak dalam merumuskan masalah penelitian, dan alasan-alasan (empiris, teknis) mengapa masalah dikemukakan dalam penelitian itu dipandang penting untuk diteliti.

                            </p>
                        </div>
                        <div class="tab-pane {{ $tab2 === 'kuan-tujuan_penelitian' ? ' active show' : '' }}" id="kuan-tujuan_penelitian" role="tabpanel">
                            <h4>Tujuan Penelitian</h4>
                            <p>
                                Latar belakang masalah mengungkapkan alasan-alasan mengapa sesuatu dipermasalahkan sebagai kajian dalam skripsi, sehingga pembaca dapat mengetahui apa yang diteliti dan mengapa penelitian dilakukan. Serta menjelaskan rasionalitas atau justifikasi penelitian dilihat dari latar belakang permasalahan yang diteliti atau pemunculan problem akademik.	Penyusunan latar belakang masalah setidaknya dapat dilakukan melalui dua pendekatan, yaitu :
                                a.	Diawali dari pemikiran teoritis (termasuk keislaman) kemudian mengarah ke fakta empirik.
                                b.	Diawali dari dunia empiric ke arah teoritik (termasuk keislaman).
                                Dalam latar belakang, dapat juga mengemukakan adanya kesenjangan (gap) antara seharusnya/teori (das sollen) dan kenyataan (das sein), baik kesenjangan teoritik maupun praksis yang melatar belakangi masalah yang akan diteliti. Selain itu, latar belakang masalah sebaiknya memuat pula fakta-fakta yang relevan dengan masalah penelitian sebagai titik tolak dalam merumuskan masalah penelitian, dan alasan-alasan (empiris, teknis) mengapa masalah dikemukakan dalam penelitian itu dipandang penting untuk diteliti.

                            </p>
                        </div>
                        <div class="tab-pane {{ $tab2 === 'kuan-manfaat_penelitian' ? ' active show' : '' }}" id="kuan-manfaat_penelitian" role="tabpanel">
                            <h4>Manfaat Penelitian</h4>
                            <p>
                                Latar belakang masalah mengungkapkan alasan-alasan mengapa sesuatu dipermasalahkan sebagai kajian dalam skripsi, sehingga pembaca dapat mengetahui apa yang diteliti dan mengapa penelitian dilakukan. Serta menjelaskan rasionalitas atau justifikasi penelitian dilihat dari latar belakang permasalahan yang diteliti atau pemunculan problem akademik.	Penyusunan latar belakang masalah setidaknya dapat dilakukan melalui dua pendekatan, yaitu :
                                a.	Diawali dari pemikiran teoritis (termasuk keislaman) kemudian mengarah ke fakta empirik.
                                b.	Diawali dari dunia empiric ke arah teoritik (termasuk keislaman).
                                Dalam latar belakang, dapat juga mengemukakan adanya kesenjangan (gap) antara seharusnya/teori (das sollen) dan kenyataan (das sein), baik kesenjangan teoritik maupun praksis yang melatar belakangi masalah yang akan diteliti. Selain itu, latar belakang masalah sebaiknya memuat pula fakta-fakta yang relevan dengan masalah penelitian sebagai titik tolak dalam merumuskan masalah penelitian, dan alasan-alasan (empiris, teknis) mengapa masalah dikemukakan dalam penelitian itu dipandang penting untuk diteliti.

                            </p>
                        </div>
                        <div class="tab-pane {{ $tab2 === 'kuan-hipotesis_penelitian' ? ' active show' : '' }}" id="kuan-hipotesis_penelitian" role="tabpanel">
                            <h4>Hipotesis Penelitian</h4>
                            <p>
                                Latar belakang masalah mengungkapkan alasan-alasan mengapa sesuatu dipermasalahkan sebagai kajian dalam skripsi, sehingga pembaca dapat mengetahui apa yang diteliti dan mengapa penelitian dilakukan. Serta menjelaskan rasionalitas atau justifikasi penelitian dilihat dari latar belakang permasalahan yang diteliti atau pemunculan problem akademik.	Penyusunan latar belakang masalah setidaknya dapat dilakukan melalui dua pendekatan, yaitu :
                                a.	Diawali dari pemikiran teoritis (termasuk keislaman) kemudian mengarah ke fakta empirik.
                                b.	Diawali dari dunia empiric ke arah teoritik (termasuk keislaman).
                                Dalam latar belakang, dapat juga mengemukakan adanya kesenjangan (gap) antara seharusnya/teori (das sollen) dan kenyataan (das sein), baik kesenjangan teoritik maupun praksis yang melatar belakangi masalah yang akan diteliti. Selain itu, latar belakang masalah sebaiknya memuat pula fakta-fakta yang relevan dengan masalah penelitian sebagai titik tolak dalam merumuskan masalah penelitian, dan alasan-alasan (empiris, teknis) mengapa masalah dikemukakan dalam penelitian itu dipandang penting untuk diteliti.

                            </p>
                        </div>
                        <div class="tab-pane {{ $tab2 === 'kuan-ruang_lingkup_penelitian' ? ' active show' : '' }}" id="kuan-ruang_lingkup_penelitian" role="tabpanel">
                            <h4>Ruang Lingkup Penelitian</h4>
                            <p>
                                Latar belakang masalah mengungkapkan alasan-alasan mengapa sesuatu dipermasalahkan sebagai kajian dalam skripsi, sehingga pembaca dapat mengetahui apa yang diteliti dan mengapa penelitian dilakukan. Serta menjelaskan rasionalitas atau justifikasi penelitian dilihat dari latar belakang permasalahan yang diteliti atau pemunculan problem akademik.	Penyusunan latar belakang masalah setidaknya dapat dilakukan melalui dua pendekatan, yaitu :
                                a.	Diawali dari pemikiran teoritis (termasuk keislaman) kemudian mengarah ke fakta empirik.
                                b.	Diawali dari dunia empiric ke arah teoritik (termasuk keislaman).
                                Dalam latar belakang, dapat juga mengemukakan adanya kesenjangan (gap) antara seharusnya/teori (das sollen) dan kenyataan (das sein), baik kesenjangan teoritik maupun praksis yang melatar belakangi masalah yang akan diteliti. Selain itu, latar belakang masalah sebaiknya memuat pula fakta-fakta yang relevan dengan masalah penelitian sebagai titik tolak dalam merumuskan masalah penelitian, dan alasan-alasan (empiris, teknis) mengapa masalah dikemukakan dalam penelitian itu dipandang penting untuk diteliti.

                            </p>
                        </div>
                        <div class="tab-pane {{ $tab2 === 'kuan-definisi_operasional' ? ' active show' : '' }}" id="kuan-definisi_operasional" role="tabpanel">
                            <h4>Definisi Operasional</h4>
                            <p>
                                Latar belakang masalah mengungkapkan alasan-alasan mengapa sesuatu dipermasalahkan sebagai kajian dalam skripsi, sehingga pembaca dapat mengetahui apa yang diteliti dan mengapa penelitian dilakukan. Serta menjelaskan rasionalitas atau justifikasi penelitian dilihat dari latar belakang permasalahan yang diteliti atau pemunculan problem akademik.	Penyusunan latar belakang masalah setidaknya dapat dilakukan melalui dua pendekatan, yaitu :
                                a.	Diawali dari pemikiran teoritis (termasuk keislaman) kemudian mengarah ke fakta empirik.
                                b.	Diawali dari dunia empiric ke arah teoritik (termasuk keislaman).
                                Dalam latar belakang, dapat juga mengemukakan adanya kesenjangan (gap) antara seharusnya/teori (das sollen) dan kenyataan (das sein), baik kesenjangan teoritik maupun praksis yang melatar belakangi masalah yang akan diteliti. Selain itu, latar belakang masalah sebaiknya memuat pula fakta-fakta yang relevan dengan masalah penelitian sebagai titik tolak dalam merumuskan masalah penelitian, dan alasan-alasan (empiris, teknis) mengapa masalah dikemukakan dalam penelitian itu dipandang penting untuk diteliti.

                            </p>
                        </div>
                        <div class="tab-pane {{ $tab2 === 'kuan-kajian_terdahulu' ? ' active show' : '' }}" id="kuan-kajian_terdahulu" role="tabpanel">
                            <h4>Kajian Terdahulu</h4>
                            <p>
                                Latar belakang masalah mengungkapkan alasan-alasan mengapa sesuatu dipermasalahkan sebagai kajian dalam skripsi, sehingga pembaca dapat mengetahui apa yang diteliti dan mengapa penelitian dilakukan. Serta menjelaskan rasionalitas atau justifikasi penelitian dilihat dari latar belakang permasalahan yang diteliti atau pemunculan problem akademik.	Penyusunan latar belakang masalah setidaknya dapat dilakukan melalui dua pendekatan, yaitu :
                                a.	Diawali dari pemikiran teoritis (termasuk keislaman) kemudian mengarah ke fakta empirik.
                                b.	Diawali dari dunia empiric ke arah teoritik (termasuk keislaman).
                                Dalam latar belakang, dapat juga mengemukakan adanya kesenjangan (gap) antara seharusnya/teori (das sollen) dan kenyataan (das sein), baik kesenjangan teoritik maupun praksis yang melatar belakangi masalah yang akan diteliti. Selain itu, latar belakang masalah sebaiknya memuat pula fakta-fakta yang relevan dengan masalah penelitian sebagai titik tolak dalam merumuskan masalah penelitian, dan alasan-alasan (empiris, teknis) mengapa masalah dikemukakan dalam penelitian itu dipandang penting untuk diteliti.

                            </p>
                        </div>
                        <div class="tab-pane {{ $tab2 === 'kuan-landasan_teori' ? ' active show' : '' }}" id="kuan-landasan_teori" role="tabpanel">
                            <h4>Landasan Teori</h4>
                            <p>
                                Latar belakang masalah mengungkapkan alasan-alasan mengapa sesuatu dipermasalahkan sebagai kajian dalam skripsi, sehingga pembaca dapat mengetahui apa yang diteliti dan mengapa penelitian dilakukan. Serta menjelaskan rasionalitas atau justifikasi penelitian dilihat dari latar belakang permasalahan yang diteliti atau pemunculan problem akademik.	Penyusunan latar belakang masalah setidaknya dapat dilakukan melalui dua pendekatan, yaitu :
                                a.	Diawali dari pemikiran teoritis (termasuk keislaman) kemudian mengarah ke fakta empirik.
                                b.	Diawali dari dunia empiric ke arah teoritik (termasuk keislaman).
                                Dalam latar belakang, dapat juga mengemukakan adanya kesenjangan (gap) antara seharusnya/teori (das sollen) dan kenyataan (das sein), baik kesenjangan teoritik maupun praksis yang melatar belakangi masalah yang akan diteliti. Selain itu, latar belakang masalah sebaiknya memuat pula fakta-fakta yang relevan dengan masalah penelitian sebagai titik tolak dalam merumuskan masalah penelitian, dan alasan-alasan (empiris, teknis) mengapa masalah dikemukakan dalam penelitian itu dipandang penting untuk diteliti.

                            </p>
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