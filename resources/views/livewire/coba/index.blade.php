<div>
    {{var_dump($thesis_admin)}}
    <hr>
    {{var_dump($thesis_student)}}
</div>

@push('js')
<script>
    document.addEventListener('livewire:load', function () {
        // Set up a timer to trigger Livewire refresh every 10 seconds
        setInterval(function () {
            @this.getKata();
            console.log('kata refresh')
        }, 300000);
    });
</script>
@endpush