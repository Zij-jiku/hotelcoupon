<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Unibox Hotel Invoice</title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
				margin-bottom: 5px;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>

	<body>
		<div class="invoice-box">
			<img src="https://i.ibb.co/4pHwgqw/unibox-hotel-logo.png" alt="unibox-hotel-logo" border="0" style="position: absolute; top: 30%; left: 50%; transform:  translate(-50%); opacity: .2">

			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="https://i.ibb.co/4pHwgqw/unibox-hotel-logo.png" style="width: 100%; max-width: 300px" />
								</td>

								<td>
									Invoice #: {{ $coupon_info->user_id }}<br />
									Created: {{ $coupon_info->date }} <br />
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									15 Grays corner,LEY STREET <br />
									ILFORD-IG27RQ<br />
									LONDON
								</td>
								
								<td>
									Guest<br />
									<span style="font-weight: 700">{{ $coupon_info->fullname }}</span><br />
									{{ $coupon_info->email }}
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Hotel Name</td>
					<td> {{ $coupon_info->hotelname }} </td>
				</tr>

				<tr class="heading">
					<td>Coupon Code</td>
					<td><span style="text-transform: uppercase">{{ $coupon_info->couponcode }}</span></td>
				</tr>
			</table>

			<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, ipsam. Nulla reprehenderit illum iure labore 
			    aut ducimus eligendi eaque nam necessitatibus laudantium debitis doloribus aliquid ea expedita deseruniandae ducimus maxime?</p>

				<table>
					<tr class="item last">
						<td>Unibox Hotel</td>
					</tr>
	
					<tr class="total">
						<td>Thank you</td>
					</tr>
				</table>

		</div>
	</body>
</html>
