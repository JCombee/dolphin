@extends('template.default')


@section('title', $title)

@section('wrapper')

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Overview of all employees
                </div>

                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        @foreach($collumns as $colName)
                            <th>{{ $colName }}</th>
                        @endforeach
                        <th>{{ trans('crud.action') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rows as $row)
                        <tr class="odd gradeX">
                            @foreach($collumns as $colKey => $colName)
                                <th>{{ $row->$colKey }}</th>
                            @endforeach
                            <th>
                                <a href="{{ route($name . '.edit') }}"><i class="fa fa-edit fa-fw"></i></a>
                                <a href="#" data-toggle="modal" data-target="#confirmDelete" data-id="{{ $row->id }}" data-name="{{ $row->name }}"><i class="fa fa-trash-o fa-fw"></i></a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="confirmDeleteLabel">Confirm Delete</h4>
                </div>
                <div class="modal-body">
                    Are you sure you want to remove ... from ... .
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->

@endsection


@section('footer')

    <script>
        $(document).ready(function () {

            $('#confirmDelete').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var id = button.data('id');
                var name = button.data('name');// Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this);
                modal.find('.modal-body').text('Are you sure you want to remove ' + name + ' from {{ $title }}. ');
            });

        });
    </script>

@endsection