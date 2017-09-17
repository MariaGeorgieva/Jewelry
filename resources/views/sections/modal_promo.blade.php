<div class="modal fade" id="{{ $image->id }}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-faded">
                <br>
                <h5 class="modal-title"><strong>{{$image->title}}</strong></h5>
                <br>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div id="carouselExampleIndicators" class="carousel slide"
                             data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                    class="active"></li>
                                <li data-target="#carouselExampleIndicators"
                                    data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators"
                                    data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active ">
                                    <img class="img-responsive" src="{{url("storage/".$image->image)}}"
                                         alt="{{ $image->title }}">
                                </div>
                                <div class="carousel-item">
                                    <img class="img-responsive" src="{{url("storage/".$image->image)}}"
                                         alt="{{ $image->title }}">
                                </div>
                                <div class="carousel-item">
                                    <img class="img-responsive" src="{{url("storage/".$image->image)}}"
                                         alt="{{ $image->title }}">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators"
                               role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators"
                               role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <br>
                        <div class="second-row">
                            <h4>{{$image->description}}</h4>
                        </div>
                        <div class="second-row">
                            <div class="text-center">
                                <h5><strong>{{$image->price}} BGN</strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-faded">
                <button type="button" class="btn btn-secondary" title="Add to Basket!">
                    <i class="material-icons">shopping_basket</i>
                </button>
                <button type="button" class="btn btn-secondary " title="Add to Favourites!">
                    <i class="material-icons">favorite</i>
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" title="Back!">
                    <i class="material-icons">exit_to_app</i>
                </button>
            </div>
        </div>
    </div>
</div>