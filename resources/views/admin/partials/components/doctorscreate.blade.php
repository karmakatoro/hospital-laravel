<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Doctor</h4>
            </div>
        </div>
        <div class="row">
        @if($errors->any())
            <div class="col-sm-12 alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>


        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                <form method="POST" action="{{ route('doctors.store') }}">
                @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>First Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="first_name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" name="last_name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Username <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="user_name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="email" name="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <div class="cal-icon">
                                    <input type="text" class="form-control datetimepicker" name="date_of_birth">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group gender-select">
                                <label class="gen-label">Gender:</label>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" name="gender" class="form-check-input" value="0">Male
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" name="gender" class="form-check-input" value="1">Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-control select" name="country_id">
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" name="city">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control select" name="role_id">
                                            @foreach($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->designation }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>Affected</label>
                                        <select class="form-control select"  name="affected_id">
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->designation }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone </label>
                                <input class="form-control" type="text" name="phone">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Avatar</label>
                                <div class="profile-upload">
                                    <div class="upload-img">
                                        <img alt="" src="{{ asset('admin/assets/img/user.jpg') }}">
                                    </div>
                                    <div class="upload-input">
                                        <input type="file" class="form-control" name="avatar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Short Biography</label>
                        <textarea class="form-control" rows="3" cols="30"name="bio"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="display-block">Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="doctor_active" value="0" checked>
                            <label class="form-check-label" for="doctor_active">
                            Active
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="doctor_inactive" value="1">
                            <label class="form-check-label" for="doctor_inactive">
                            Inactive
                            </label>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button type="submit" class="btn btn-primary submit-btn">Create Doctor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
