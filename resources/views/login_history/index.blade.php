@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Riwayat Login</h1>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengguna</th>
                <th>Email</th>
                <th>IP Address</th>
                <th>Browser</th>
                <th>Waktu Login</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $histories->links() }} <!-- Pagination -->
</div>
@endsection
