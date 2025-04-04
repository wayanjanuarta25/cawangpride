@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Riwayat Login</h1>

    <form action="{{ route('login_history.clear') }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-warning text-white mb-4" onclick="return confirm('Yakin ingin menghapus semua riwayat login?')">Hapus Semua</button>
    </form>    

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengguna</th>
                <th>Email</th>
                <th>IP Address</th>
                <th>Browser</th>
                <th>Waktu Login</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($histories as $key => $history)
                <tr>
                    <td>{{ $histories->firstItem() + $key }}</td>
                    <td>{{ $history->user->name }}</td>
                    <td>{{ $history->user->email }}</td>
                    <td>{{ $history->ip_address }}</td>
                    <td>{{ $history->user_agent }}</td>
                    <td>{{ $history->login_at }}</td>
                    <td>
                        <form action="{{ route('login_history.destroy', $history->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus riwayat ini?')">Hapus</button>
                        </form>                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $histories->links('pagination::bootstrap-4') }}

</div>
@endsection
