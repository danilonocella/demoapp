@extends('layouts/app')

@section('content')

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-dark text-white page-title">
    <div class="col-md-8 p-lg-8 mx-auto my-5">
      <h1 class="display-4 font-weight-normal">About</h1>
      <p class="lead">Lorem ipsum dolor sit amet consectetur, adipiscing elit urna at aptent, himenaeos enim conubia velit. Etiam semper tortor luctus sagittis nulla taciti platea bibendum, sapien rhoncus .</p>
      <p class="lead font-weight-normal">Urna taciti nisl pellentesque vehicula augue elementum placerat, iaculis scelerisque libero platea imperdiet auctor sagittis.</p>
    </div>
</div>

<div class="container-fluid">
  <div>
      <p>Lorem ipsum dolor sit amet consectetur, adipiscing elit urna at aptent, himenaeos enim conubia velit. Etiam semper tortor luctus sagittis nulla taciti platea bibendum, sapien rhoncus porttitor fusce faucibus cubilia donec, ridiculus fermentum habitasse ac penatibus sociosqu odio. Odio montes magnis egestas orci ornare maecenas erat curae porta ligula nascetur, taciti lobortis facilisi quam eget accumsan hac rhoncus donec phasellus ullamcorper pulvinar, dictumst sollicitudin imperdiet tellus fermentum netus nisl euismod pellentesque blandit. Velit aliquam quisque taciti odio accumsan eget mauris, varius feugiat cras ligula convallis consequat fames nostra, gravida curabitur bibendum habitant enim vestibulum.</p>
      <p>Urna taciti nisl pellentesque vehicula augue elementum placerat, iaculis scelerisque libero platea imperdiet auctor sagittis, lacinia cras cum mauris viverra etiam. Ut per metus fermentum sociosqu dignissim, netus sapien id blandit placerat, augue mus magna risus. Morbi enim tellus potenti quisque eget leo ridiculus, hac dis facilisi curae class porttitor convallis viverra, donec risus suscipit eleifend cum sed.</p>
      <p>Sollicitudin donec dui tellus pretium sed, in nisi platea feugiat. Quisque ante conubia elementum massa pellentesque urna ad pretium, magna vivamus est taciti condimentum facilisi vel class, malesuada et erat interdum felis duis torquent. Lectus litora urna eu senectus justo suscipit cum, nunc posuere facilisi curae augue imperdiet accumsan commodo, tortor vehicula congue eleifend felis ornare:</p>
  </div>
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Free</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>10 users included</li>
            <li>2 GB of storage</li>
            <li>Email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Pro</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>20 users included</li>
            <li>10 GB of storage</li>
            <li>Priority email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Enterprise</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>30 users included</li>
            <li>15 GB of storage</li>
            <li>Phone and email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
        </div>
      </div>
    </div>

@endsection