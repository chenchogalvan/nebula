@extends('layouts.admin')

@section('title', 'Nebula CMS')

@section('contenido')
    <div class="page-header bg-secondary text-auto d-flex flex-column justify-content-between px-6 pt-4 pb-0" style="background: url(../../assets/images/backgrounds/back1.jpg) 0 45% no-repeat;
    background-size: 100% auto;">
        <div class="row no-gutters align-items-start justify-content-between flex-nowrap">

            <div>
                <span class="h2">Bienvenido {{ Auth::user()->name }}</span>
            </div>

            <button type="button" class="sidebar-toggle-button btn btn-icon d-block d-xl-none fuse-ripple-ready" data-fuse-bar-toggle="dashboard-project-sidebar" aria-label="Toggle sidebar">
                <i class="icon icon-menu"></i>
            </button>
        </div>
        <div class="row no-gutters align-items-center project-selection">

            <div class="selected-project h6 px-4 py-2">{{ config('app.name') }} | Nebula CMS</div>

            <div class="project-selector">
                <button type="button" class="btn btn-icon fuse-ripple-ready">
                    <i class="icon icon-dots-horizontal"></i>
                </button>
            </div>
        </div>
    </div>
@endsection
