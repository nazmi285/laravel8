<div class="col-12 col-md-8 mb-3">
	<div class="row justify-content-center mb-3">
        <h3>Product/New</h3>
    </div>
</div>

<div class="col-12 col-md-8 mb-3">
	<div class="card">
		
			<div class="card-body ">
				

		            <div class="form-group row justify-content-center">

		                <div class="col-12 mb-3">
		                    <label for="name">Name</label>
		                    <input type="text" class="form-control text-primary" name="name" id="name" value="{{old('name')}}" placeholder="e.g.Cookies" required="">
		                </div>
		                <div class="col-12 mb-3">
		                    <label for="description">Description</label>
		                    <textarea class="form-control text-primary" name="description" id="description" value="{{old('description')}}" rows="3"></textarea>
		                </div>
		                <div class="col-12 mb-3">
		                    <label class="" for="price">Price Per Unit</label>
		                    <div class="input-group mb-3">
						        <span class="input-group-text" id="price">RM</span>
						        <input type="text" class="form-control text-primary text-end format_money" name="price" id="price" value="{{old('price')}}" oninput="validate(this)" placeholder="0.00" maxlength="7" required="">
						    </div>
		                    <small id="price" class="form-text text-muted">Set your price between RM2 and RM30000</small>
		                </div>
		                <div class="col-12 mb-3">
		                	<label for="promoable">
			                	<div class="custom-control custom-checkbox">
								  	<input type="checkbox" class="custom-control-input" name="promoable" id="promoable" value="1">
								  	<label class="custom-control-label" for="promoable">Check this to set your promotional price</label>
								</div>
							</label>
		                    <div class="input-group mb-3" id="promo-field">
						        <span class="input-group-text" id="price">RM</span>
		                        <input type="text" class="form-control text-primary text-end format_money" name="promo_price" id="promo_price" value="{{old('promo_price')}}" oninput="validate(this)" placeholder="0.00" maxlength="7" required="">
		                    </div>
		                    <small id="promo_price" class="form-text text-muted">Remain unchecked is product have no promotional price</small>
		                </div>

		                <div class="col-12 mb-3">
		                	<label for="quantity">
			                	<div class="custom-control custom-checkbox">
								  	<input type="checkbox" class="custom-control-input" name="stockable" id="stockable" value="1">
								  	<label class="custom-control-label" for="stockable">Check this to manage stock</label>
								</div>
							</label>
		                    <input type="number" class="form-control text-primary text-end " name="quantity" id="quantity" min="1" value="{{old('quantity')}}" placeholder="0">
		                    <small id="quantity" class="form-text text-muted">Default availability is Pre-Order</small>
		                </div>

		                <div class="col-12 mb-3">
		                    <label for="weight">Set product weight</label>
		                    <div class="input-group">
		                        <input type="number" class="form-control text-primary " min="0.1" step="0.1" name="weight" id="weight" value="{{old('weight')}}" placeholder="0" aria-describedby="weight">
		                        <div class="input-group-append">
		                            <div class="input-group-text">KG</div>
		                        </div>
		                    </div>
		
			              
		                    <small id="weight" class="form-text text-muted">Auto calculate delivery fee using EasyParcel.</small>
		                    <small id="weight" class="form-text text-muted">Manage delivery, go to Settings > <a href="{{url('/delivery')}}">Delivery</a></small>
		                </div>


		                <div class="col-12 mb-3 d-none">
							<hr>
		                	<div class="d-flex justify-content-between">
				                <label for="name" class="">Variations</label>
				                <button type="button" class="btn text-primary" id="btnVariationModal" data-toggle="modal" data-target="#variationModal">Create Variation</button>
				            </div>

							<select class="form-control text-primary variation mb-3" name="variation[]" id="variation_1">
								<option value="">-Variation 1-</option>
					
							</select>
							<select class="form-control text-primary variation" name="variation[]" id="variation_2" disabled="">
								<option value="">-Variation 2-</option>
		
							</select>
							<small id="variation" class="form-text text-muted mb-3">Manage variation, go to Settings > <a href="{{url('/variation')}}">Variations</a></small>

							<div class="" id="variation-attribute">
							</div>
		                </div>

		            </div>
		            <div class="d-grid">
			            <button type="submit" class="btn btn-primary" name="btnSave" id="btnSave" data-submit="proceed">
			                <i class="fas fa-circle-notch fa-spin d-none mr-2" id="icon-processing"></i>
			                Save
			            </button>
			        </div>
		  
			</div>
		
	</div>
</div>

<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0 text-center">
                <h5 class="modal-title">Create New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="" action="" method="post">
                @csrf
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Category Name" maxlength="20" required="">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer border-0 pb-4">
            	<button type="button" id="btnSubmitCategory" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="variationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0 text-center">
                <h5 class="modal-title">Create New Variation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
	        	<div class="modal-body">
		            <label class="" for="variation_label">Variation Label</label>
		            <input type="text" class="form-control text-primary mb-3" name="variation_label" id="variation_label" value="{{old('variation_label')}}" placeholder="e.g.Size" required="">

		            <label class="" for="attribute_label">Variation Attribute</label>
		            <div class="row" id="variationItemSpace">
		                <div class="col-6 col-md-6 mb-3" id="item_1">
		                    <div class="input-group">
		                        <input type="text" class="form-control attribute_label" name="attribute_label[]" id="attribute_1" maxlength="50" placeholder="e.g.Small" required="">
		                        <div class="input-group-append"><span class="btn btn-outline-danger btnDelete" id="1">
		                            <i class="fa fa-trash" aria-hidden="true"></i></span>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-6 col-md-6 mb-3" id="addItem">
		                    <button type="button" class="btn border" name="btnAddVariationItem" id="btnAddVariationItem"> <i class="fa fa-plus" aria-hidden="true"></i> Attribute </button>
		                </div>
		            </div>
	        	</div>
	            <div class="modal-footer border-0 pb-4">
	            	<button type="button" name="btnSubmitVariation" id="btnSubmitVariation" class="btn btn-primary">Add</button>
	            </div>
        </div>
    </div>
</div>