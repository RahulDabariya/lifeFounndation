		@extends('Fronted/comman')

		@section('contacnt')



		<!-- donation form popup -->

		<div class="modal donate-form">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
		                    &times;
		                </button>
		                <header class="page-header">
		                    <h2>You are donating to. <strong>Example Causes name</strong></h2>
		                </header>
		            </div>
		            <div class="modal-body">
		                <form method="post" id="donationForm">

		                    <div class="row">
		                        <div class="col-xs-12">
		                            <div class="form-group col-xs-12 col-sm-6">
		                                <label>How much would you like to donate ?</label>

		                                <div class="choose-pricing">
		                                    <div class="btn-group">
		                                        <button type="button" class="btn btn-default active">
		                                            100
		                                        </button>
		                                        <button type="button" class="btn btn-default">
		                                            200
		                                        </button>
		                                        <button type="button" class="btn btn-default">
		                                            500
		                                        </button>

		                                        <input type="text" placeholder="Custom" class="inpt-first form-control">

		                                    </div>
		                                </div>
		                            </div>

		                        </div>
		                    </div>

		                    <div class="row display">
		                        <div class="col-xs-12">
		                            <div class="form-group col-xs-12 col-sm-6">
		                                <div class="dropdown">
		                                    <button class="btn btn-width dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
		                                        <small></small>

		                                    </button>

		                                </div>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="row">
		                        <div class="col-xs-12">
		                            <div class="form-group col-xs-12 col-sm-6">
		                                <label for="name">Name<span>*</span></label>
		                                <input type="text" class="form-control" id="name">
		                            </div>
		                            <div class="form-group col-xs-12 col-sm-6">
		                                <label for="last-name">Last Name<span>*</span></label>
		                                <input type="text" class="form-control" id="last-name">
		                            </div>
		                        </div>
		                    </div>

		                    <div class="row">
		                        <div class="col-xs-12">
		                            <div class="form-group col-xs-12 col-sm-6">
		                                <label for="name">Email<span>*</span></label>
		                                <input type="text" class="form-control" id="email">
		                            </div>
		                            <div class="form-group col-xs-12 col-sm-6">
		                                <label for="phone">Phone<span>*</span></label>
		                                <input type="text" class="form-control" id="phone">
		                            </div>
		                        </div>
		                    </div>

		                    <div class="row">
		                        <div class="col-xs-12">
		                            <div class="form-group col-xs-12 col-sm-6">
		                                <label for="message">Address<span>*</span></label>
		                                <textarea class="form-control" id="message"></textarea>
		                            </div>
		                            <div class="form-group col-xs-12 col-sm-6">
		                                <label for="add-note">Additional Note</label>
		                                <textarea class="form-control" id="add-note"></textarea>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="row">
		                        <div class="col-xs-12">
		                            <div class="form-group col-xs-12">
		                                <input type="submit" value="DONATE" class="btn btn-default pull-right">
		                            </div>
		                        </div>
		                    </div>

		                    <div class="row">
		                        <div class="col-xs-12">
		                            <div class="form-group col-xs-12">
		                                <p class="forms-notes">
		                                    Note: Lorem ipsum dolor sit amet
		                                </p>
		                            </div>
		                        </div>
		                    </div>

		                </form>
		            </div>
		        </div><!-- /.modal-content -->
		    </div><!-- /.modal-dialog -->
		</div>
		<!-- donation form popup -->

		@endsection