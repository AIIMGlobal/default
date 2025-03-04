<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Transactions</title>
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
		}

		/** Define the header rules **/
		header {
			position: fixed;
			width: 100%;
			top: 0cm;
			left: 0cm;
			right: 0cm;
			height: 200px;

			/** Extra personal styles **/
			background-color: #03a9f4;
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
		.page-break {
			page-break-after: always;
		}


		#pageCounter {
  counter-reset: pageTotal;
}
#pageCounter span {
  counter-increment: pageTotal;
}
#pageNumbers {
  counter-reset: currentPage;
}
#pageNumbers div:before {
  counter-increment: currentPage;
  content: "Page " counter(currentPage) " of ";
}
#pageNumbers div:after {
  content: counter(pageTotal);
}
	</style>
</head>
<body style="background: #fff;">

	<div class="row">
		{{-- <div class="page-break"></div> --}}



		<footer>
			<table class="table" boder="0">
				<tbody>
					<tr>
						<td style="padding:0; border:none;">Eden Capital (Australia) Pty Ltd trading as Eden Capital (ABN 83 602 485 487) Australia Credit Licence 476320</td>
						<td style="padding:0; border:none;text-align: right;">OBS.v.1.IS</td>
					</tr>
				</tbody>
			</table>
        </footer>


		<div class="col-12">

			<div class="card-box-custome">
				<img src="/var/www/html/obs/public/admin-assets/images/logo.png" alt="">

				<div class="responsive-table-plugin" style="background: #fff;">
					<div class="table-wrapper">
						<div class="table-rep-plugin fixed-solution" data-pattern="priority-columns">
							<div class="table-responsive" data-pattern="priority-columns">
								<table class="table table-centered" width="100">
									<tbody>
										<tr class="odd" role="row">
											<td style="padding:2px; font-size: 14px!important;border-top-color:#fff;padding-bottom: 0px;" valign="top" height="100">
												<p style="margin: 0; padding:0">
													Eden Capital (Australia) Pty Ltd
												</p>
												<p style="margin: 0; padding:0">
													ABN 83 602 485 487
												</p>
												<p style="margin: 0; padding:0">
													Australian Credit Licence 476320
												</p>
												<table class="table mt-5 table-centered">
													<tbody>
														<tr>
															<td class="text-left" style="padding:2px; color:#00a9de; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"></td>
															<td class="text-right" style="padding:2px; color:#00a9de; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"></td>
														</tr>

														<tr>
															<td class="text-left" style="padding:2px; color:#00a9de; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"></td>
															<td class="text-right" style="padding:2px; color:#00a9de; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"></td>
														</tr>

														<tr>
															<td class="text-left" style="padding:2px; color:#00a9de; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"></td>
															<td class="text-right" style="padding:2px; color:#00a9de; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"></td>
														</tr>

														<tr>
															<td class="text-left" style="padding:2px; color:#00a9de; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"></td>
															<td class="text-right" style="padding:2px; color:#00a9de; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"></td>
														</tr>
														<tr>
															<td class="text-left" style="padding:2px; color:#00a9de; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"></td>
															<td class="text-right" style="padding:2px; color:#00a9de; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"></td>
														</tr>

														<tr>
															<td class="text-left" style="padding:2px; padding-top: 6px;  color:#00a9de; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"></td>
															<td class="text-right" style="padding:2px; padding-top: 6px;  color:#00a9de; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"></td>
														</tr>


													</tbody>
												</table>
											</td>

											<td width="45%" height="0" style="padding:2px; color:#5496EE; text-align:center; font-size: 25px !important;border-top-color: #fff;padding-bottom: 0px;" valign="top">
												YOUR STATEMENT

												<table class="table table-centered">
													<tbody>
														<tr>
															<td width="50%" class="text-left" style="padding:2px; color:#202020; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"><b>Account Number</b></td>
															<td class="text-right" style="padding:2px; color:#202020; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;">{{ $account_number->account_number }}</td>
														</tr>

														<tr>
															<td width="50%" class="text-left" style="padding:2px; color:#202020; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"><b>Statement starts</b></td>
															<td class="text-right" style="padding:2px; color:#202020; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;">{{ date('d/m/Y', strtotime($stateMentStart->tr_issue_date) ) }}</td>
														</tr>

														<tr>
															<td width="50%" class="text-left" style="padding:2px; color:#202020; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"><b>Statement ends</b></td>
															<td class="text-right" style="padding:2px; color:#202020; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;">{{ date('d/m/Y', strtotime($stateMentEnds->tr_issue_date) ) }}</td>
														</tr>

														<tr>
															<td width="50%" class="text-left" style="padding:2px; color:#202020; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"><b>Opening Balance</b></td>
															<td class="text-right" style="padding:2px; color:#202020; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"> {{ $openingBalance < 0 ? '- $': '$' }}{{ str_replace('-','', number_format( $openingBalance,2)) ?? 0.00 }} DR</td>
														</tr>

														<tr>
															<td width="50%" class="text-left" style="padding:2px; color:#202020; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"><b>Closing Balance</b></td>
															<td class="text-right" style="padding:2px; color:#202020; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;">{{ $currentBlance < 0 ? '- $': '$' }}{{ str_replace('-','', number_format( $currentBlance,2)) ?? 0.00 }} DR</td>
														</tr>

														<tr>
															<td width="50%" class="text-left" style="padding:2px; padding-top: 6px; color:#202020; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;"><b>Enquiries</b></td>
															<td class="text-right" style="padding:2px;  padding-top: 6px;  color:#202020; text-align:center; font-size: 14px !important;border-top-color: #fff;padding-bottom: 0px;">accounts@edencapital.co</td>
														</tr>

													</tbody>
												</table>

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
								<table class="table table-centered">
									<tbody>
										<tr class="odd" role="row">
											<td width="15%" height="0" style="padding:2px; font-size: 20px !important;border-top-color: #fff;padding-bottom: 0px;" valign="top"><b>TO</b>
											<div class="mt-4"></div>
											</td>

											@if ( !empty($account_number->UserId))
												@php
													$customerName = ''
												@endphp
												@foreach ($account_number->UserId as $key => $user)
													<td style="padding:2px; font-size: 14px!important;border-top-color:#fff;padding-bottom: 0px; text-transform: uppercase;">
														<p style="margin: 0; padding:0">
															{{ getUsersByCustomerId($user->customer_number)->name }}
														</p>

														<p style="margin: 0; padding:0; text-transform: uppercase;">
															{{ getUsersByCustomerId($user->customer_number)->street_address }}
														</p>
														<p style="margin: 0; padding:0;text-transform: uppercase;">
															{{ getUsersByCustomerId($user->customer_number)->city }},
															{{ getUsersByCustomerId($user->customer_number)->state }},
															{{ getUsersByCustomerId($user->customer_number)->postcode }},
														</p>
														<p style="margin: 0; padding:0;text-transform: uppercase;">
															AUSTRAILA
														</p>
													</td>
												@endforeach
											@endif

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
								<table class="table table-centered" height="200">
									<tbody>
										<tr class="odd" role="row">
											<td style="border-color: #fff; float:left; padding:0" width="15%">
												<img src="{{ asset('public/admin-assets/images/bar-code.png') }}" style="max-width:300px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" alt="">
											</td>

											<td style="border-color: #fff;" valign="top"  width="85%">
												<table class="table table-centered" width="100%">
													<thead>
														<tr>
															<td width="25%" style="padding:2px; padding-bottom:3px; font-weight:bold; color:#000; line-height:60px; font-size: 25px !important; border-top-color: #fff; border-bottom: solid 3px #00a9de;">Eziloan</th>
															<th style="padding:2px;  line-height:65px; font-size: 25px!important; border-top-color:#fff; border-bottom: solid 3px #00a9de;"></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td style="padding:2px; font-size:14px; font-weight:bold; color:#000; line-height: 33px; border-color: #fff; padding-top:3px; padding-bottom: 6px;"><b>ACCOUNT NAME:</b></td>
															<td style="padding:2px; font-size:14px; line-height: 33px; border-color: #fff; padding-top:3px; padding-bottom: 6px;">
																@if ( !empty($account_number->UserId))
																	@php
																		$customerName = ''
																	@endphp
																	@foreach ($account_number->UserId as $key => $user)
																		{{ getUsersByCustomerId($user->customer_number)->name.', ' }}
																	@endforeach
																@endif

															</td>
														</tr>
														<tr>
															<td style="padding:2px; font-size:14px; font-weight:bold; color:#000; line-height: 33px; border-color: #fff; padding-top:3px; padding-bottom: 3px;"><b>NOTE:</b></td>
															<td style="padding:2px; font-size:14px; line-height: 26px; border-color: #fff; padding-top:3px; padding-bottom: 3px;">For further information on your account including transfers and any errors or complaints, please contact us on the details above.</td>
														</tr>
														<tr>
														<td style="padding:2px; font-size:14px; font-weight:bold; color:#000; line-height: 33px; border-top-color:#fff; padding-top:3px; padding-bottom: 6px;"><b>PAGE NUMBER:</b></td>
														<td style="padding:2px; font-size:14px; line-height: 33px; border-top-color:#fff; border-bottom: 3px solid #00a9de; padding-top:3px; padding-bottom: 6px;">
															{{-- <span class="pagenum"></span> of DOMPDF_PAGE_COUNT_PLACEHOLDER --}}

															{{-- <span class="num"></span> of {{ $text ?? 'dk' }} --}}
															<script type="text/php">
																if (isset($pdf)) {

																	$pdf->page_script('
																		$text = sprintf(_(" %d of %d"),  $PAGE_NUM, $PAGE_COUNT);
																		// Uncomment the following line if you use a Laravel-based i18n
																		//$text = __("Page :pageNum of :pageCount", ["pageNum" => $PAGE_NUM, "pageCount" => $PAGE_COUNT]);
																		$font = null;
																		$size = 11;
																		$color = array(0,0,0);
																		$word_space = 0.0;  //  default
																		$char_space = 0.0;  //  default
																		$angle = 0.0;   //  default

																		// Compute text width to center correctly
																		$textWidth = $fontMetrics->getTextWidth($text, $font, $size);

																		$x = ($pdf->get_width() - $textWidth) / 2;
																		$y = $pdf->get_height() - 35;

																		$pdf->text(233, 481, $text, $font, $size, $color, $word_space, $char_space, $angle);
																	'); // End of page_script
																}
															</script>
														</td>
														</tr>
													</tbody>
												</table>
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
								<table class="table mt-4 table-centered">
									<thead style="background: #00a9de; color:#fff;">
										<tr>
											<th width="15%" style="padding: 2px;">DATE</th>
											<th width="40%" style="padding: 2px;">TRANSACTION DETAILS</th>
											<th style="padding: 2px;">DEBIT($)</th>
											<th style="padding: 2px;">CREDIT($)</th>
											<th style="padding: 2px;" class="text-right">BALANCE($)</th>
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
													<td style="border-bottom: 1px solid #fff !important;padding:2px;">{{ date('d/m/Y', strtotime($transaction->tr_issue_date)) }}</td>
													<td style="padding:2px;">{{ $transaction->transaction_type }}</td>
													<td style="padding:2px;">${{ number_format ( $transaction->debit,2) }}</td>
													<td style="padding:2px;">${{ number_format( $transaction->credit,2) }}</td>
													<td style="padding:2px;" class="text-right">{{ $transaction->balance < 0 ? '- $':'$' }}{{ str_replace('-','',number_format( $transaction->balance,2) ) }}</td>

												</tr>
											@endforeach
										@endif

									</tbody>
									<tfoot style="background: #00a9de; color:#fff;">
										<tr>
											<td style="padding: 2px;"></td>
											<td style="padding: 2px;">TOTAL AT END OF PERIOD</td>
											<td style="padding: 2px;">${{ str_replace('-','',number_format( $totalDebit,2) ) }}</td>
											<td style="padding: 2px;">${{ str_replace('-','',number_format( $totalCredit,2) ) }}</td>
											<td style="padding: 2px;" class="text-right">{{ $currentBlance < 0 ? '- $': '$' }}{{ str_replace('-','', number_format( $currentBlance,2)) ?? 0.00 }}</td>
										</tr>

									</tfoot>
								</table><!-- end .table-responsive -->
							</div>
						</div><!-- end .table-rep-plugin-->
					</div><!-- end .responsive-table-plugin-->
				</div><!-- end card-box -->

				<div class="responsive-table-plugin" style="background: #fff;">
					<div class="table-wrapper">
						<div class="table-rep-plugin fixed-solution" data-pattern="priority-columns">
							<div class="table-responsive" data-pattern="priority-columns">
								<table class="table mt-4 table-centered">
									<thead style="background: #00a9de; color:#fff;">
										<tr>
											<th width="40%" style="padding: 2px;" colspan="3">FEE SUMMARY DURING PERIOD</th>
										</tr>

									</thead>

									<tbody>
										<tr>
											<td width="15%" style="padding: 2px; border-color: #fff;"><b>Date</b></td>
											<td width="40%" style="padding: 2px;"><b>Transaction টাইপ</b></td>
											<td style="padding: 2px;" class="text-right"><b>Free Charged</b></td>
										</tr>

										@if ( !empty($transactionFee) )
											@foreach ($transactionFee as $key => $fee)
												<tr class="odd" role="row">
													<td style="border-bottom: 1px solid #fff !important;padding:2px;">{{ date('d/m/Y', strtotime($fee->tr_issue_date)) }}</td>
													<td style="padding:2px;">{{ $fee->getTransactionType->type_name ?? 'Unknown' }}</td>
													<td style="padding:2px;" class="text-right">- ${{ number_format( $fee->debit,2) }}</td>
												</tr>
											@endforeach
										@endif

									</tbody>
								</table><!-- end .table-responsive -->

							</div>
						</div><!-- end .table-rep-plugin-->
					</div><!-- end .responsive-table-plugin-->
				</div><!-- end card-box -->

				<p style="width: 100%; margin-top:23px; text-align:justify">
					Eden Capital suggests you carefully check all entries on your statement. Apparent errors or possible unauthorised transactions
					are to be promptly reported to Eden Capital. It is important that you notify Eden Capital of any disputed transactions as soon as
					possible as Eden Capital’s ability to investigate disputed transactions and to subsequently process a refund is restricted by time
					limits. If you wish to obtain further information about this product (including your refund rights) or you have a question or
					concern about your account or its operation please contact Eden Capital (details supplied on the front of the statement).
				</p>

			</div>
		</div><!-- end row-->
	</div>

</body>
</html>
