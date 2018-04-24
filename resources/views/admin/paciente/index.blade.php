@extends('adminlte::page')

@section('title', 'Pacientes')

@section('content_header')
<h2 class="title-box"><i class="fa fa-user-md"></i>Pacientes</h2>
@stop

@section('content')
<div class="box">
   
    <div class="box-body">
        <table class="table table-bordered table-hover">
            <tr>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Código</th>
                        <th>Última Consulta</th>
                        <th>Data Nascimento</th>
                        <th>Convênios</th>
                        <th>Ações</th>
                    <tr>
                </thead>
                <tbody>
                        <tr>
                            <td>Thales Henrique Gomes Bezerra</td>
                            <td>(83) 9 9903-1108</td>
                            <td>0123</td>
                            <td>24/04/2018</td>
                            <td>17/02/1998</td>
                            <td>Particular</td>
                            <td>
                                    <span class="glyphicon glyphicon-pencil"></span>
                                    <span class="glyphicon glyphicon-trash"></span>
                            </td> 
                        <tr>
                </tbody>
                <tbody>
                        <tr>
                            <td>Matheus Victorino</td>
                            <td>(83) 9 8790-1020</td>
                            <td>0124</td>
                            <td>01/04/2018</td>
                            <td>27/02/1989</td>
                            <td>Particular</td>
                            <td>
                                    <span class="glyphicon glyphicon-pencil"></span>
                                    <span class="glyphicon glyphicon-trash"></span>
                            </td> 
                        <tr>
                </tbody>
                <tbody>
                        <tr>
                            <td>Filipe Vaz</td>
                            <td>(83) 9 8790-1020</td>
                            <td>0124</td>
                            <td>01/04/2018</td>
                            <td>27/02/1989</td>
                            <td>Particular</td>
                            <td>
                                    <span class="glyphicon glyphicon-pencil"></span>
                                    <span class="glyphicon glyphicon-trash"></span>
                            </td> 
                        <tr>
                </tbody>
                <tbody>
                        <tr>
                            <td>Esly Alves Soares</td>
                            <td>(83) 9 8790-1020</td>
                            <td>0124</td>
                            <td>01/04/2018</td>
                            <td>27/02/1989</td>
                            <td>Particular</td>
                            <td>
                                    <span class="glyphicon glyphicon-pencil"></span>
                                    <span class="glyphicon glyphicon-trash"></span>
                            </td> 
                        <tr>
                </tbody>
        </table>

    </div>
</div>

@stop