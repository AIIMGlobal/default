<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Transactions</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
	<link href="{{ asset('public/admin-assets/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<style>
		/**
		/* Set the margins of the page to 0, so the footer and the header
			can be of the full height and width !
		 **/
		@page {
			/* margin: 0cm 0cm; */
		}
		/** Define now the real margins of every page in the PDF **/
		body {
			/* margin-top: 2cm;
			margin-left: 2cm;
			margin-right: 2cm;
			margin-bottom: 2cm; */
			font-family: 'Nunito' !important;
		}

		/** Define the header rules **/
		header {
			position: fixed;
			width: 100%;
			top: 0cm;
			left: 0cm;
			right: 0cm;
			height: 400px;
			font-family: 'Nunito';

			/** Extra personal styles **/
			background-color: #fff;
			color: white;
			text-align: center;
			line-height: 1.5cm;
		}

		.pagenum:before {
			content: counter(page);
		}
		/** Define the footer rules **/
		footer {
			position: fixed;
			bottom: 0cm;
			left: 0cm;
			right: 0cm;
			height: 1cm;
			font-size: 11px;
			/** Extra personal styles **/
			/* background-color: #03a9f4; */
			color: #202020;
			text-align: justify;
			line-height: 1.5cm;

		}

	</style>
</head>
<body style="background: #fff;font-family: 'Nunito';">
	<footer>
		<table class="table" boder="0">
			<tbody>
				<tr>
					<td style="padding:0; border:none;">

						<script type="text/php">

							if (isset($pdf)) {

								$pdf->page_script('
									$text = sprintf(_(" %d of %d"),  $PAGE_NUM, $PAGE_COUNT);
									// Uncomment the following line if you use a Laravel-based i18n
									$text = __("Page :pageNum of :pageCount", ["pageNum" => $PAGE_NUM, "pageCount" => $PAGE_COUNT]);
									$font = null;
									$size = 11;
									$color = array(0,0,0);
									$word_space = 0.0;  //  default
									$char_space = 0.0;  //  default
									$angle = 0.0;   //  default

									// Compute text width to center correctly
									$textWidth = $fontMetrics->getTextWidth($text, $font, $size);

									$x = ($pdf->get_width() - $textWidth) / 2;
									$y = $pdf->get_height() - 30;

									$pdf->text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
								'); // End of page_script
							}
						</script>
					</td>
					<td style="padding:0; border:none;text-align: right;"></td>
				</tr>
			</tbody>
		</table>
	</footer>

	<main>
	<div class="row">
		<div class="col-12">
			<div class="card-box-custome">
				<img src="{{ asset('/public/admin-assets/images/logo.png') }}" alt="">
				{{-- <img src="/var/www/html/obs/public/admin-assets/images/logo.png" alt=""> --}}
				<div class="responsive-table-plugin mt-3" style="background: #fff;">
					<div class="table-wrapper">
						<div class="table-rep-plugin fixed-solution" data-pattern="priority-columns">
							<div class="table-responsive" data-pattern="priority-columns">
								<table class="table table-centered" width="100">
									<tbody>
										<tr class="odd" role="row">
											<td style="padding:2px; font-size: 14px!important;border-top-color:#fff;padding-bottom: 0px;" valign="top" height="">
												<p style="margin: 0; padding:0">
													Eden Capital (Australia) Pty Ltd
												</p>
												<p style="margin: 0; padding:0">
													ABN 83 602 485 487
												</p>
												<p style="margin: 0; padding:0">
													Australian Credit Licence 476320
												</p>
											</td>
										</tr>
									</tbody>
								</table><!-- end .table-responsive -->
							</div>
						</div><!-- end .table-rep-plugin-->
					</div><!-- end .responsive-table-plugin-->
				</div><!-- end card-box -->

				<div class="responsive-table-plugin" style="background: #fff;">
					<div class="table-wrapper">
						<div class="table-rep-plugin fixed-solution" data-pattern="priority-columns">
							<div class="table-responsive" data-pattern="priority-columns">
								<table class="table table-centered" width="100" style="margin-bottom: 0px;">
									<thead style="background: #fff; color:#000;">
										<tr>
											<th width="50%" style="padding: 4px 0 10px 0; font-size:27px;border-top-color: #fff; font-family: 'Nunito'; border-bottom-color: #fff;font-family: 'Nunito';" colspan="2">Your Statement</th>
										</tr>
									</thead>

									@if ( !empty($account_number->UserId))
										@php
											$customerName = ''
										@endphp
										@foreach ($account_number->UserId as $key => $user)
										<tbody>
											<tr class="odd" role="row">
												<td width="100%" style="width:100%; font-size: 14px !important; border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #979797; padding:0;" colspan="2">
													<table class="table table-centered" width="100">

														<tbody>
															<tr>
																<td width="50%" class="text-left" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #979797;"><b>Customer Number</b></td>
																<td width="50%" class="text-right" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #4F5F8E;">{{ $user->customer_number }}</td>
															</tr>



															<tr>
																<td width="50%" class="text-left" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #979797;"><b>Name</b></td>
																<td width="50%" class="text-right" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #4F5F8E;">{{ getUsersByCustomerId($user->customer_number)->name }}</td>
															</tr>

															<tr>
																<td width="50%" class="text-left" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #979797;"><b>Street ঠিকানা</b></td>
																<td width="50%" class="text-right" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #4F5F8E;">
																	{{ getUsersByCustomerId($user->customer_number)->street_address }}
																</td>
															</tr>

															<tr>
																<td width="50%" class="text-left" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #979797;"><b>Suburb</b></td>
																<td width="50%" class="text-right" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #4F5F8E;">
																	{{ getUsersByCustomerId($user->customer_number)->city }}
																</td>
															</tr>

															<tr>
																<td width="50%" class="text-left" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #979797;"><b>State</b></td>
																<td width="50%" class="text-right" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #4F5F8E;"> {{ getUsersByCustomerId($user->customer_number)->State->state_name ?? "N/A" }}</td>
															</tr>

															<tr>
																<td width="50%" class="text-left" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #979797;"><b>Postcode</b></td>
																<td width="50%" class="text-right" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #4F5F8E;">{{ getUsersByCustomerId($user->customer_number)->postcode }}</td>
															</tr>

															<tr>
																<td width="50%" class="text-left" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #979797;"><b>Country</b></td>
																<td width="50%" class="text-right" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #4F5F8E;">Australia</td>
															</tr>

														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
										@endforeach
									@endif


								</table><!-- end .table-responsive -->
							</div>
						</div><!-- end .table-rep-plugin-->
					</div><!-- end .responsive-table-plugin-->
				</div><!-- end card-box -->


				<div class="responsive-table-plugin" style="background: #fff;">
					<div class="table-wrapper">
						<div class="table-rep-plugin fixed-solution" data-pattern="priority-columns">
							<div class="table-responsive" data-pattern="priority-columns">
								<table class="table table-centered" width="100" style="margin-bottom:0;">
									<thead style="background: #fff; color:#000;">
										<tr>
											<th width="40%" style="padding: 4px 0 10px 0; font-size:27px;border-top-color: #fff; font-family: 'Nunito'; border-bottom-color: #fff" colspan="2">Account Information</th>
										</tr>
									</thead>
									<tbody>
										<tr class="odd" role="row">
											<table class="table table-centered">
												<tbody>
													<tr>
														<td width="50%" class="text-left" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #979797;"><b>Account Number</b></td>
														<td class="text-right" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #4F5F8E;">{{ @$account_number->account_number }}</td>
													</tr>
													<tr>
														<td width="50%" class="text-left" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #979797;"><b>Account টাইপ</b></td>
														<td class="text-right" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #4F5F8E;;">{{ @$account_number->getAccountType->type_name }}</td>
													</tr>

													<tr>
														<td width="50%" class="text-left" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #979797;"><b>Statement Start Date</b></td>
														<td class="text-right" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #4F5F8E;">
															@if ( !empty($stateMentStart->tr_issue_date) )
																{{ date('d/m/Y', strtotime(@$stateMentStart->tr_issue_date) ) }}
															@else
																{{ date('d/m/Y') }}
															@endif
														</td>
													</tr>

													<tr>
														<td width="50%" class="text-left" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #979797;"><b>Statement End Date</b></td>
														<td class="text-right" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #4F5F8E;">
															@if ( !empty($stateMentEnds->tr_issue_date) )
																{{ date('d/m/Y', strtotime(@$stateMentEnds->tr_issue_date) ) }}
															@else
																{{ date('d/m/Y') }}
															@endif
														</td>
													</tr>

													<tr>
														<td width="50%" class="text-left" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #979797;"><b>Opening Balance</b></td>
														<td class="text-right" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #4F5F8E;"> {{ @$openingBalance < 0 ? '- $': '$' }}{{ str_replace('-','', number_format( @$openingBalance,2)) ?? 0.00 }} DR</td>
													</tr>

													<tr>
														<td width="50%" class="text-left" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #979797;"><b>Closing Balance</b></td>
														<td class="text-right" style="padding:2px; text-align:center; font-size: 14px !important;border-top-color: #fff; font-family: 'Nunito';padding-bottom: 0px; color: #4F5F8E;">{{ @$currentBlance < 0 ? '- $': '$' }}{{ str_replace('-','', number_format( @$currentBlance,2)) ?? 0.00 }} DR</td>
													</tr>

												</tbody>
											</table>
										</tr>
									</tbody>
								</table><!-- end .table-responsive -->
							</div>
						</div><!-- end .table-rep-plugin-->
					</div><!-- end .responsive-table-plugin-->
				</div><!-- end card-box -->

				<div class="responsive-table-plugin" style="background: #fff;">
					<div class="table-wrapper">
						<div class="table-rep-plugin fixed-solution" data-pattern="priority-columns">
							<div class="table-responsive" data-pattern="priority-columns">
								<table   class="table table-centered" width="100" style="margin-bottom:0;">
									<thead style="background: #fff; color:#000;">
										<tr>
											<th width="40%" style="padding: 4px 0 7px 0; font-size:27px;border-top-color: #fff; font-family: 'Nunito'; border-bottom-color: #fff" colspan="3">Transaction List</th>
										</tr>
									</thead>
								</table>

								<table class="table mt-2 table-centered">
									<thead style="background: #00a9de; color:#fff;">
										<tr>
											<th width="15%" style="padding: 2px 0; font-family: 'Nunito';">DATE</th>
											<th width="40%" style="padding: 2px; font-family: 'Nunito';">TRANSACTION DETAILS</th>
											<th style="padding: 2px; font-family: 'Nunito';">DEBIT($)</th>
											<th style="padding: 2px; font-family: 'Nunito';">CREDIT($)</th>
											<th style="padding: 2px; font-family: 'Nunito';" class="text-right">BALANCE($)</th>
										</tr>
									</thead>

									<tbody>
										@if ( !empty($transactionList) )
											@php
												$totalDebit = 0;
												$totalCredit = 0;
											@endphp
											@foreach ($transactionList as $key => $transaction)
											@php
												$totalDebit += $transaction->debit;
												$totalCredit += $transaction->credit;
											@endphp
												<tr class="odd" role="row">
													<td style="border-bottom: 1px solid #fff !important;padding:2px 0; font-family: 'Nunito';">{{ date('d/m/Y', strtotime($transaction->tr_issue_date)) }}</td>
													<td style="padding:2px 0; font-family: 'Nunito';">{{ $transaction->transaction_type }}</td>
													<td style="padding:2px 0; font-family: 'Nunito';">${{ number_format ( $transaction->debit,2) }}</td>
													<td style="padding:2px 0; font-family: 'Nunito';">${{ number_format( $transaction->credit,2) }}</td>
													<td style="padding:2px 0; font-family: 'Nunito';" class="text-right">{{ $transaction->balance < 0 ? '- $':'$' }}{{ str_replace('-','',number_format( $transaction->balance,2) ) }}</td>

												</tr>
											@endforeach
										@else
											<tr class="odd" role="row">
												<td style="border-bottom: 1px solid #fff !important;padding:12px; text-align:center;font-family: 'Nunito';" colspan="5">No transaction found</td>
											</tr>
										@endif

									</tbody>
									<tfoot style="background: #00a9de; color:#fff;">
										<tr>
											<td style="padding: 2px;"></td>
											<td style="padding: 2px; font-family: 'Nunito';">TOTAL AT END OF PERIOD</td>
											<td style="padding: 2px; font-family: 'Nunito';">${{ str_replace('-','',number_format( @$totalDebit,2) ) }}</td>
											<td style="padding: 2px; font-family: 'Nunito';">${{ str_replace('-','',number_format( @$totalCredit,2) ) }}</td>
											<td style="padding: 2px; font-family: 'Nunito';" class="text-right">{{ @$currentBlance < 0 ? '- $': '$' }}{{ str_replace('-','', number_format( @$currentBlance,2)) ?? 0.00 }}</td>
										</tr>

									</tfoot>
								</table><!-- end .table-responsive -->
							</div>
						</div><!-- end .table-rep-plugin-->
					</div><!-- end .responsive-table-plugin-->
				</div><!-- end card-box -->


				<span style="padding: 4px 0; margin-left:0; font-size:27px; border-top-color: #fff; font-family: 'Nunito'; border-bottom-color: #fff; color:#000;">Disclaimer</span>
				<p style="width: 100%; margin-top:20px; text-align:justify">
					Eden Capital suggests you carefully check all entries on your statement.
					Apparent errors or possible unauthorised transactions are to be promptly
					reported to Eden Capital. It is important that you notify Eden Capital of any
					disputed transactions as soon as possible as Eden Capital’s ability to investigate
					disputed transactions and to subsequently process a refund is restricted by time
					limits. If you wish to obtain further information about this product (including
					your refund rights) or you have a question or concern about your account or its
					operation please contact Eden Capital on 1800 110 811 or
					accounts@edencapital.co.
				</p>


			</div>
		</div><!-- end row-->
	</div>
	{{-- <p style="page-break-after: never;">

	</p> --}}

</main>

</body>
</html>
