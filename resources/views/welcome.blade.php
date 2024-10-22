@extends('layouts.front')

@section('meta')
<meta name="description" content="Spartan Commerce is an eCommerce platform offering quality products at affordable prices.">
@endsection

@section('title')

@endsection

@section('style')
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    .hero {
        background-color: #f5f5f5;
        padding: 50px 0;
    }
    .hero-title {
        font-size: 2.5rem;
        color: #333;
    }
    .text-secondary {
        font-size: 1rem;
        color: #777;
        max-width: 50%;
    }
    .button-space {
        margin-right: 20px; /* Adjust spacing as needed */
    }
    
</style>
@endsection

@section('content')
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="hero-title fw-bold">
                    Spartan Commerce
                </div>
                <p class="mt-3 text-secondary">
                    Welcome to Spartan Commerce! We bring you the best deals on a wide range of products. Explore our catalog and enjoy an easy and secure shopping experience.
                </p>
            </div>
        </div>
        <div class="cta mt-5 d-flex">
            <a href="" class="btn btn-primary border-0 shadow-none button-space">Shop Now</a> <!-- Added custom class here -->
            <a href="" class="btn btn-light shadow">Contact Us</a>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    // Custom JavaScript can be added here
</script>
@endsection
