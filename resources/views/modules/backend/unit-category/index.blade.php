@extends('layouts.backend.app')

@section('title', 'unit-category')

@include('assets.table.datatable')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('unit.create') }}" class="btn icon icon-left btn-success" data-bs-toggle-tooltip="tooltip" data-bs-placement="right" title="Add">
                    <i class="bi bi-plus-circle"> Add Unit Categori</i>
                </a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>status aktif</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($unitCategory as $column)
                                <tr>
                                    <td style="width: 75px">{{ $loop->iteration }}</td>
                                    <td>{{ $column->name }}</td>
                                    <td>{{ $column->is_active == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                                    <td style="width: 100px">
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('unit.edit', $column->id) }}" class="btn icon icon-left btn-warning" data-bs-toggle-tooltip="tooltip" data-bs-placement="left" title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>

                                            <a href="#" class="btn icon icon-left btn-danger" data-bs-toggle-tooltip="tooltip" data-bs-placement="top" title="Delete" data-bs-toggle="modal" data-bs-target="#modal_delete" onclick="modalDelete('{{ route('unit.delete', $column->id) }}')">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <x-modal.modal-delete/>
@endsection
