@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Shop </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="row">
                        <form class="form-horizontal" action="{{route('shop.store')}}" method="POST" >
                            <fieldset>

                                <!-- Form Name -->
                                <legend>Shop Details </legend>
                                
                                <input type="hidden" name="_token" >
                                
                                <!-- Text input-->
                                <div class="form-group mb-4">
                                  <label class="col-md-12 control-label" for="textinput">Shop Name</label>  
                                  <div class="col-md-12">
                                      <input id="textinput" name="shop_name" type="text" placeholder="Shop Name" class="form-control input-md">  
                                  </div>
                              </div>

                         {{csrf_field()}}

                              <!-- Select Basic -->
                              <div class="form-group mb-4">
                                  <label class="col-md-12 control-label" for="selectbasic">Shop Category</label>
                                  <div class="col-md-12">
                                    <select id="selectbasic" name="category" class="form-control">
                                      <option disabled selected>-- Select One --</option>
                                      <option value="Electronic">Electronic</option>
                                      <option value="Book Store">Book Store</option>
                                      <option value="Super Store">Super Store</option>
                                      <option value="Shoes Store">Shoes Store</option>
                                  </select>
                              </div>
                          </div>


                          <div class="form-group mb-4">
                              <label class="col-md-4 control-label" for="radios">Shop Location</label>
                              <div class="col-md-4"> 
                                <label class="radio-inline" for="radios-0">
                                  <input type="radio"  name="location" id="iranian" value="iranian" checked="checked">
                                  Iran
                              </label> 
                              <label class="radio-inline" for="foreign">
                                  <input type="radio" name="location" id="foreign" value="foreign">
                                  Outside of Iran
                              </label> 

                          </div>
                      </div>


                      <div class="form-group mb-4" id="passport" style="display: none;">
                          <label class="col-md-12 control-label" for="textarea">Country </label>
                          <div class="col-md-12">                     
                             <input id="textinput" value="Iran" name="country" type="text" placeholder="Type Your Country" class="form-control input-md">
                          </div>
                      </div>
                      <!-- Textarea -->
                      <div class="form-group mb-4">
                          <label class="col-md-12 control-label" for="textarea">Address </label>
                          <div class="col-md-12">                     
                            <textarea class="form-control" id="textarea" name="address">Address</textarea>
                        </div>
                    </div>

                    <!-- Textarea -->
                      <div class="form-group mb-4">
                          <label class="col-md-12 control-label" for="textarea">Description </label>
                          <div class="col-md-12">                     
                            <textarea class="form-control" id="textarea" name="description">Description</textarea>
                        </div>
                    </div>
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <!-- Button -->
                    <div class="form-group mb-4">
                      <br>
                      <div class="col-md-12">
                        <button id="singlebutton" name="submit" class="btn btn-primary">Button</button>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>
</div>
</div>
</div>
</div>
</div>
@endsection
