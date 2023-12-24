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
                    <ul class="nav nav-tabs nav-tabs-new2 d-flex justify-content-start" role="tablist">
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kual-latar_belakang_masalah', 'kual-latar_belakang_masalah')">
                            <a style="font-size: 23px;" class="nav-link {{ $tab1 === 'kual-latar_belakang_masalah' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kual-latar_belakang_masalah" aria-selected="true" role="tab" >
                                (Latar belakang Masalah) ‌خلفية البحث 
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kual-latar_belakang_masalah']) && $data_feedback['kual-latar_belakang_masalah'][0]['feedback'] === Null)
                                    )
                                )
                                
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kual-rumusan_masalah', 'kual-rumusan_masalah')">
                            <a style="font-size: 23px;" class="nav-link {{ $tab1 === 'kual-rumusan_masalah' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kual-rumusan_masalah" aria-selected="true" role="tab" >
                                (Rumusan Masalah)‌ أسئلة البحث 
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kual-rumusan_masalah']) && $data_feedback['kual-rumusan_masalah'][0]['feedback'] === Null)
                                    )
                                )
                                
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kual-tujuan_penelitian', 'kual-tujuan_penelitian')">
                            <a style="font-size: 23px;" class="nav-link {{ $tab1 === 'kual-tujuan_penelitian' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kual-tujuan_penelitian" aria-selected="true" role="tab" >
                                (Tujuan Penelitian)‌ أهداف البحث  
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kual-tujuan_penelitian']) && $data_feedback['kual-tujuan_penelitian'][0]['feedback'] === Null)
                                    )
                                )
                                
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kual-manfaat_penelitian', 'kual-manfaat_penelitian')">
                            <a style="font-size: 23px;" class="nav-link {{ $tab1 === 'kual-manfaat_penelitian' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kual-manfaat_penelitian" aria-selected="true" role="tab" >
                                (Manfaat Penelitian)‌ فوائد البحث 
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kual-manfaat_penelitian']) && $data_feedback['kual-manfaat_penelitian'][0]['feedback'] === Null)
                                    )
                                )
                                
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kual-hipotesis_penelitian', 'kual-hipotesis_penelitian')">
                            <a style="font-size: 23px;" class="nav-link {{ $tab1 === 'kual-hipotesis_penelitian' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kual-hipotesis_penelitian" aria-selected="true" role="tab" >
                                (Hipotesis Penelitian)‌ ‌فروض البحث
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kual-hipotesis_penelitian']) && $data_feedback['kual-hipotesis_penelitian'][0]['feedback'] === Null)
                                    )
                                )
                                
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kual-ruang_lingkup_penelitian', 'kual-ruang_lingkup_penelitian')">
                            <a style="font-size: 23px;" class="nav-link {{ $tab1 === 'kual-ruang_lingkup_penelitian' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kual-ruang_lingkup_penelitian" aria-selected="true" role="tab" >
                                (Ruang lingkup Penelitian)‌‌ حدود البحث    
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kual-ruang_lingkup_penelitian']) && $data_feedback['kual-ruang_lingkup_penelitian'][0]['feedback'] === Null)
                                    )
                                )
                                
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kual-definisi_operasional', 'kual-definisi_operasional')">
                            <a style="font-size: 23px;" class="nav-link {{ $tab1 === 'kual-definisi_operasional' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kual-definisi_operasional" aria-selected="true" role="tab" >
                                (Definisi Operasional)‌ تحديد المصطلحات 
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kual-definisi_operasional']) && $data_feedback['kual-definisi_operasional'][0]['feedback'] === Null)
                                    )
                                )
                                
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kual-kajian_terdahulu', 'kual-kajian_terdahulu')">
                            <a style="font-size: 23px;" class="nav-link {{ $tab1 === 'kual-kajian_terdahulu' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kual-kajian_terdahulu" aria-selected="true" role="tab" >
                                (Kajian terdahulu)‌ الدراسات السابقة
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kual-kajian_terdahulu']) && $data_feedback['kual-kajian_terdahulu'][0]['feedback'] === Null)
                                    )
                                )
                                
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" wire:click="setKodeMateri('kual-landasan_teori', 'kual-landasan_teori')">
                            <a style="font-size: 23px;" class="nav-link {{ $tab1 === 'kual-landasan_teori' ? ' active show' : '' }}" data-bs-toggle="tab" href="#kual-landasan_teori" aria-selected="true" role="tab" >
                                (Landasan Teori) الفصل الثاني: الإطار النظري 
                                @if(
                                    \App\Helpers\AuthHelper::isAdmin() &&
                                    (
                                        (isset($data_feedback['kual-landasan_teori']) && $data_feedback['kual-landasan_teori'][0]['feedback'] === Null)
                                    )
                                )
                                
                                <i class="fa fa-exclamation-circle"></i>
                                @endif
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3">
                        <div class="tab-pane {{ $tab2 === 'kual-latar_belakang_masalah' ? ' active show' : '' }}" id="kual-latar_belakang_masalah" role="tabpanel">
                            <h4>(Latar belakang Masalah) ‌أ. خلفية البحث </h4>
                            <p style="text-align: justify;" class="mt-3">
                                Latar belakang masalah mengungkapkan alasan-alasan mengapa sesuatu dipermasalahkan sebagai kajian dalam skripsi, sehingga pembaca dapat mengetahui apa yang diteliti dan mengapa penelitian dilakukan. Serta menjelaskan rasionalitas atau justifikasi penelitian dilihat dari latar belakang permasalahan yang diteliti atau pemunculan problem akademik.	Penyusunan latar belakang masalah setidaknya dapat dilakukan melalui dua pendekatan, yaitu :
                            </p>
                            <p style="text-align: justify;" class="mt-3">
                                a.	Diawali dari pemikiran teoritis (termasuk keislaman) kemudian mengarah ke fakta empirik.
                            </p>
                            <p style="text-align: justify;" class="mt-3">
                                b.	Diawali dari dunia empiric ke arah teoritik (termasuk keislaman).
                            </p>
                            <p style="text-align: justify;" class="mt-3">
                                Dalam latar belakang, dapat juga mengemukakan adanya kesenjangan (gap) antara seharusnya/teori (das sollen) dan kenyataan (das sein), baik kesenjangan teoritik maupun praksis yang melatar belakangi masalah yang akan diteliti. Selain itu, latar belakang masalah sebaiknya memuat pula fakta-fakta yang relevan dengan masalah penelitian sebagai titik tolak dalam merumuskan masalah penelitian, dan alasan-alasan (empiris, teknis) mengapa masalah dikemukakan dalam penelitian itu dipandang penting untuk diteliti.

                            </p>
                        </div>
                        <div class="tab-pane {{ $tab2 === 'kual-rumusan_masalah' ? ' active show' : '' }}" id="kual-rumusan_masalah" role="tabpanel">
                            <h4>(Rumusan Masalah)‌ ب. أسئلة البحث </h4>
                            <p style="text-align: justify;" class="mt-3">
                                Merupakan upaya untuk menyatakan secara tersurat pertanyaan-pertanyaan atau dalam bentuk kalimat pernyataan-pernyataan yang hendak dicarikan jawabannya. Penyampaian rumusan masalah harus relevan dengan judul, data, dan model yang akan diteliti.
                            </p>
                            <p style="text-align: justify;" class="mt-3">
                                Pertanyaan penelitian dalam penelitian kuantitatif  harus menunjukkan pengaruh/hubungan/perbedaan antar variabel yang hendak diteliti. Sementara untuk penelitian kualitatif, pada bagian ini penulis harus membuat suatu formulasi pertanyaan penelitian (grand tour question) dan jika memungkinkan juga pertanyaan-pertanyaan lainnya yang merupakan turunan (sub question). Pertanyaan-pertanyaan tersebut seharusnya jelas, spesifik, tepat sasaran, dan memungkinkan untuk dijawab oleh penulis. Fokus penelitian menunjukkan secara tegas permasalahan dalam skripsi yang dicari pemecahannya. Fokus penelitian bertujuan untuk menjabarkan rumusan masalah. Fokus penelitian juga memuat proses penyederhanaan masalah yang rumit dan kompleks yang dirumuskan menjadi masalah yang dapat diteliti (researchable problems).

                            </p>
                        </div>
                        <div class="tab-pane {{ $tab2 === 'kual-tujuan_penelitian' ? ' active show' : '' }}" id="kual-tujuan_penelitian" role="tabpanel">
                            <h4>(Tujuan Penelitian)‌ ج.	أهداف البحث  </h4>
                            <p style="text-align: justify;" class="mt-3">
                                Tujuan penelitian harus menunjukkan pernyataan yang berisi tentang tujuan yang ingin dicapai melalui proses penelitian. Tujuan penelitian harus terkait dengan pertanyaan-pertanyaan yang telah dirumuskan dalam rumusan masalah atau fokus penelitian.

                            </p>
                        </div>
                        <div class="tab-pane {{ $tab2 === 'kual-manfaat_penelitian' ? ' active show' : '' }}" id="kual-manfaat_penelitian" role="tabpanel">
                            <h4>(Manfaat Penelitian)‌ د.	فوائد البحث </h4>
                            <p style="text-align: justify;" class="mt-3">
                                Manfaat penelitian berisi tentang sumbangan/kontribusi positif terkait dengan hasil penelitian. Manfaat penelitian terdiri dari manfaat teoritis maupun praktis. Untuk manfaat teoritis berisi keterkaitan hasil penelitian dengan pengembangan ilmu ekonomi/manajemen/akuntansi/syariah, seperti munculnya pandangan atau wawasan baru, atau perkembangan suatu teori, menguji teori, atau mengkritik teori. 
                            </p>
                            <p style="text-align: justify;" class="mt-3">
                                Manfaat praktis, lebih mengarah pada aplikasi hasil penelitian, seperti sumbangan nyata yang dapat digunakan sebagai dasar kebijakan atas suatu keputusan yang sudah maupun yang akan dilakukan.

                            </p>
                        </div>
                        <div class="tab-pane {{ $tab2 === 'kual-hipotesis_penelitian' ? ' active show' : '' }}" id="kual-hipotesis_penelitian" role="tabpanel">
                            <h4>(Hipotesis Penelitian)‌ ‌ه.	فروض البحث</h4>
                            <p style="text-align: justify;" class="mt-3">
                                Hipotesis berisi rumusan secara singkat, lugas dan jelas yang dinyatakan dalam kalimat <strong> pernyataan </strong>. Dikatakan demikian, agar hipotesis dapat diuji atau dijawab sesuai dengan teknik analisis yang telah ditentukan. Tidak semua penelitian memerlukan hipotesis.

                            </p>
                        </div>
                        <div class="tab-pane {{ $tab2 === 'kual-ruang_lingkup_penelitian' ? ' active show' : '' }}" id="kual-ruang_lingkup_penelitian" role="tabpanel">
                            <h4>(Ruang lingkup Penelitian)‌‌ و.	حدود البحث    </h4>
                            <p style="text-align: justify;" class="mt-3">
                                Batasan penelitian dibuat sesuai dengan ruang lingkup penelitian yang akan dilakukan dengan mempertimbangkan aspek-aspek metodologis, kelayakan di lapangan dan keterbatasan yang ada pada penulis tanpa mengorbankan kebermaknaan arti, konsep atau topik yang diteliti. Keterbatasan penelitian menunjuk suatu keadaan yang tidak bisa dihindari dalam peneliti. Ada 2 (dua) hal yang menjadi keterbatasan penelitian, yaitu: pertama, keterbatasan ruang lingkup kajian, dan kedua, keterbatasan yang bersumber dari aspek teknis penelitian.

                            </p>
                        </div>
                        <div class="tab-pane {{ $tab2 === 'kual-definisi_operasional' ? ' active show' : '' }}" id="kual-definisi_operasional" role="tabpanel">
                            <h4>(Definisi Operasional)‌ ز.	تحديد المصطلحات </h4>
                            <p style="text-align: justify;" class="mt-3">
                                Dalam penelitian kuantitatif, definisi operasional adalah penjelasan operasionalisasi semua variabel yang dimasukkan dalam hipotesis. Definisi operasional menjelaskan karakteristik yang dapat diamati dalam rangka mengukur variabel. Pengukuran variabel adalah penentuan besaran, dimensi, atau kapasitas, biasanya terhadap satuan pengukuran. Penulis harus memberikan arti dan menjelaskan cara-cara atau langkah-langkah dalam mengukur variabel tersebut, termasuk menjabarkan indikator-indikator dari alat ukur penelitian. Penentuan indikator-indikator alat ukur penelitian harus mengacu pada tinjauan pustaka yang telah diuraikan sebelumnya, dan boleh membuat alat ukur sendiri jika pengukuran tersebut belum pernah dipakai oleh penulis sebelumnya.

                            </p>
                        </div>
                        <div class="tab-pane {{ $tab2 === 'kual-kajian_terdahulu' ? ' active show' : '' }}" id="kual-kajian_terdahulu" role="tabpanel">
                            <h4>(Kajian terdahulu)‌ ح.	الدراسات السابقة</h4>
                            <p style="text-align: justify;" class="mt-3">
                                Dalam penelitian terdahulu dijelaskan adanya keterkaitan atau kesamaan masalah penelitian yang sedang dilakukan dengan penelitian sebelumnya. Untuk memperjelas posisi penelitian yang akan dilakukan, maka  dijabarkan letak persamaan dan perbedaan antara penelitian terdahulu dengan penelitian yang dilakukan. Selain itu, memungkinkan juga apabila ternyata belum ada peneliti sebelumnya yang membahas lingkup masalah penelitian yang dilakukan. Hasil penelitian terdahulu perlu dikemukakan, disamping dalam bentuk deskripsi, juga dalam theoretical mapping, yang disajikan dalam tabel berikut:  

                            </p>
                        </div>
                        <div class="tab-pane {{ $tab2 === 'kual-landasan_teori' ? ' active show' : '' }}" id="kual-landasan_teori" role="tabpanel">
                            <h4>(Landasan Teori) الفصل الثاني: الإطار النظري </h4>
                            <p style="text-align: justify;" class="mt-3">
                                Bagian ini berisi kajian berbagai teori yang relevan dan kemutakhiran dengan masalah yang akan diteliti. Dalam kajian teori, peneliti melakukan sintesis terhadap teori yang relevan agar diperoleh legitimasi konseptual terhadap variabel yang akan diteliti. Unsur-unsur suatu teori hendaknya nampak secara jelas, seperti definisi, asumsi, hubungan antar variabel, dan daya penjelasannya terhadap masalah yang diteliti. 
                            </p>
                            <p style="text-align: justify;" class="mt-3">
                                Bahan-bahan kajian teori dapat diangkat dari berbagai sumber seperti, buku teks, jurnal penelitian atau penelitian terdahulu, skripsi orang lain, laporan penelitian, makalah, laporan seminar dan diskusi ilmiah, terbitan-terbitan resmi pemerintah, dan atau yang bersumber dari website. Akan lebih baik jika kajian teoritis dan telaah terhadap temuan-temuan penelitian didasarkan pada sumber kepustakaan primer. 
                            </p>
                            <p style="text-align: justify;" class="mt-3">
                                Kualitas hasil karya Ilmiah tidak berkaitan dengan banyaknya buku yang tercantum dalam daftar pustaka, tetapi pada kualitas pustaka yang digunakan. Hal ini karena tidak jarang dijumpai skripsi yang mencantumkan daftar kepustakaan yang sangat banyak, tetapi apabila ditelusuri keterkaitan antar isi kepustakaan dan masalah yang dibahas ridak terlalu jelas. Oleh karena itu, pemilihan sumber pustaka harus memenuhi dua persyaratan:
                            </p>
                            <p style="text-align: justify;" class="mt-3">
                                a.	Kemutakhiran sumber bacaan, artinya sumber bacaan diupayakan yang kadaluwarsa untuk ditinggalkan.
                            </p>
                            <p style="text-align: justify;" class="mt-3">
                                b.	Adanya keterkaitan antara isi bacaan dengan masalah yang dibahas.
                            </p>
                            <p style="text-align: justify;" class="mt-3">
                                Langkah-langkah yang dilakukan dalam kajian teoritis melalui sumber-sumber bacaan adalah sebagai berikut:
                            </p>
                            <p style="text-align: justify;" class="mt-3">
                                a.	Memetakan konsep (concept map) keilmuan dan keislaman dengan cara mengkaji teori-teori keilmuan dan keislaman yang berhubungan dengan konsep-konsep yang dipermasalahkan dan yang akan dipakai dalam analisis.  
                            </p>
                            <p style="text-align: justify;" class="mt-3">
                                b.	Membahas secara sistematis teori-teori keislaman dan keilmuan sesuai dengan disiplin ilmu masing-masing jurusan, atau tema-tema yang dikehendaki. Di sini, mahasiswa perlu memperkaya diri dengan konsep-konsep atau isyarat-isyarat sains yang bertaburan di dalam Alqur'an dan Hadits. Dalam mengkaji ayat al-Quran harus merujuk pada penafsiran para ulama (kitab tafsir) dan buku teks.
                            </p>
                            <p style="text-align: justify;" class="mt-3">
                                c.	Memadukan atau mengintegrasikan hasil-hasil kajian teori yang berisi jawaban sementara (hipotesis) terhadap rumusan masalah, atau rangkuman argumentasi teoritik yang akan digunakan dalam analisis hasil kajian dengan cara mencari titik kesamaan atau perpaduan antara sains dan Islam (atau konsep yang ada pada Alqur'an dan Hadis) sebagimana telah dijelaskan dalam Bab I bagian 1.5 Model penulisan Integrasi.


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