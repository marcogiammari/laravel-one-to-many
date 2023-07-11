@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <h1 class="text-center pb-5">Types</h1>
        <div class="row justify-content-center">

            <table class="table table-light table-striped">
                <thead>
                    <tr>
                        <th scope="col">Type</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($types as $type)
                        <tr>
                            <td>
                                {{ $type->name }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
