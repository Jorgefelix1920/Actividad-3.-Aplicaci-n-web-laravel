<link rel="shortcut icon" href="{{ asset('img/crud-logo.png') }}">

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                        <h1 class="display-4">AQUI DEBERÍA ESTÁ EL DASHBOARD</h1>
                        <p class="lead">Profe tuve problema con separar el código en la carpeta <strong>PRODUCTS </strong> tengo código repetido porque cuan usaba la función @ [extends(‘#’)] me llamaba el código dos veces, espero  poder corregir este error para el proyecto grupal.</p>
                    </div>

                    <div class="container">
                        <div class="card-deck mb-3 text-center">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Productos</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>Crea y edite productos </li>
                                        <li>Actualice productos</li>
                                        <li>Elimine productos</li>
                                        <li> Acceso al Centro de ayuda </li>
                                    </ul>
                                    <a href="{{ asset('products') }}" class="btn btn-lg btn-block btn-outline-primary" role="button" aria-disabled="true">Ver Productos</a>

                                </div>
                            </div>
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Usuario</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>Lista de Usuario</li>
                                        <li>editar usuario</li>
                                        <li>Borrar Usuario</li>
                                        <li>Crear Usuario</li>
                                    </ul>
                                    <a href="#" class="btn btn-lg btn-block btn-outline-primary" role="button" aria-disabled="true">No Funciono</a>
                                </div>
                            </div>
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Categorias</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>Nueva Categoria</li>
                                        <li>Lista de Categorias</li>
                                        <li>Phone and email support</li>
                                        <li>Acceso al Centro de ayuda</li>
                                    </ul>
                                    <a href="#" class="btn btn-lg btn-block btn-outline-primary" role="button" aria-disabled="true">No Funciono</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection