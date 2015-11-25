@extends('template.default')


@section('title', $title)


@section('wrapper')

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Overview of all employees
                </div>
                <form action="{{ route($name . '.store') }}" method="post">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <tbody>
                        @foreach($collumns as $col)
                            <tr class="odd gradeX">
                                <th>
                                    {{ $col->label }}
                                    <div class="text-danger">{{ $errors->first($col->attr->name) }}</div>
                                </th>
                                <th>
                                    @include('template.form-group', array('input' => $col))
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <input type="submit" value="Create" class="btn btn-primary">
                    </div>
                </form>

            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

@endsection