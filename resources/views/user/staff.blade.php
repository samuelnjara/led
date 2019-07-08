@extends('layouts.app')

@section('content')
 <body class="sticky-header left-side-collapsed">
    <section>

    <!-- left side start-->
    @Component('components.structure.side-menu')
    @endcomponent
    <!-- left side end-->

		<!-- main content start-->
		<div class="main-content">

			<!-- header-starts -->
      @Component('components.structure.header-menu')
      @endcomponent
		 <!-- //header-ends -->

     <!--body wrapper start-->
			<div id="page-wrapper">

        <h3 class="text-uppercase text-center">All staff</h3>

        @Component('components.structure.breadcrump',['home'=>route('home'),'staff'=>''])
        @endcomponent

        <!--custom page design starts-->
        <div class="container">
          <div class="row">
            <!--search form-->
            @Component('components.forms.search',['action'=>'','method'=>'','placeholder'=>'Search staff...'])@endcomponent
            <!--end search form-->
          </div>
          <div class="row">
            @for($x=0;$x < 9;$x++)
            <div class="col-md-3 mt-2">
              @Component('components.user.card')@endcomponent
            </div>
            @endfor
          </div>
        </div>
        <!--custom page design ends-->



			</div>
			 <!--body wrapper end-->
		</div>
@endsection