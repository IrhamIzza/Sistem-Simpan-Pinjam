@extends('layouts.app')

@section('page-title', 'Laporan ')

@section('content-app')
<div class="row row-cards">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" id="recent_mutations_today_desc">{{ __('Laporan Daftar Mutasi ') }}</h3>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable" aria-describedby="recent_mutations_today_desc">
                    <thead>
                    <th class="font-weight-bold text-muted">Periode</th>
                                    <th>
                                    <div class="form-row">
                                        <div class="col">
                                            <input type="text" id="onlmonth" name="month" autocomplete="off" class="form-control" required placeholder="Bulan">
                                        </div>
                                        <div class="col">
                                            <input type="text" id="onlyear" name="year" autocomplete="off" class="form-control" required placeholder="Tahun">
                                        </div>
                                        <div class="col-md-5">
                                                <button id="btn-check-interest" class="btn btn-primary">{{ __('OK') }}</button>
                                        </div>
                                </th>
                        <tr>
                            <th scope="col" class="w-1">No.</th>
                            <th scope="col">{{ __('member') }}</th>
                            <th scope="col">{{ __('date') }}</th>
                            <th scope="col">{{ __('note') }}</th>
                            <th scope="col" class="text-right">{{ __('debit') }}</th>
                            <th scope="col" class="text-right">{{ __('credit') }}</th>
                            <th scope="col" class="text-right">{{ __('balance') }}</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mutations as $mutation)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div>{{ $mutation->member->nama }}</div>
                                    <div class="small text-muted">
                                        NIK: {{ $mutation->member->nik }}
                                    </div>
                                </td>
                                <td>{{ $mutation->tanggal }}</td>
                                <td>{{ $mutation->keterangan }}</td>
                                <td class="text-right">{{ format_rupiah($mutation->debet) }}</td>
                                <td class="text-right">{{ format_rupiah($mutation->kredit) }}</td>
                                <td class="text-right">{{ format_rupiah($mutation->saldo) }}</td>
                                <td class="text-muted">{{ $mutation->created_at->diffForHumans() }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">{{ __('data_not_found') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
