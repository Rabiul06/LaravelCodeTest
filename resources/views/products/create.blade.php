@extends('layouts.app')

@section('content')
<div class="container">
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Create product</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
			<div class="box-content">
				<p class="alert-success">
				<form class="form-horizontal" action="{{url('/store')}}" method="POST" enctype="multipart/form-data">

					{{csrf_field()}}
				  <fieldset>
					<div class="control-group">
					  <label class="control-label">Product Name</label>
					  <div class="controls">
						<input type="text"  name="product_name" >
					  </div>
					</div>  
					<div class="control-group">
					  <label class="control-label">Product variants</label>
					  <div class="controls">
						<input type="text"  name="product_variants" >
					  </div>
					</div>
					
					<div class="control-group">
					  <label class="control-label">Product price</label>
					  <div class="controls">
						<input type="text"  name="product_price" >
					  </div>
					</div>  
					<div class="control-group hidden-phone">
					  <label class="control-label" for="fileInput">Product Image</label>
					  <div class="controls">
						<input class="input-file uniform_on" type="file" name="product_image" >
					  </div>
					</div>
					
					
					
					

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Add product</button>
					  <button type="reset" class="btn">Cancel</button>
					</div>
					</div>
				  </fieldset>
				</form>   

			</div>
		</div><!--/span-->

	</div>
	</div><!--/row-->
@endsection