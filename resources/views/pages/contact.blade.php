@extends('layouts/app')

@section('content')

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-dark text-white page-title">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 font-weight-normal">Contact</h1>
      <p class="lead font-weight-normal">Sollicitudin donec dui tellus pretium sed, in nisi platea feugiat.</p>
    </div>

</div>

<form class="needs-validation m-3" novalidate>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationCustom01">First name</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" required>
            <div class="invalid-feedback">
            Please enter your name.
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="validationCustom02">Last name</label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" required>
            <div class="invalid-feedback">
            Please enter you last name.
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationCustom03">Email</label>
            <input type="email" class="form-control" id="validationCustom03" placeholder="Email address" required>
            <div class="invalid-feedback">
            Please provide a valid email address.
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationCustom04">Inquiry</label>
            <textarea class="form-control" id="validationCustom04" rows="8" placeholder="Inquiry..." required></textarea>
            <div class="invalid-feedback">
            Please enter your inquiry.
            </div>
        </div>
    </div>

    <button class="btn btn-primary" type="submit">Submit</button>
</form>
  
  <script>
  // JavaScript for disabling form submission if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>

@endsection