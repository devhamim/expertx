@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Blog</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-4 col-md-5">
        <div class="panel">
            <div class="panel-header">
                <h5>Add New Blog</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Category</label>
                            <select name="feature_id" id="" class="form-control form-control-sm @error('feature_id') is-invalid @enderror" value="{{ old('feature_id') }}">
                                @foreach ($feature_id as $feature)
                                    <option value="{{ $feature->id }}">{{ $feature->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control form-control-sm @error('title') is-invalid @enderror" value="{{ old('title') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control form-control-sm @error('image') is-invalid @enderror" value="{{ old('image') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="tags">Tags</label>
                            <input type="text" id="tags"  class="form-control form-control-sm @error('tags') is-invalid @enderror" value="{{ old('tags') }}">
                        </div>
                        <div id="selected-tags"></div>
                        <div class="col-6">
                            <label class="form-label">Home Page</label>
                            <div class="form-check mb-10">
                                <input class="form-check-input @error('define') is-invalid @enderror" type="radio" name="define" id="gridRadios1" value="1">
                                <label class="form-check-label" for="gridRadios1">
                                    No
                                </label>
                            </div>
                            <div class="form-check mb-10">
                                <input class="form-check-input @error('define') is-invalid @enderror" type="radio" name="define" id="gridRadios1" value="2">
                                <label class="form-check-label" for="gridRadios1">
                                    yes
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea rows="7" id="summernote" name="description" class="form-control form-control-sm @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                            @error('description')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
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
                <h5>All Blog</h5>
                <div class="btn-box d-flex gap-2">
                    <div id="tableSearch"></div>
                    <div class="digi-dropdown dropdown">

                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-filter-option">
                    <div class="row justify-content-between g-3">
                        <div class="col-xxl-4 col-6 col-xs-12">
                            
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
                            <th>Category</th>
                            <th>Added By</th>
                            <th>Tag</th>
                            {{-- <th>Description</th> --}}
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>
                                    <div class="table-category-card">
                                        <div class="part-icon">
                                            <span><img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt=""></span>
                                        </div>
                                        <div class="part-txt" >
                                            <span class="category-name">{{ $blog->title }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="table-dscr">{{ $blog->rel_to_feature->name }}</span></td>
                                <td>
                                    @if($blog->added_by != null)
                                        <span class="table-dscr">{{ $blog->rel_to_user->name }}</span>
                                    @else
                                        <span class="table-dscr">N/A</span>
                                    @endif
                                </td>
                                <td><span class="table-dscr">{{ $blog->tags }}</span></td>
                                {{-- <td><span class="table-dscr" style="height: 40px; width: 40px">{!! $blog->description !!}</span></td> --}}
                                <td>
                                    @if ($blog->status == 1)
                                        <span class="table-dscr text-success">Active</span>
                                    @else
                                        <span class="table-dscr text-warning">Deactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-box">
                                        <a href="{{ route('blog.edit', $blog->id) }}"><i class="fa-light fa-pen-to-square"></i></a>
                                        <form action="{{ route('blog.destroy',  $blog->id) }}" method="POST">
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        const selectedTags = [];

        $('#tags').on('keydown', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault(); // Prevent form submission on Enter
                const tag = $(this).val().trim();
                if (tag !== '') {
                    selectedTags.push(tag);
                    $(this).val('');
                    updateSelectedTags();
                }
            }
        });

        function updateSelectedTags() {
            $('#selected-tags').empty();
            selectedTags.forEach(function(tag) {
                $('#selected-tags').append('<span class="tag bg-success text-white pb-1 px-2 rounded mx-1">' + tag + '</span><input type="hidden" readonly value="' + tag + '" name="tags[]" >');
            });
        }
    });

</script>

