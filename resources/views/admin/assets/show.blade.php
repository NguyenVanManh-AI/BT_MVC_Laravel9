@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Chi tiết sản phẩm
        {{-- {{ trans('global.show') }} {{ trans('cruds.asset.title') }} --}}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.assets.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.asset.fields.id') }}
                        </th>
                        <td>
                            {{ $asset->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{-- {{ trans('cruds.asset.fields.name') }} --}} Tên sản phẩm
                        </th>
                        <td>
                            {{ $asset->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{-- {{ trans('cruds.asset.fields.description') }} --}} Mô tả sản phẩm
                        </th>
                        <td>
                            {{ $asset->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{-- Danger level --}} Giá 
                        </th>
                        <td>
                            {{ $asset->danger_level }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.assets.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
