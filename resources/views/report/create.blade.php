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

			<div id="page-wrapper">
        @Component('components.structure.page-title',['title'=>'Create new quotation'])@endcomponent


        @Component('components.form-inputs.link',['title'=>'Save','href'=>route('sales.create'),'toolTip'=>'download quote','icon'=>'fas fa-download','classes'=>'btn btn-default btn-xs pull-right mr-1'])@endcomponent

        @Component('components.form-inputs.link',['title'=>'Print','href'=>'#','toolTip'=>'print quote','icon'=>'fas fa-print','classes'=>'btn btn-default btn-xs pull-right mr-1','click'=>'window.print()'])@endcomponent

        @Component('components.form-inputs.link',['title'=>'Share','href'=>'#','toolTip'=>'share quote','icon'=>'fas fa-share-alt','classes'=>'btn btn-default btn-xs pull-right mr-1'])@endcomponent

        @Component('components.structure.breadcrump',['home'=>route('home'),'invoices'=>route('invoices.index'),'newInvoice'=>''])
        @endcomponent

				<div class="graphs">

			<!-- switches -->
		<div class="switches">

			<div class="col-4">
        <!--invoice template-->
        @Component('components.docs.quotation-template',['docId'=>'quote'])@endcomponent

        <!--end invoice template-->




				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //switches -->



				</div>
			<!--body wrapper start-->
			</div>
			 <!--body wrapper end-->

		</div>
@endsection