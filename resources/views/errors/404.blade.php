@extends('layout.master')
@section('content')

</nav>



<div class="wrap-breadcrumb">
	<div class="clearfix container">
		<div class="row main-header">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
				<ol class="breadcrumb breadcrumb-arrows">
					<li><a href="{{url('/')}} target="_self">Trang chủ</a></li>


					<li class="active">Lỗi 404</li>

				</ol>
			</div>
		</div>
	</div>

</div>
<section id="content" class="clearfix container">
	<div class="row">
		<div id="404" class="page-not text-center">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2>Không tìm thấy trang</h2>
				<span class="subtext">Xin lỗi, chúng tôi không tìm thấy trang này</span>
			</div>
		</div>

	</div>
</section>

</div>
@endsection