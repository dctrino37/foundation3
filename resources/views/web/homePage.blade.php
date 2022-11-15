<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");
        
        body {
            background-color: #d6d2d2;
            font-family: "Poppins", sans-serif;
            font-weight: 300
        }
        
        .card {
            box-shadow:10px 10px 6px -8px #999;
            border: none;
            border-radius: 10px
        }
        
        .percent {
            padding: 5px;
            background-color: red;
            border-radius: 5px;
            color: #fff;
            font-size: 14px;
            height: 35px;
            width: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer
        }
        
        .wishlist {
            height: 40px;
            width: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background-color: #eee;
            padding: 10px;
            cursor: pointer
        }
        
        .img-container {
            position: relative
        }
        
        .img-container .first {
            position: absolute;
            width: 100%
        }
        
        .img-container img {
            border-top-left-radius: 5px;
            border-top-right-radius: 5px
        }
        
        .product-detail-container {
            padding: 10px;
            /* border-top: 2px solid #dc3545 */
        }
        
        .ratings i {
            color: #a9a6a6
        }
        
        .ratings span {
            color: #a9a6a6
        }
        
        label.radio {
            cursor: pointer
        }
        
        label.radio input {
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden;
            pointer-events: none
        }
        
        label.radio span {
            height: 25px;
            width: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #dc3545;
            color: #dc3545;
            font-size: 10px;
            border-radius: 50%;
            text-transform: uppercase
        }
        
        label.radio input:checked+span {
            border-color: #dc3545;
            background-color: #dc3545;
            color: #fff
        }
        .page-item.active .page-link {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .page-link {
            color: #dc3545;
        }
        
        label{
            margin-bottom: 0 !important;
        }
        
        .modal-footer button{
            background-color: #dc3545;
            color: #fff !important;
        }
                
        .mainbody{
            padding: 0 3em;
        }        
        
    </style>
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo Here</a>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    @if(Session::has('error'))
    <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
    @if(Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <div class="container-fluid mainbody mt-3 mb-3">
        <div class="row g-2 text-center">
            <h5>{{@$homepage->value}}</h5>
        </div>
        
        <div class="row g-2">
            @if (count($products) > 0)
            @foreach ($products as $key => $product)
            <div class="col-md-3" style="padding-bottom: 15px;padding-top: 20px;">
                <div class="card">
                    <div class="img-container" style="width: 100%;height: 350px;background-size:cover;background-position: center; background-image: url('{{asset('/images/'.$product->product_image)}}');border-radius: 10px 10px 0 0;">
                    </div>
                    <div class="product-detail-container">
                        <div class="row text-center">
                            <div class="col">
                                <h3 style="border-bottom: 2px solid #dc3545;
                                margin-bottom: 15px;
                                padding: 0 0 8px 0px; 
                                color:#dc3545">Contact Us</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <a target="_blank" href="<?php echo $product->whatsapp_no ? 'https://wa.me/'.$product->whatsapp_no : "#"; ?>">
                                <img src="{{url('icons/whatsapp.png')}}" height="50px" width="auto" alt="whatsapp">
                                </a>
                            </div>
                            
                            <div class="col text-center">
                                <a target="_blank" href="tel:<?php echo $product->calling_no ? $product->calling_no : "#"; ?>"><i class="fa fa-phone" style="font-size:50px;color:#dc3545"></i></a>
                            </div>

                            <div class="col text-center">
                                @if (@$product->email)
                                <a href="#"><i class="fa fa-envelope" data-toggle="modal" data-target="#modalContactForm{{$product->id}}" style="font-size:50px;color:#dc3545"></i></a>
                                @else
                                <a href="#"><i class="fa fa-envelope" style="font-size:48px;color:#dc3545"></i></a>
                                @endif
                            </div>
                        </div>
                        <div class="modal fade" id="modalContactForm{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    
                                    <form action="{{url('/contact-us')}}" method="POST">
                                        @csrf
                                        <div class="modal-body mx-3">
                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                            <div class="md-form mb-3">
                                                <label data-error="wrong" data-success="right" for="form34">Your name</label>
                                                <i class="fa fa-user prefix grey-text"></i>
                                                <input type="text" id="username" class="form-control validate" name="username" placeholder="Enter Name" required>
                                            </div>
                                            @if ($errors->has('username'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('username') }}
                                            </span>
                                            @endif
                                            
                                            <div class="md-form mb-3">
                                                <label data-error="wrong" data-success="right" for="email">Your email</label>
                                                <i class="fa fa-envelope prefix grey-text"></i>
                                                <input type="email" id="email" class="form-control validate" name="email" placeholder="Enter Email" required>
                                            </div>
                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </span>
                                            @endif
                                            
                                            <div class="md-form mb-3">
                                                <label data-error="wrong" data-success="right" for="form8">Your message</label>
                                                <i class="fa fa-pencil prefix grey-text"></i>
                                                <textarea type="text" id="form8" class="md-textarea form-control" rows="4" name="message" placeholder="Write message here..." required></textarea>
                                            </div>
                                            @if ($errors->has('message'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('message') }}
                                            </span>
                                            @endif
                                            
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button type="submit" class="btn btn-unique">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <ul class="pagination-wrapper pull-right">
            {{ $products->links() }}
        </ul>
    </div>
</body>
</html>