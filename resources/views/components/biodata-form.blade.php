<div class="biodata-form">
    <form action="{{ $action }}" method="POST" style="max-width:400px; margin:11px auto; display:flex; flex-direction:column; gap:12px;">
        @csrf
        @if($method === 'PUT')
            @method('PUT')
        @endif

        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" value="{{ $bio->nama_lengkap ?? '' }}">

        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin">
            <option value="Laki-laki" {{ (isset($bio) && $bio->jenis_kelamin=='Laki-laki')?'selected':'' }}>Laki-laki</option>
            <option value="Perempuan" {{ (isset($bio) && $bio->jenis_kelamin=='Perempuan')?'selected':'' }}>Perempuan</option>
        </select>

        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" value="{{ $bio->tanggal_lahir ?? '' }}">

        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" value="{{ $bio->tempat_lahir ?? '' }}">

        <label for="agama">Agama</label>
        <input type="text" name="agama" value="{{ $bio->agama ?? '' }}">

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" value="{{ $bio->alamat ?? '' }}">

        <label for="telepon">Telepon</label>
        <input type="text" name="telepon" value="{{ $bio->telepon ?? '' }}">

        <label for="email">Email</label>
        <input type="email" name="email" value="{{ $bio->email ?? '' }}">

        <button type="submit">{{ $method === 'PUT' ? 'Update Data' : 'Tambah Data' }}</button>
    </form>
</div>
