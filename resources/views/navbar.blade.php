<nav class="navbar navbar-default">
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed"
            data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">Sistem Akademik</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
        @if (!empty($halaman) && $halaman == 'data_mahasiswa')
            <li class="active"><a href="{{ url('data_mahasiswa') }}">Mahasiswa<span class="sr-only">(current)</span></a></li>
        @else
            <li><a href="{{ url('data_mahasiswa') }}">Mahasiswa</a></li>
        @endif

        @if(!empty($halaman) && $halaman == 'lihat_data_mahasiswa')
            <li class="active"><a href="{{ url('lihat_data_mahasiswa') }}">Data Mahasiswa<span class="sr-only">(current)</span></a></li>
            @else
            <li><a href="{{ url('lihat_data_mahasiswa') }}">Data Mahasiswa</a></li>
            @endif

        @if(!empty($halaman) && $halaman == 'input_mahasiswa')
            <li class="active"><a href="{{ url('input_mahasiswa') }}">Input Mahasiswa<span class="sr-only">(current)</span></a></li>
            @else
            <li><a href="{{ url('input_mahasiswa') }}">Input Mahasiswa</a></li>
            @endif
        </ul>
    </div>
</div>
</nav>