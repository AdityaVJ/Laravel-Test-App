@extends('lbd::layout-admin')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row m-2">
            <div class="col-md-3">
                <form class="form-inline" role="form" method="POST">
                    <div class="row mt-2">
                        {{ csrf_field() }}
                        <div class="col ">
                            <select name="export" class="form-control">
                                <option value="csv" selected="selected">CSV</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary ">
                            Export
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <form class="form-inline" role="form" method="GET">
                    <div class="row mt-2">
                        {{ csrf_field() }}
                        <div class="row">
                            <select name="id" class="form-control">
                                {{--                                @foreach($courses as $course)--}}
                                {{--                                    <option value="{{  $course->id  }}">{{  $course->title  }}</option>--}}
                                {{--                                @endforeach--}}
                                <option value="course_1">Course 1</option>
                            </select>
                        </div>
                        <div class="row">
                            <select class="form-control" id="status" name="status">
                                <option value="Prospective">Prospective</option>
                                <option value="Interested">Interested</option>
                                <option value="Not Interested">Not Interested</option>
                                <option value="Call Again">Call Again</option>
                                <option value="Provisional Admission">Provisional Admission</option>
                                <option value="Full Admission Taken">Full Admission Taken</option>
                                <option value="Dropout">Dropout</option>
                            </select>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-info text-right">
                                Filter
                            </button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-1">
                <a href="#" class="btn btn-primary p-2 m-2 ">
                    Reset Filter
                </a>
            </div>
        </div>
        <div class="card bootstrap-table">
            <div class="card-body table-full-width">
                <div class="toolbar">
                    <!--      Server side Search             -->
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <table id="bootstrap-table" class="table">
                    <thead>
                    <tr>
                        <th data-field="state" data-checkbox="true"></th>
                        <th data-field="name" data-sortable="true">Name</th>
                        <th data-field="phone" data-sortable="true">Phone</th>
                        <th data-field="phone" data-sortable="true">Email</th>
                        <th data-field="actions" class="td-actions text-right">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
{{--                        <tr>--}}
{{--                            <td></td>--}}
{{--                            <td>{{ $student->name }}</td>--}}
{{--                            <td>{{ $student->phone }}</td>--}}
{{--                            <td>{{ $student->email }}</td>--}}
{{--                            <td>--}}
{{--                                <a rel="tooltip" title="View" class="btn btn-link btn-info table-action view" href="#">--}}
{{--                                    <i class="fa fa-image"></i></a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
                    @livewire('lead-entry', ['student' => $student], key($loop->index))
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{--            {{ $students->appends(Request::except('_token'))->links() }}--}}
            {{--            <p class="text-muted pull-right"> &nbsp;Total number of students: {{  $students->total() }}</p>--}}
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        var $table = $('#bootstrap-table');

        $().ready(function () {

            $table.bootstrapTable({
                toolbar: ".toolbar",
                clickToSelect: false,
                showRefresh: false,
                search: false,
                showToggle: true,
                showColumns: true,
                filterControl: true,
                showExport: false,
                filterShowClear: false,
                pagination: false,
                searchAlign: 'right',

                formatShowingRows: function (pageFrom, pageTo, totalRows) {
                    //do nothing here, we don't want to show the text "showing x of y from..."
                },
                formatRecordsPerPage: function (pageNumber) {
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle',
                    clear: 'fa fa-trash-o',
                    export: 'fa fa-file-export'

                }

            });
            //activate the tooltips after the data table is initialized
            $('[rel="tooltip"]').tooltip();

            $(window).resize(function () {
                $table.bootstrapTable('resetView');
            });
        });
    </script>

@endpush

