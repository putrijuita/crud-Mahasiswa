@extends("layouts.admin.app")

@section('title', 'crud Mahasiswa')
@section('content')

<div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">

                    <button type="button" class="btn btn-md btn-success rounded shadow-sm border-0 mb-3" data-bs-toggle="modal" data-bs-target="#TambahPosts">ADD NEW POST</button>
                    <div class="card border-0 rounded shadow-sm">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Content</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($posts as $post)
                                    <tr data-bs-toggle="modal" data-bs-target="#UpdatePosts{{ $post->id }}">
                                        <td class="text-center">
                                            <img src="{{ $post->image }}" class="rounded" style="width: 150px">
                                        </td>
                                        <td>{{ $post->title }}</td>
                                        <td>{!! $post->content !!}</td>
                                    </tr>
                                    @include('pages.admin.posts.update.index')
                                    @include('pages.admin.posts.delete.index')
                                    @empty
                                    <div class="alert alert-danger">
                                        Data Post belum Tersedia.
                                    </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('pages.admin.posts.create.index')
@endsection