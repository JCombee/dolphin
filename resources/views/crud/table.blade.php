@extends('template.default')


@section('title', $title)

@section('wrapper')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ $title }}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                @foreach($collumns as $colName)
                                    <th>{{ $colName }}</th>
                                @endforeach
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rows as $row)
                                <tr class="odd gradeX">
                                    @foreach($collumns as $colKey => $colName)
                                        <th>{{ $row->$colKey }}</th>
                                    @endforeach
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

@endsection