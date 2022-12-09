<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
    img{
        height: 200px;
    width: -webkit-fill-available;
    }
    hr{
        border-top: 2px solid black;
        margin-bottom: 6rem !important;
    }
    #footer{
        margin-top: 25%;
    }
    .center {
        text-align: center;
        margin-top: 10%;

    }
    a:hover {
        color: black;
        text-decoration: none;
    }
    a {
        color: black;
    }
    h1{
        display:flex;

    }
  </style>
  <body>
   <nav class="navbar navbar-expand-sm navbar-light bg-light">
  <a class="navbar-brand" href="/">Milla Impola</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    @if(($componets[0]->contentElement ?? "") != "")
    <ul class="navbar-nav ml-auto">
        @foreach(($componets[0]->contentElement->items ?? []) as $item)
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{$item->title ?? ''}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach(($item->children ?? []) as $children)
                        <a class="dropdown-item" href="{{$children->url ?? ''}}">{{$children->title ?? ''}}</a>
                    @endforeach
                </div>
            </li>
        @endforeach
    </ul>
    @endif
  </div>
</nav>
<div class="container center ">
    @foreach($allPageData as $key => $pageData)
    <div class="row">
        <div class="col-8">
            <a href="{{$key}}"> <h1 class="h1-boader">{{$pageData->pageType ?? ''}}  {{$pageData->content->checksum > 0 ? '| ' .$pageData->content->checksum  : ''}}  </h1></a><hr>
        </div>
    </div>
    <div  style="display: flex;">{!! $pageData->content->value ?? '' !!}</div>
    <div class="row" style="margin-top:15px">
        <div class="col-12" style="display: flex;"><h6>{{$pageData->pageTitle !=[] ? 'By :' : ''}}</h6><h6>{{$pageData->pageTitle}}</h6></div>
        <div class="col-12" style="display: flex;">
        <h6>{{$pageData->categories !=[] ? 'Categorized as :' : ''}}</h6>
        @foreach(($pageData->categories ?? []) as $categories)
        <h6>{{$categories->name}}</h6>&nbsp;
        @endforeach
        </div>
    </div>
    <hr>
    @endforeach
</div>


<footer id="footer" class="bg-primary text-white d-flex-column text-center">
  <hr class="mb-0">
  <!--Footer Links-->

    @if(($componets[1]->contentElement ?? "") != "")
        <div class="row" style="margin-right: 0px;">
        <!--First column-->
        @foreach(($componets[1]->contentElement->items ?? []) as $item)
        <div class="col-md-1 mx-auto shfooter">
            <a class="my-2 font-weight-bold d-none d-md-block" style="color: #fff;width: -webkit-fill-available;" href="{{$item->url ?? ''}}">{{$item->title ?? ''}}</a>
        </div>
        <!--/.First column-->
        <hr class="clearfix w-100 d-md-none mb-0">
        @endforeach
        </div>
    @endif

  <!--/.Footer Links-->
  <hr class="mb-0">
</footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
