@extends('admin.layouts.layout')
@section('title', 'Thêm người dùng')
@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Thêm người dùng</h3>
                        </div>
                    </div>
                    {!! Form::open(['method' => 'POST', 'class' => 'form-horizontal', 'enctype'
                    => 'multipart/form-data']) !!}
                    <div class="card-body">
                        <div class="col-xl-12 form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="names">{{ __('Company name/name') }} </label>
                                    {!! Form::text('name',
                                    isset($data['name'])&&$data['name']?$data['name']:old('name'), ['placeholder' => '',
                                    'class'=>$class, 'id'=>'name']) !!}
                                </div>
                                <div class="col-md-6">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    {!! Form::text('email',
                                    isset($data['email'])&&$data['email']?$data['email']:old('email'), ['placeholder' =>
                                    '', 'class'=>$class, 'id'=>'email']) !!}
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Password') }}

                                        {!! Form::text('password',
                                        isset($data['password'])&&$data['password']?$data['password']:old('password'),
                                        ['placeholder' => '', 'class'=>$class, 'id'=>'password']) !!}
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Role') }}</label>
                                    {!! Form::select('role', [null=>__('Please Select')] + $m_list['arrRoles'],
                                    isset($data['role'])&&$data['role']?$data['role']:null, ['class' => $class, 'style'
                                    => 'width: 100%;', 'id' =>'role', 'aria-describedby' => 'roleFeedback']) !!}
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Tel') }}</label>
                                    {!! Form::text('tel', isset($data['tel'])&&$data['tel']?$data['tel']:old('tel'),
                                    ['placeholder' => '', 'class'=>$class, 'id'=>'tel']) !!}
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Status') }}</label>
                                    {!! Form::select('status', [null=>__('Please Select')] + $m_list['arrStatus'],
                                    isset($data['status'])&&$data['status']?$data['status']:null, ['class' => $class,
                                    'style' => 'width: 100%;', 'id' =>'status', 'aria-describedby' => 'statusFeedback'])
                                    !!}
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Post code') }}</label>
                                    {!! Form::text('zip_post',
                                    isset($data['zip_post'])&&$data['zip_post']?$data['zip_post']:old('zip_post'),
                                    ['placeholder' => '', 'class'=>$class, 'id'=>'zip-post']) !!}
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Address 1') }}</label>
                                    {!! Form::text('addr1',
                                    isset($data['addr1'])&&$data['addr1']?$data['addr1']:old('addr1'), ['placeholder' =>
                                    '', 'class'=>$class, 'id'=>'addr1']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Address 2') }}</label>
                                    {!! 
                                    Form::text('addr2',
                                    isset($data['addr2'])&&$data['addr2']?$data['addr2']:old('addr2'), 
                                    ['placeholder' =>'', 'class'=>$class, 'id'=>'addr2']) 
                                    !!}
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Name persident') }}</label>
                                    {!! Form::text('name_president',
                                    isset($data['name_president'])&&$data['name_president']?$data['name_president']:old('name_president'),
                                    ['placeholder' => '', 'class'=>$class, 'id'=>'namePresident']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Tel persident') }}</label>
                                    {!! Form::text('tel_president',
                                    isset($data['tel_president'])&&$data['tel_president']?$data['tel_president']:old('tel_president'),
                                    ['placeholder' => '', 'class'=>$class, 'id'=>'telPresident']) !!}
                                    <p class="error-message" id="err-image"></p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary ml-4">Submit</button>
                        <button type="button" class="btn btn-secondary ml-2 cancel">Cancel</button>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function () {
        $('.cancel').click(function () {
            const url = route('admin.users.index');
            window.location.href = url;
        })

    });

</script>
@endsection
