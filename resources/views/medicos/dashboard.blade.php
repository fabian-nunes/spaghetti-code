@extends('medicos/layout')
{{-- //Author: Guilherme Jafar--}}
@section('content')
    <div>
        <div class="row">
            <div class="col-6"> <h2 class="titulo">Consultas</h2></div>
            <div class="col-5"> <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Pesquisa Utente"></div><label for="myInput"><i class="fa fa-search fa-2x"></i></label>
        </div>
        <div class="card card-dashboard">
            <table id="myTable" style="width:100%">
                <tbody>
                @foreach ($consulta as $c)
                <tr>
                    <td scope="row">{{ $c->nome }}</td>
                    <td>{{ $c->especialidae }}</td>
                    <td>{{ $c->DataHora }}</td>
                    <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> > </button></td>
                </tr>

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title titulo" id="exampleModalLongTitle">Iniciar Consulta</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Deseja dar Início a consulta?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Cancelar</button>
                            <a href="{{ url('terminarconsulta/'.$c->id) }}" type="button" class="btn btn-primary">Iniciar</a>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
                </tbody>
            </table>
        </div>
    </div>





  <div>
       <br><br><br><br><br>
      <div class="row">
          <div class="col-6"> <h2 class="titulo">Consultas Iniciadas</h2></div>
      </div>
        <div class="card card-dashboard">
            <table id="myTable" style="width:100%">
                <tbody>
                @foreach ($iniciadas as $i)
                <tr>
                    <td scope="row">{{ $i->nome }}</td>
                    <td>{{ $i->especialidae }}</td>
                    <td>{{ $i->DataHora }}</td>
                    <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2"> > </button></td>
                </tr>


         <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title titulo" id="exampleModalLongTitle">Retomar Consulta</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Deseja Retomar a consulta?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Cancelar</button>
                        <a href="{{ url('terminarconsulta/'.$i->id) }}" type="button" class="btn btn-primary">Retomar</a>
                    </div>
                </div>
            </div>
        </div>

     @endforeach
                </tbody>
            </table>
        </div>
  </div>

<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
@endsection
