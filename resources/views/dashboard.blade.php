@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-3">Riwayat Perubahan (GitHub)</h4>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Commit</th>
                <th>Pesan</th>
                <th>Author</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @forelse($commits as $commit)
                <tr>
                    <td>
                        <a href="https://github.com/Nairha/project_Davin/commit/{{ $commit['hash'] }}" target="_blank">
                            <code>{{ $commit['hash'] }}</code>
                        </a>
                    </td>
                    <td>{{ $commit['message'] }}</td>
                    <td>{{ $commit['author'] }}</td>
                    <td>{{ $commit['date'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Belum ada riwayat commit</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
