@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Feature</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-4 col-md-5">
        <div class="panel">
            <div class="panel-header">
                <h5>Add New Feature</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('feature.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Feature Name</label>
                            <input type="text" name="name" class="form-control form-control-sm" id="categoryTitle">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Feature Icon</label>
                            <input type="file" name="icon" class="form-control form-control-sm">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Feature Image</label>
                            <input type="file" name="image" class="form-control form-control-sm">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea rows="5" name="description" class="form-control form-control-sm"></textarea>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <div class="btn-box">
                                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xxl-8 col-md-7">
        <div class="panel">
            <div class="panel-header">
                <h5>All Feature</h5>
                <div class="btn-box d-flex gap-2">
                    <div id="tableSearch"></div>
                    {{-- <button class="btn btn-sm btn-icon btn-outline-primary"><i class="fa-light fa-arrows-rotate"></i></button> --}}
                    <div class="digi-dropdown dropdown">
                        {{-- <button class="btn btn-sm btn-icon btn-outline-primary" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="fa-regular fa-ellipsis-vertical"></i></button> --}}
                        {{-- <ul class="digi-dropdown-menu dropdown-menu">
                            <li class="dropdown-title">Show Table Title</li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="showName" checked>
                                    <label class="form-check-label" for="showName">
                                        Name
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="showDescription" checked>
                                    <label class="form-check-label" for="showDescription">
                                        Description
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="showSlug" checked>
                                    <label class="form-check-label" for="showSlug">
                                        Slug
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="showCount" checked>
                                    <label class="form-check-label" for="showCount">
                                        Count
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="showAction" checked>
                                    <label class="form-check-label" for="showAction">
                                        Action
                                    </label>
                                </div>
                            </li>
                            <li class="dropdown-title pb-1">Showing</li>
                            <li>
                                <div class="input-group">
                                    <input type="number" class="form-control form-control-sm w-50" value="10">
                                    <button class="btn btn-sm btn-primary w-50">Apply</button>
                                </div>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-filter-option">
                    <div class="row justify-content-between g-3">
                        <div class="col-xxl-4 col-6 col-xs-12">
                            {{-- <form class="row g-2">
                                <div class="col-8">
                                    <select class="form-control form-control-sm" data-placeholder="Bulk action">
                                        <option value="">Bulk action</option>
                                        <option value="0">Edit</option>
                                        <option value="1">Move To Trash</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <button class="btn btn-sm btn-primary w-100">Apply</button>
                                </div>
                            </form> --}}
                        </div>
                        <div class="col-xl-2 col-3 col-xs-12 d-flex justify-content-end">
                            <div id="productTableLength"></div>
                        </div>
                    </div>
                </div>
                <table class="table table-dashed table-hover digi-dataTable all-product-table table-striped" id="allProductTable">
                    <thead>
                        <tr>
                            <th class="no-sort">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="markAllProduct">
                                </div>
                            </th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($features as $feature)
                            <tr>
                                <td>
                                    <div class="table-category-card">
                                        <div class="part-icon">
                                            <span><img src="{{ asset('uploads/feature') }}/{{ $feature->icon }}" alt=""></span>
                                        </div>
                                        <div class="part-txt">
                                            <span class="category-name">{{ $feature->name }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td><img width="80px" src="{{ asset('uploads/feature') }}/{{ $feature->image }}" alt=""></td>
                                <td><span class="table-dscr">{{ $feature->description }}</span></td>
                                <td>
                                    <div class="btn-box">
                                        <a href="{{ route('feature.edit', $feature->id) }}"><i class="fa-light fa-pen-to-square"></i></a>
                                        <form action="{{ route('feature.destroy',  $feature->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class=" border-0 mr-2">
                                                <i class="fa-light fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="table-bottom-control"></div>
            </div>
        </div>
    </div>
</div>
@endsection