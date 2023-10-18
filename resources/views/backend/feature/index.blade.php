@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Categories</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-4 col-md-5">
        <div class="panel">
            <div class="panel-header">
                <h5>Add New Category</h5>
            </div>
            <div class="panel-body">
                <div class="row g-3">
                    <div class="col-12">
                        <label class="form-label">Category Name</label>
                        <input type="text" class="form-control form-control-sm" id="categoryTitle">
                        <p class="perma-txt" hidden>
                            Permalink: <span data-link="https://example.com/" class="site-link text-primary" id="categoryPermalink">https://example.com/</span><input type="text" class="form-control form-control-sm" hidden="" id="editPermalink">
                            <button class="btn-flush bg-primary" id="editPermaBtn">Edit</button>
                            <button class="btn-flush bg-success" id="createPerma" hidden="">OK</button>
                            <button class="btn-flush bg-danger" id="cancelPerma" hidden="">Cancel</button>
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">Main Category</label>
                        <select class="form-control form-control-sm" data-placeholder="Select">
                            <option value="">Select</option>
                            <option value="0">Cloth</option>
                            <option value="1">-Fashion</option>
                            <option value="2">--Jewellery</option>
                            <option value="3">---Bag</option>
                            <option value="4">----Smart Phone</option>
                            <option value="5">Watch</option>
                            <option value="6">Sunglass</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">Custom Category Icon</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Fontawesome 6 pro icon name">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Description</label>
                        <textarea rows="5" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Display Type</label>
                        <select class="form-control form-control-sm">
                            <option value="0">Default</option>
                            <option value="1">Products</option>
                            <option value="2">Subcategories</option>
                            <option value="3">Both</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="upload-category-thumbnail">
                            <label class="form-label mb-0" id="addCatThumb">Add Category Thumbnail</label>
                            <input type="text" id="thumbUpload">
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <div class="btn-box">
                            <button class="btn btn-sm btn-primary">Save Category</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-8 col-md-7">
        <div class="panel">
            <div class="panel-header">
                <h5>All Categories</h5>
                <div class="btn-box d-flex gap-2">
                    <div id="tableSearch"></div>
                    <button class="btn btn-sm btn-icon btn-outline-primary"><i class="fa-light fa-arrows-rotate"></i></button>
                    <div class="digi-dropdown dropdown">
                        <button class="btn btn-sm btn-icon btn-outline-primary" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="fa-regular fa-ellipsis-vertical"></i></button>
                        <ul class="digi-dropdown-menu dropdown-menu">
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
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-filter-option">
                    <div class="row justify-content-between g-3">
                        <div class="col-xxl-4 col-6 col-xs-12">
                            <form class="row g-2">
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
                            </form>
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
                            <th>Name</th>
                            <th>Description</th>
                            <th>Slug</th>
                            <th>Count</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="table-category-card">
                                    <div class="part-icon">
                                        <span><i class="fa-light fa-vest"></i></span>
                                    </div>
                                    <div class="part-txt">
                                        <span class="category-name">Fashion</span>
                                    </div>
                                </div>
                            </td>
                            <td><span class="table-dscr">The description is not prominent by default; however, some themes may show it.</span></td>
                            <td>fashion</td>
                            <td><a href="dashboard-all-product.html">10</a></td>
                            <td>
                                <div class="btn-box">
                                    <button><i class="fa-light fa-eye"></i></button>
                                    <button><i class="fa-light fa-pen-to-square"></i></button>
                                    <button><i class="fa-light fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="table-category-card">
                                    <div class="part-icon">
                                        <span><img src="dashboad/assets/images/image.png" alt="image"></span>
                                    </div>
                                    <div class="part-txt">
                                        <span class="category-name">Fashion</span>
                                    </div>
                                </div>
                            </td>
                            <td><span class="table-dscr">The description is not prominent by default; however, some themes may show it.</span></td>
                            <td>fashion</td>
                            <td><a href="dashboard-all-product.html">10</a></td>
                            <td>
                                <div class="btn-box">
                                    <button><i class="fa-light fa-eye"></i></button>
                                    <button><i class="fa-light fa-pen-to-square"></i></button>
                                    <button><i class="fa-light fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="table-category-card">
                                    <div class="part-icon">
                                        <span><i class="fa-light fa-vest"></i></span>
                                    </div>
                                    <div class="part-txt">
                                        <span class="category-name">Fashion</span>
                                    </div>
                                </div>
                            </td>
                            <td><span class="table-dscr">The description is not prominent by default; however, some themes may show it.</span></td>
                            <td>fashion</td>
                            <td><a href="dashboard-all-product.html">10</a></td>
                            <td>
                                <div class="btn-box">
                                    <button><i class="fa-light fa-eye"></i></button>
                                    <button><i class="fa-light fa-pen-to-square"></i></button>
                                    <button><i class="fa-light fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="table-category-card">
                                    <div class="part-icon">
                                        <span><img src="dashboad/assets/images/image.png" alt="image"></span>
                                    </div>
                                    <div class="part-txt">
                                        <span class="category-name">Fashion</span>
                                    </div>
                                </div>
                            </td>
                            <td><span class="table-dscr">The description is not prominent by default; however, some themes may show it.</span></td>
                            <td>fashion</td>
                            <td><a href="dashboard-all-product.html">10</a></td>
                            <td>
                                <div class="btn-box">
                                    <button><i class="fa-light fa-eye"></i></button>
                                    <button><i class="fa-light fa-pen-to-square"></i></button>
                                    <button><i class="fa-light fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="table-category-card">
                                    <div class="part-icon">
                                        <span><i class="fa-light fa-vest"></i></span>
                                    </div>
                                    <div class="part-txt">
                                        <span class="category-name">Fashion</span>
                                    </div>
                                </div>
                            </td>
                            <td><span class="table-dscr">The description is not prominent by default; however, some themes may show it.</span></td>
                            <td>fashion</td>
                            <td><a href="dashboard-all-product.html">10</a></td>
                            <td>
                                <div class="btn-box">
                                    <button><i class="fa-light fa-eye"></i></button>
                                    <button><i class="fa-light fa-pen-to-square"></i></button>
                                    <button><i class="fa-light fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="table-category-card">
                                    <div class="part-icon">
                                        <span><img src="dashboad/assets/images/image.png" alt="image"></span>
                                    </div>
                                    <div class="part-txt">
                                        <span class="category-name">Fashion</span>
                                    </div>
                                </div>
                            </td>
                            <td><span class="table-dscr">The description is not prominent by default; however, some themes may show it.</span></td>
                            <td>fashion</td>
                            <td><a href="dashboard-all-product.html">10</a></td>
                            <td>
                                <div class="btn-box">
                                    <button><i class="fa-light fa-eye"></i></button>
                                    <button><i class="fa-light fa-pen-to-square"></i></button>
                                    <button><i class="fa-light fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="table-bottom-control"></div>
            </div>
        </div>
    </div>
</div>
@endsection