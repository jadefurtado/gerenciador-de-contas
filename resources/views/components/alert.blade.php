@if(session()->has('success'))
<script>
    // aguarda o carregamento da página e quando carrega, executa a função
    document.addEventListener('DOMContentLoaded', () => {
        // SweetAlert
        Swal.fire( 'Pronto!', "{{ session('success') }}", 'success');
    })
</script>
@endif

@if($errors->any())
    @php
        $mensagem = '';
        foreach ($errors->all() as $error) {
            $mensagem .=  $error  . '<br>';
        }
    @endphp
    <script>
        // aguarda o carregamento da página e quando carrega, executa a função
        document.addEventListener('DOMContentLoaded', () => {
            // SweetAlert
            Swal.fire( 'Erro!', "{!! $mensagem !!}", 'error');
        })
    </script>
@endif