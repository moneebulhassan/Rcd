@extends('layouts.app')

@section('content')


    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Links') }}</h2>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="card-styles">
        <div class="card-style-3 mb-30">
            <div class="card-content">

                <div class="alert-box primary-alert">
                    <div class="alert">
                        <p>
                            <a href="{{ route('links.create') }}" class="btn btn-primary">Add Link</a>
                        </p>

                    </div>
                </div>

                <div class="table-wrapper table-responsive">

                    <table class="table striped-table">
                        @include('pages.alerts.success')

                        <thead>
                        <tr>
                            <th><h6>ID</h6></th>
                            <th><h6>Name</h6></th>
                            <th><h6>Branch</h6></th>
                        </tr>
                        <!-- end table row-->
                        </thead>
                        <tbody>
                        @if(count($link))
                        @foreach( $link as $li)
                            <tr>
                                <td><p>{{ $li->id }}</p></td>
                                <td><p>{{ $li->name }}</p></td>
                                <td><p>{{ $li->branch['name'] }}</p></td>
                                <td>
                                    <a href="{{ route('links.edit',$li->id) }}"  class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>

                                    </a>
                                    /
                                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg>


                                    </a>
                                    <form action="{{ route('links.destroy',$li->id) }}" method="post">
                                        @method('DELETE')
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        @else
                            <tr><td colspan="3">No link found</td></tr>
                        @endif
                        <!-- end table row -->
                        </tbody>
                    </table>
                    <!-- end table -->

                    {{ $link->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection
