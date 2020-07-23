<div id ="mahasiswa">
<h2>Data mahasiswa</h2>
@if(!empty($mahasiswa))
    <ul>
        @foreach($mahasiswa as $data)
            <li>{{ $data }}</li>
            @endforeach
    </ul>
            @else:
    <p>Data mahasiswa kosong.</p>
    @endif
</div>
