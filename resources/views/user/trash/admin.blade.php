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
        @Component('components.structure.page-title',['title'=>'Deleted admins'])@endcomponent

        @Component('components.structure.breadcrump',['home'=>route('home'),'specified'=>'Deleted admins'])
        @endcomponent

        <!--custom page design starts-->
        
          <div class="row">
            @foreach($admins as $admin)
            <div class="col-md-3 mt-2">
              @Component('components.user.card',['user'=>$admin,'link'=>route('trash.admin.show',$admin->id)])@endcomponent
            </div>
            @endforeach
          </div>
          <div class="row">
            {{$admins->links()}}
          </div>
        <!--custom page design ends-->



			</div>
			 <!--body wrapper end-->
		</div>
@endsection
