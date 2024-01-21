@extends('admin.layouts.master')

@section('title')
      Edit Brokerage 
  @endsection

@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="padding-20">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
                      <div class="profile-image">
                        @if($course->image == '')
                          <img src="{{ asset('/uploads/default/default.png') }}" width="100" height="100" class=" mb-2">
                        @else
                          <img src="{{ asset(''.course->image) }}" width="100" height="100" class="mb-2">
                        @endif
                      </div>
                      @can('course-edit')
                        <a class="btn btn-primary" style="float: right;" href="{{ route('courses.edit',$course->id) }}">Edit</a>
                      @endcan
                      <div class="clearfix"></div>
                      <div class="course-names">
                        <div class="author-box-name">
                          <a href="#">{{$course->name}}</a>
                        </div>
                        <div class="author-box-name">
                          Instructor:<a href="#"> {{$course->user->name ?? ''}}</a>
                        </div>
                        <div class="author-box-job" >
                            @if($course->status == '0')
                              <label class="badge badge-primary">Active</label>
                            @else
                              <label class="badge badge-danger">Deactive</label>
                            @endif
                        </div>
                      </div>
                    </div>
                    <div class="row" style="justify-content: space-around;">
                      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12" style="border: 1px solid;">
                        <div class="card-statistic-4">
                          <div class="align-items-center justify-content-between">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 pr-0 pt-3">
                              <div class="card-content" style="width: 110px;">
                                <h5 class="font-15">Active Students</h5>
                                <h2 class="mb-3 font-18">{{ $studentcounts }}</h2>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12" style="border: 1px solid;">
                        <div class="card-statistic-4">
                          <div class="align-items-center justify-content-between">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 pr-0 pt-3">
                              <div class="card-content" style="width: 110px;">
                                <h5 class="font-15">State</h5>
                                <h2 class="mb-3 font-18">
                                  {{ $course->state }}
                                </h2>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12" style="border: 1px solid;">
                        <div class="card-statistic-4">
                          <div class="align-items-center justify-content-between">
                            <div class="pr-0 pt-3">
                              <div class="card-content">
                                <h5 class="font-15">Last Modified</h5>
                                <h2 class="mb-3 font-18">{{ $course->updated_at }}</h2>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <ul class="nav nav-tabs" id="myTab2" role="tablist" style="justify-content: space-around;">
                  <li class="nav-item" style="display: flex; flex-wrap: wrap;">
                    <a class="nav-link active" id="detail-tab2" data-toggle="tab" href="#details" role="tab"
                      aria-selected="true">Overview</a>
                    <a class="nav-link" id="ccp-tab2" data-toggle="tab" href="#ccp" role="tab"
                      aria-selected="true">Students</a>
                    <a class="nav-link" id="c-tab2" data-toggle="tab" href="#c" role="tab"
                      aria-selected="true">Communications</a>
                    <a class="nav-link" id="goal-tab2" data-toggle="tab" href="#goal" role="tab"
                      aria-selected="true">Students</a>
                    <a class="nav-link" id="activity-tab2" data-toggle="tab" href="#activity" role="tab"
                      aria-selected="true">Promo Codes</a>
                  </li>
                </ul>
                <div class="tab-content tab-bordered" id="myTab3Content">
                  <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="detail-tab2">
                    <div class="row">

                      <div class="col-12 col-md-12 col-lg-5">
                        <div class="card">
                          <div class="card-header">
                            <h4>Course Overview:</h4>
                          </div>
                          <div class="card-body">
                            <div class="py-4">
                              <p class="clearfix">
                                <span class="float-left">
                                  Course Description:
                                </span><br>
                                <span class="float-left text-muted">
                                  {{ $course->description }}<br>
                                </span>
                              </p>
                              <p class="clearfix">
                                <span class="float-left">
                                  Course Sub Title:
                                </span><br>
                                <span class="float-left text-muted">
                                  {{$course->sub_title}}
                                </span>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-12 col-md-12 col-lg-7">
                        <div class="card">
                          <div class="card-header">
                            <h4>Course Details</h4>
                          </div>
                          <div class="card-body" style="padding-left: 60px;padding-right: 60px;">
                            <div class="py-4">
                              <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                  <p class="clearfix">
                                    <span class="float-left">
                                      Course ID:
                                    </span>
                                    <span class="float-right text-muted">
                                      {{$course->id}}<br>
                                    </span>
                                  </p>
                                  <p class="clearfix">
                                    <span class="float-left">
                                      Course Created:<br>
                                      Final Exam ?:<br>
                                      Lenght:<br>
                                      Modules:<br>
                                      Rating:<br>
                                    </span>
                                    <span class="float-right text-muted">
                                      {{$course->date}}<br>
                                      @if($course->exam == '0')
                                        Yes
                                      @else
                                        No
                                      @endif<br>
                                      {{$course->length}}<br>
                                      {{$course->module}}<br>
                                      Rating
                                    </span>
                                  </p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                  <p class="clearfix" style="margin-bottom: 42px;">
                                    <span class="float-left">
                                      
                                    </span>
                                    <span class="float-right text-muted">
                                      
                                    </span>
                                  </p>
                                  <p class="clearfix">
                                    <span class="float-left">
                                      Course Expiration Date:<br>
                                      Interaction:<br>
                                      Credits Earned:<br>
                                      Calculated length:<br>
                                    </span>
                                    <span class="float-right text-muted">
                                      {{$course->expiration_date}}<br>
                                      {{$course->interaction}}<br>
                                      {{$course->credit_earn}}<br>
                                      {{$course->cal_length}}<br>
                                    </span>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="tab-pane fade show" id="ccp" role="tabpanel" aria-labelledby="ccp-tab2">
                    sds
                  </div>
                  <div class="tab-pane fade show" id="c" role="tabpanel" aria-labelledby="c-tab2">
                    gfvf
                  </div>
                  <div class="tab-pane fade show" id="goal" role="tabpanel" aria-labelledby="goal-tab2">
                    <div class="col-12 col-12 col-md-12 col-lg-12">
                        <div class="card">
                          <div class="card-header" style="display: block;">
                              <h4>Students</h4>
                              <a href="{{ route('students.create') }}" class="btn btn-primary" style="position: absolute; right: 10px; top: 3px;">Add Students</a>
                            </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-striped" id="table-1">
                                <thead>
                                  <tr>
                                  <th>No</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Licence Status</th>
                                  <th>Last Login</th>
                                  <th>Progress</th>
                                  <th>Subscription</th>
                                  <th>Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($students as $key => $course)
                                  <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->email }}</td>
                                    <td>
                                      @if($course->license->status ?? '' == '0' )
                                        Deactive
                                      @else
                                        Active
                                      @endif
                                    </td>
                                    <td>{{ $course->last_login }}</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                      @can('student-edit')
                                        @if($course->status == '0')
                                        <label class="badge badge-primary">Active</label>
                                        @else
                                        <label class="badge badge-danger">Deactive</label>
                                        @endif
                                      @endcan
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <div class="tab-pane fade show" id="activity" role="tabpanel" aria-labelledby="activity-tab2">
                    <div class="col-12 col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header" style="display: block;">
                              <h4>Promo Code</h4>
                              <a href="{{ route('promocodes.create') }}" class="btn btn-primary" style="position: absolute; right: 10px; top: 3px;">Add Promo Codes</a>
                            </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-striped" id="table-2">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Discount Type</th>
                                    <th>Discount</th>
                                    <th>Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
@endsection