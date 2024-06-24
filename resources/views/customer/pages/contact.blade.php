@extends('customer.index')

@section('content')
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="text-black">Contact Us</h2>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">
                <div class="col-lg-8 mb-5">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="text-black">Phone</label>
                                <input type="text" id="phone" name="phone" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="subject_type" class="text-black">Subject Type <span class="text-danger">*</span></label>
                                <input type="text" id="subject_type" name="subject_type" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="subject" class="text-black">Subject <span class="text-danger">*</span></label>
                                <input type="text" id="subject" name="subject" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="message" class="text-black">Message <span class="text-danger">*</span></label>
                                <textarea id="message" name="message" class="form-control" rows="7" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 ml-auto">
                    <div class="bg-white p-3 p-md-5">
                        <h3 class="text-black mb-4">Contact Info</h3>
                        <p class="mb-0 font-weight-bold">Address</p>
                        <p class="mb-4">1234 Street Name, City Name, United States</p>
                        <p class="mb-0 font-weight-bold">Phone</p>
                        <p class="mb-4"><a href="#">+1 234 567 890</a></p>
                        <p class="mb-0 font-weight-bold">Email Address</p>
                        <p class="mb-0"><a href="#">info@yourdomain.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
