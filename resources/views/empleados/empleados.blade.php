@extends('plantilla.app')

@section('css')
     <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('contenido')

    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">:: Ingresar Empleados ::</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{url('guardarEmpleado')}}" method="post">
          @csrf
          <div class="card-body">
            <div class="form-group">
                <label >Tarea</label>
                <select name="tarea_id" >
                    @foreach ($tarea as $item)
                        <option value="{{$item->id}}">{{$item->tarea}}</option>
                    @endforeach
                </select>
              </div>
            <div class="form-group">
              <input type="text" name="nombre" class="form-control" placeholder="Nombre del empleado">
            </div>
            <div class="form-group">
                <input type="date" name="fecha_contratacion" class="form-control" placeholder="Fecha de contratacion">
              </div>
            <div class="form-group">
                <input type="text" name="salario" class="form-control" placeholder="Salario">
              </div>
              <div class="form-group">
                <input type="number" name="horas" class="form-control" placeholder="Horas de trabajo">
              </div>
              <div class="form-group">
                <input type="text" name="departamento" class="form-control" placeholder="Departamento al que pertenece">
              </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-success">Registrar</button>
          </div>
        </form>
      </div>
    </div>

  
@endsection

@section('script')
    <!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection