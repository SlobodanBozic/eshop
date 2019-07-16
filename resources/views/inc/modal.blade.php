
<!-- Modal -->
<div id="myModalLabel" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" >{{ $product->title }}</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<div class="modal-body">

  <div class="row">
    <div class="col-xs-4 col-md-4 item-photo">

        <img class="card-img img" src="/storage/product_images/{{$product->product_image}}">
    </div>

                   <div class="col-xs-8  col-md-8" style="border:0px solid gray">

                       <h3>{{ $product->title}}</h3>
                       <h5>Own by <a href="#">{{$users->name}}</a> · <small>({{ $total }} has active products)</small></h5>

                       <!-- Prices -->
                       <div id="Prices-modal">
                         <div id="list-price">
                           <h6 class="title-price">List Price</h6>
                         <h3 style="margin-top:0px;">$<s>{{ $product->list_price}}</s></h3>

                        </div>
                         <div id="price">
                           <h6 class="title-price">Price</h6>
                          <h3 style="margin-top:0px;">${{ $product->price}}</h3></div>
                         <div style="clear:both"></div>
                       </div>


                       <!-- Detalles especificos del producto -->
                       <div class="section-modal">
                           <h6 class="title-attr" style="margin-top:15px;" ><small>COLOR</small></h6>
                           <div>
                               <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                               <div class="attr" style="width:25px;background:white;"></div>
                           </div>
                       </div>
                       <div class="section-modal" style="padding-bottom:5px;">
                           <h6 class="title-attr"><small>SIZE</small></h6>
                           <div>
                               <div class="attr2">16 GB</div>
                               <div class="attr2">32 GB</div>
                           </div>
                       </div>
                       <div class="section-modal" style="padding-bottom:20px;">
                           <h6 class="title-attr"><small>QUANTITY</small></h6>
                           <div>
                               <div class="btn-minus"><i class="fas fa-minus"></i></div>
                               <input value="1" />
                               <div class="btn-plus"><i class="fas fa-plus"></i></div>
                           </div>
                       </div>

                       <!-- Botones de compra -->
                       <div class="section-modal" style="padding-bottom:20px;">
                           <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Buy it!</button>
                           <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Add to wishlist</a></h6>
                       </div>
                   </div>
                   <div class="row">
                   <div class="col-xs-9 col-md-12">
                       <div style="width:100%;border-top:1px solid silver">

                               {{ $product->description }}
                       </div>
                   </div>
</div>

</div>

</div>

<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('js/modal.js') }}"></script>
